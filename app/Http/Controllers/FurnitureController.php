<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\addClass;
use App\Attendance;
use App\BloodGroup;
use App\Bus;
use App\BusStop;
use App\Caste;
use App\Driver;
use App\Employee;
use App\Events;
use App\Exam;
use App\Fee;
use App\FeeFrequency;
use App\FeeStructure;
use App\FeeSummary;
use App\Feedback;
use App\Gallery;
use App\Holiday;
use App\Homework;
use App\Leave;
use App\Library;
use App\NotificationType;
use App\Post;
use App\Report;
use App\Result;
use App\StuParent;
use App\Religion;
use App\School;
use App\Section;
use App\Session;
use App\Splash;
use App\Staff;
use App\Salary;
use App\Students;
use App\Subject;
use App\TimeTable;
use App\Teacher_attendance;
use App\User;
use App\Installment;
use App\FeeStructuree;
use App\Payment;
use App\FurnitureCategory;
use App\FurnitureDetails;
use App\FurnitureSubCategory;
use App\FurnitureDistribution;

use Validator,
    Redirect,
    Auth,
    api;
use DB;
use App\Http\Requests\AddFurniture;
use App\Http\Requests\SaveDistribute;

class FurnitureController extends Controller
{
    private $active_session;//updated 2-6-2018

    public function __construct()
    {
        /*updated 2-6-2018*/
        $this->active_session = Session::where('school_id', \Auth::user()->school_id)
            ->where('active','1')->first();
        if (Auth::check()) {
            $this->user = \Auth::user();
            if(Auth::user()->type == 'school' || Auth::user()->type == 'user_role'){
                $classes = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)//updated 2-6-2018
                    ->get();
                $students = Students::where('school_id', \Auth::user()->school_id)->count();
                $employees = Employee::where('school_id', \Auth::user()->school_id)->count();
                $busCount = Bus::where('school_id', \Auth::user()->school_id)->count();
                $school_image = School::where('id', \Auth::user()->school_id)->first();
                $examtypes = Exam::where('school_id', \Auth::user()->school_id)->get();
                $birthdays = Students::where('student.dob', 'LIKE', '%' . date('d-m') . '%')
                    ->where('student.session_id','=',$this->active_session->id)//updated 2-6-2018
                    ->where('student.school_id', \Auth::user()->school_id)->leftJoin('class', 'student.class_id', '=', 'class.id')->select('student.id', 'student.name', 'student.roll_no', 'class.class')->get();
            }else{
                $classes = addClass::where('school_id', \Auth::user()->school_id)->get();
                $employeeObj = Employee::where('user_id', \Auth::user()->id)->where('school_id', \Auth::user()->school_id)->first();
                $students = Students::where('school_id', \Auth::user()->school_id)->where('class_id', $employeeObj->class)->where('section_id', $employeeObj->section)->count();
                $employees = Employee::where('school_id', \Auth::user()->school_id)->where('class', $employeeObj->class)->where('section', $employeeObj->section)->count();
                $school_image = School::where('id', \Auth::user()->school_id)->first();
            }
            $roler = [];
            if (Auth::user()->type == 'user_role') {
                $roleuser = \DB::table('user_role')->where('role_id', Auth::user()->id)->get();
                foreach ($roleuser as $role) {
                    array_push($roler, $role->value);
                }
            }
            $userplans=[];
            if(!$school_image->userplan){
                $school_image->userplan='Basic';
            }
            if($school_image->userplan){
                $userplandetail= \DB::table('schooluser_plan')->where($school_image->userplan, 1)->select('Modules')->get();
                if($userplandetail)
                {
                    foreach ($userplandetail as $key => $value) {
                        array_push($userplans, $userplandetail[$key]->Modules);
                    }
                }
            }
            if($school_image->userplanAdded){
                $explodearray=explode(",",$school_image->userplanAdded);
                $userplansadded=\DB::table('schooluser_plan')->whereIn('id', $explodearray)->select('Modules')->get();
                if($userplansadded){
                    foreach ($userplansadded as $key => $value) {
                        array_push($userplans, $userplansadded[$key]->Modules);
                    }
                }
            }
            view()->share(compact('classes', 'employees', 'students', 'school_image', 'birthdays', 'examtypes', 'busCount', 'abses', 'roler','userplans'));
        }
    }

    public function addFurniture(){
        $category=FurnitureCategory::where('school_id',\Auth::user()->school_id)->get();
        $sub_category=FurnitureSubCategory::where('school_id',\Auth::user()->school_id)->get();
        return view('users.furniture.add',compact('category','sub_category'));
    }

    public function furnitureList(){
        $permission=array('add','edit','view','delete','download');
        $furniturelist=FurnitureDetails::where('school_id',\Auth::user()->school_id)
            ->where('is_delete','!=','1')->get();
        return view('users.furniture.list',compact('furniturelist','permission'));
    }
    public function documentindex(){
        return view('users.admin-document.index');
    }
    public function addFurnitureCategory(){
        $request=\Request::all(); 
        $is_exist=FurnitureCategory::where('category','=',ucfirst($request['newcategory']))->where('school_id',\Auth::user()->school_id)->first();
        if($is_exist){
            $data="";
        }else{
            FurnitureCategory::insert(
                ['school_id'=>\Auth::user()->school_id,
                'user_id'=>\Auth::user()->id,
                'type'=>$request['category_type'],
                'category'=>ucfirst($request['newcategory'])
            ]);
            $data=ucfirst($request['newcategory']);
        }
    return $data;
    }

    public function addFurnitureSubCategory(){
        $request=\Request::all(); 
        $is_exist=FurnitureSubCategory::where('category','=',ucfirst($request['newcategory']))->where('school_id',\Auth::user()->school_id)->where('sub_category','=',ucfirst($request['subcategory']))->first();
        if($is_exist){
            $data="";
        }else{
            FurnitureSubCategory::insert(['school_id'=>\Auth::user()->school_id,
                'user_id'=>\Auth::user()->id,
                'category'=>ucfirst($request['newcategory']),
                'sub_category'=>ucfirst($request['subcategory'])
            ]);
            $data=ucfirst($request['subcategory']);
        }
        return $data;
    }

    public function getFurnitureSubCategory(){
       $request=\Request::all(); 
       $is_exist=FurnitureSubCategory::where('category','=',ucfirst($request['category']))->where('school_id',\Auth::user()->school_id)->get();
       return $is_exist;
    }

    public function addFurnitureType(){
        $request=\Request::all(); 
        $is_exist=FurnitureCategory::where('type','=',$request['category'])->where('school_id',\Auth::user()->school_id)->get();
       return $is_exist;
    }
    
    public function furniturePost(AddFurniture $request){
        $input=$input=$request->all();
        $amt=$input['quantity']*$input['purchaserate'];
        $remarks=isset($input['remarks'])?$input['remarks']:'';
        $distributionrate=isset($input['distributionrate'])?$input['distributionrate']:'';
        FurnitureDetails::insert([
            'school_id'=>\Auth::user()->school_id,
            'user_id'=>\Auth::user()->id,
            'type'=>$input['type'],
            'category'=>$input['category'],
            'sub_category'=>$input['subcategory'],
            'item_name'=>$input['Itemname'],
            'quantity'=>$input['quantity'],
            'avail_quantity'=>$input['quantity'],
            'comment'=>$remarks,
            'distribute_rate'=>$distributionrate,
            'purchaserate'=>$input['purchaserate'],
            'amount'=>$amt
            ]);
        \Session::flash('Success-fur','Furniture Added Successfully');
    return redirect()->route('furniturelist');
    }

    public function editFurniture($id){
        $category=FurnitureCategory::where('school_id',\Auth::user()->school_id)->get();
        $sub_category=FurnitureSubCategory::where('school_id',\Auth::user()->school_id)->get();
        $furnitureDetails=FurnitureDetails::where('id',$id)->first();
        return view('users.furniture.edit',compact('category','furnitureDetails'));
    }

   public function furnitureUpdate(AddFurniture $request,$id){
        $input=$input=$request->all();
        $remarks=isset($input['remarks'])?$input['remarks']:'';
        $distributionrate=isset($input['distributionrate'])?$input['distributionrate']:'';
        $is_distribute=FurnitureDistribution::where('purchase_id',$id)->first();
        if($is_distribute){
            \Session::flash('Error','Already Distribution is Started');
            return redirect()->route('furniturelist');
        }
        $amt=$input['quantity']*$input['purchaserate'];
        FurnitureDetails::where('id',$id)->update([
            'type'=>$input['type'],
            'category'=>$input['category'],
            'sub_category'=>$input['subcategory'],
            'item_name'=>$input['Itemname'],
            'quantity'=>$input['quantity'],
            'avail_quantity'=>$input['quantity'],
            'comment'=>$remarks,
            'distribute_rate'=>$distributionrate,
            'purchaserate'=>$input['purchaserate'],
            'amount'=>$amt
            ]);
        \Session::flash('Success-fur','Furniture Updated Successfully');
    return redirect()->route('furniturelist');
   }
   public function getconductcertificate(){
        $classes = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->get();
       // dd($classes);
      return view('users.admin-document.HR.getconduct_certify',compact('classes'));
    }
   public function getbonafiedcertificate(){
        $classes = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->get();
       // dd($classes);
      return view('users.admin-document.HR.getbona_certify',compact('classes'));
    }
    public function postBonafiedcertificate(){
        $input=\Request::all();
       // dd($input);
         // work order number
        // Get the last order id
        $lastno = DB::table('hr_certificate')->orderBy('created_at','DESC')->first();
       // $order_id = '#'.str_pad($latestOrder->order_id + 1, 8, "0", STR_PAD_LEFT);
       // dd($latestOrder);
        if($lastno){
          $last_certId=$lastno->certificate_id;
          
        }else{
          $last_certId='CER-' . date('Ymd').'0000';
         // dd($lastorderId);
        }
// Get last 3 digits of last order id
            $lastIncreament = substr($last_certId, -4);

            // Make a new order id with appending last increment + 1
            $newcertificateId = 'CER-' . date('Ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);
        //dd($input,$newcertificateId);
        DB::table('hr_certificate')->insert(
                array(
                'school_id' => Auth::user()->school_id,
                'session_id' => $this->active_session->id,
                'certificate_id' => $newcertificateId,
                'reg_no' => $input['regno'],
                'type' => $input['type'],
                'from_class' => $input['fromclass'],
                'to_class'=>$input['toclass'],
                'from_year' =>$input['fromyear'],
                'to_year' =>$input['toyear'],
                'remarks' =>$input['purpose'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                
                ));

         $school = \DB::table('school')->where('id', \Auth::user()->school_id)->first();
        $session = \DB::table('session')->where('school_id', \Auth::user()->school_id)
            ->where('active',1)->first();

        $student =\DB::table('student')
                            ->where('student.registration_no','=', $input['regno'])->join('parent', 'student.parent_id', '=', 'parent.id')
                            ->select('student.name as student_name', 'parent.name as parent_name', 'parent.address','student.dob')
                            ->first();
        $fromclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['fromclass'])
                    ->first();
        $toclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['toclass'])
                    ->first();
      return view('users.admin-document.HR.bonafiedcertificate',compact('input','school','session','student','fromclass','toclass'));
    }
    public function postConductcertificate(){
        $input=\Request::all();
       // dd($input);
         // work order number
        // Get the last order id
        $lastno = DB::table('hr_certificate')->orderBy('created_at','DESC')->first();
       // $order_id = '#'.str_pad($latestOrder->order_id + 1, 8, "0", STR_PAD_LEFT);
       // dd($latestOrder);
        if($lastno){
          $last_certId=$lastno->certificate_id;
          
        }else{
          $last_certId='CER-' . date('Ymd').'0000';
         // dd($lastorderId);
        }
// Get last 3 digits of last order id
            $lastIncreament = substr($last_certId, -4);

            // Make a new order id with appending last increment + 1
            $newcertificateId = 'CER-' . date('Ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);
        //dd($input,$newcertificateId);
        DB::table('hr_certificate')->insert(
                array(
                'school_id' => Auth::user()->school_id,
                'session_id' => $this->active_session->id,
                'certificate_id' => $newcertificateId,
                'reg_no' => $input['regno'],
                'type' => $input['type'],
                'from_class' => $input['fromclass'],
                'to_class'=>$input['toclass'],
                'from_year' =>$input['fromyear'],
                'to_year' =>$input['toyear'],
               // 'remarks' =>$input['purpose'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                
                ));

         $school = \DB::table('school')->where('id', \Auth::user()->school_id)->first();
        $session = \DB::table('session')->where('school_id', \Auth::user()->school_id)
            ->where('active',1)->first();

        $student =\DB::table('student')
                            ->where('student.registration_no','=', $input['regno'])->join('parent', 'student.parent_id', '=', 'parent.id')
                            ->select('student.name as student_name', 'parent.name as parent_name', 'parent.address','student.dob')
                            ->first();
        $fromclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['fromclass'])
                    ->first();
        $toclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['toclass'])
                    ->first();
      return view('users.admin-document.HR.conductcertificate',compact('input','school','session','student','fromclass','toclass'));
    }
   public function getAttendancecertificate(){
        $classes = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->get();
       // dd($classes);
      return view('users.admin-document.HR.getatte_certify',compact('classes'));
    }
    public function postfeepaidcertificate(){
        $input=\Request::all();
         // work order number
      //  dd($input);
        // Get the last order id
        $lastno = DB::table('hr_certificate')->orderBy('created_at','DESC')->first();
       // $order_id = '#'.str_pad($latestOrder->order_id + 1, 8, "0", STR_PAD_LEFT);
       // dd($latestOrder);
        if($lastno){
          $last_certId=$lastno->certificate_id;
          
        }else{
          $last_certId='CER-' . date('Ymd').'0000';
         // dd($lastorderId);
        }
// Get last 3 digits of last order id
            $lastIncreament = substr($last_certId, -4);

            // Make a new order id with appending last increment + 1
            $newcertificateId = 'CER-' . date('Ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);
        //dd($input,$newcertificateId);
        DB::table('hr_certificate')->insert(
                array(
                'school_id' => Auth::user()->school_id,
                'session_id' => $this->active_session->id,
                'certificate_id' => $newcertificateId,
                'type' => $input['type'],
                'reg_no' => $input['regno'],
                'paid' => $input['amt'],
               // 'to_class'=>$input['toclass'],
               // 'from_year' =>$input['fromyear'],
               // 'to_year' =>$input['toyear'],
                'remarks' =>$input['purpose'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                
                ));

         $school = \DB::table('school')->where('id', \Auth::user()->school_id)->first();
        $session = \DB::table('session')->where('school_id', \Auth::user()->school_id)
            ->where('active',1)->first();

        $student =\DB::table('student')
                            ->where('student.registration_no','=', $input['regno'])
                            ->join('parent', 'student.parent_id', '=', 'parent.id')
                            ->join('class', 'student.class_id', '=', 'class.id')
                            ->select('student.name as student_name', 'parent.name as parent_name', 'parent.address','class.class')
                            ->first();
       // $student = \DB::table('student')->where('school_id', \Auth::user()->school_id)
               // ->join('parent', 'student.parent_id', '=', 'parent.id')
              //  ->where('student.registration_no',$input['regno'])->select('student.name as student_name','parent.name as parent_name')->first();
        //dd($input,$school,$session,$student);
      return view('users.admin-document.HR.schoolfeepaidcertificate',compact('input','school','session','student'));
    }
    public function getfeetobepaidcertificate(){
      // dd('dddddd');
      return view('users.admin-document.HR.gettobe_paid_certify');
    }
    public function post10thpasscertificate(){
        $input=\Request::all();
         // work order number
        // Get the last order id
        $lastno = DB::table('hr_certificate')->orderBy('created_at','DESC')->first();
       // $order_id = '#'.str_pad($latestOrder->order_id + 1, 8, "0", STR_PAD_LEFT);
       // dd($latestOrder);
        if($lastno){
          $last_certId=$lastno->certificate_id;
          
        }else{
          $last_certId='CER-' . date('Ymd').'0000';
         // dd($lastorderId);
        }
// Get last 3 digits of last order id
            $lastIncreament = substr($last_certId, -4);

            // Make a new order id with appending last increment + 1
            $newcertificateId = 'CER-' . date('Ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);
        //dd($input,$newcertificateId);
        DB::table('hr_certificate')->insert(
                array(
                'school_id' => Auth::user()->school_id,
                'session_id' => $this->active_session->id,
                'certificate_id' => $newcertificateId,
                'type' => $input['type'],
                'reg_no' => $input['regno'],
                'from_class' => $input['fromclass'],
                'to_class'=>$input['toclass'],
                'from_year' =>$input['fromyear'],
                'to_year' =>$input['toyear'],
                'att_percent' =>$input['marks'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                
                ));

         $school = \DB::table('school')->where('id', \Auth::user()->school_id)->first();
        $session = \DB::table('session')->where('school_id', \Auth::user()->school_id)
            ->where('active',1)->first();

        $student =\DB::table('student')
                            ->where('student.registration_no','=', $input['regno'])->join('parent', 'student.parent_id', '=', 'parent.id')
                            ->select('student.name as student_name', 'parent.name as parent_name', 'parent.address')
                            ->first();
        $fromclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['fromclass'])
                    ->first();
        $toclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['toclass'])
                    ->first();
      return view('users.admin-document.HR.10thpasscertificate',compact('input','school','session','student','fromclass','toclass'));
    }
    public function gettenthpasscertificate(){
        $classes = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->get();
       // dd($classes);
      return view('users.admin-document.HR.get10thpass_certify',compact('classes'));
    }
     public function postfeetobepaidcertificate(){
        $input=\Request::all();
         // work order number
      //  dd($input);
        // Get the last order id
        $lastno = DB::table('hr_certificate')->orderBy('created_at','DESC')->first();
       // $order_id = '#'.str_pad($latestOrder->order_id + 1, 8, "0", STR_PAD_LEFT);
       // dd($latestOrder);
        if($lastno){
          $last_certId=$lastno->certificate_id;
          
        }else{
          $last_certId='CER-' . date('Ymd').'0000';
         // dd($lastorderId);
        }
// Get last 3 digits of last order id
            $lastIncreament = substr($last_certId, -4);

            // Make a new order id with appending last increment + 1
            $newcertificateId = 'CER-' . date('Ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);
        //dd($input,$newcertificateId);
        DB::table('hr_certificate')->insert(
                array(
                'school_id' => Auth::user()->school_id,
                'session_id' => $this->active_session->id,
                'certificate_id' => $newcertificateId,
                'type' => $input['type'],
                'reg_no' => $input['regno'],
                'paid' => $input['amt'],
               // 'to_class'=>$input['toclass'],
               // 'from_year' =>$input['fromyear'],
               // 'to_year' =>$input['toyear'],
                'remarks' =>$input['purpose'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                
                ));

         $school = \DB::table('school')->where('id', \Auth::user()->school_id)->first();
        $session = \DB::table('session')->where('school_id', \Auth::user()->school_id)
            ->where('active',1)->first();

        $student =\DB::table('student')
                            ->where('student.registration_no','=', $input['regno'])
                            ->join('parent', 'student.parent_id', '=', 'parent.id')
                            ->join('class', 'student.class_id', '=', 'class.id')
                            ->select('student.name as student_name', 'parent.name as parent_name', 'parent.address','class.class')
                            ->first();
       // $student = \DB::table('student')->where('school_id', \Auth::user()->school_id)
               // ->join('parent', 'student.parent_id', '=', 'parent.id')
              //  ->where('student.registration_no',$input['regno'])->select('student.name as student_name','parent.name as parent_name')->first();
        //dd($input,$school,$session,$student);
      return view('users.admin-document.HR.schoolfeetobepaidcertificate',compact('input','school','session','student'));
    }
    public function getfeepaidcertificate(){
      // dd('dddddd');
      return view('users.admin-document.HR.getpaid_certify');
    }
    public function postAttendancecertificate(){
        $input=\Request::all();
         // work order number
        // Get the last order id
        $lastno = DB::table('hr_certificate')->orderBy('created_at','DESC')->first();
       // $order_id = '#'.str_pad($latestOrder->order_id + 1, 8, "0", STR_PAD_LEFT);
       // dd($latestOrder);
        if($lastno){
          $last_certId=$lastno->certificate_id;
          
        }else{
          $last_certId='CER-' . date('Ymd').'0000';
         // dd($lastorderId);
        }
        
// Get last 3 digits of last order id
            $lastIncreament = substr($last_certId, -4);

            // Make a new order id with appending last increment + 1
            $newcertificateId = 'CER-' . date('Ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);
        //dd($input,$newcertificateId);
        DB::table('hr_certificate')->insert(
                array(
                'school_id' => Auth::user()->school_id,
                'session_id' => $this->active_session->id,
                'certificate_id' => $newcertificateId,
                'reg_no' => $input['regno'],
                'type' => $input['type'],
                'from_class' => $input['fromclass'],
                'to_class'=>$input['toclass'],
                'from_year' =>$input['fromyear'],
                'to_year' =>$input['toyear'],
                'att_percent' =>$input['percentage'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                
                ));

         $school = \DB::table('school')->where('id', \Auth::user()->school_id)->first();
        $session = \DB::table('session')->where('school_id', \Auth::user()->school_id)
            ->where('active',1)->first();

        $student =\DB::table('student')
                            ->where('student.registration_no','=', $input['regno'])->join('parent', 'student.parent_id', '=', 'parent.id')
                            ->select('student.name as student_name', 'parent.name as parent_name', 'parent.address')
                            ->first();
        $fromclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['fromclass'])
                    ->first();
        $toclass = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=', $input['toclass'])
                    ->first();
       
      return view('users.admin-document.HR.attendancecertificate',compact('input','school','session','student','fromclass','toclass'));
    }

   public function furnitureReport(){
        return view('users.furniture.furni_report');
   }

   public function gennerateFurnitureReport(){
        $input = \Request::all();
        $userError = [                
            'type' => 'Category Type',
            'category' => 'Category',
            'subcategory' => 'Sub-Category'
            ];
        $validator = \Validator::make($input, [
            'type' => 'required',
            'category' => 'required',
            'subcategory' => 'required'
            ], $userError);
        $validator->setAttributeNames($userError);
        if($validator->fails())
            return Redirect::back()->withErrors($validator)->withInput($input);
        else{
            $furnitruedetails=FurnitureDetails::where('type',$input["type"])
                ->where('category',$input["category"])
                ->where('sub_category',$input["subcategory"])
                ->where('school_id',\Auth::user()->school_id)
                ->where('is_delete','!=','1')
                ->get();
            $reporthead="Furniture Report For ".$input["type"]." and ".$input["category"]." and ".$input["subcategory"];
            \Excel::create($input["type"]."_".$input["category"]."_".$input["subcategory"], function($excel) use ($furnitruedetails,$reporthead) {
                $excel->sheet('Excel sheet', function($sheet) use ($furnitruedetails,$reporthead) {
                    $sheet->loadView('users.furniture.furniture_report_view')->with('furnitruedetails',$furnitruedetails)->with('reporthead',$reporthead);
                });
            })->store('xls', storage_path('/public/excel'))->export('xls');
        }
   }

   public function distriFurnitureList(){
    $permission=array('add','edit','view','delete','download');
    $furniturelist=FurnitureDistribution::where('furniture_distribution_details.school_id',\Auth::user()->school_id)->
        leftJoin('class','furniture_distribution_details.class_id','=','class.id')
        ->leftJoin('section','furniture_distribution_details.section_id','=','section.id')
        ->leftJoin('student','furniture_distribution_details.registration_no','=','student.registration_no')
        ->where('class.school_id',\Auth::user()->school_id)
        ->where('section.school_id',\Auth::user()->school_id)
        ->where('student.school_id',\Auth::user()->school_id)
        ->where('furniture_distribution_details.is_delete','!=','1')
        ->select('furniture_distribution_details.id','furniture_distribution_details.purchase_id','furniture_distribution_details.class_id','class.class as class_name','section.section as section_name','furniture_distribution_details.registration_no','student.name as student_name','furniture_distribution_details.category','furniture_distribution_details.sub_category','furniture_distribution_details.item_name','furniture_distribution_details.quantity','furniture_distribution_details.avail_quantity','furniture_distribution_details.distribute_rate','furniture_distribution_details.amount','furniture_distribution_details.comment')
        ->get();
    return view('users.furniture.distribute_list',compact('furniturelist','permission'));
   }
  
   public function getAppointmentLetter()
    {
        
         $StaffType = \DB::table('staff')->where('school_id',\Auth::user()->school_id)
            ->get();
            foreach ($StaffType as $stafftype) {
                $stafftype=$stafftype->staff_type;
    }
    $AllStaffs1 = \DB::table('teacher')->where('school_id',\Auth::user()->school_id)
            ->get();
            foreach ($AllStaffs1 as $getAllStaffs2 ) {
                $getAllStaffs[]=$getAllStaffs2->name;
                $getuser_id[]=$getAllStaffs2->user_id;
            }
        $CurentSession = \DB::table('session')
            ->where('school_id', \Auth::user()->school_id)
            ->where('active',1)->first();
        $class = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->get();
            foreach ($class as $key => $value) {
                $classes=$value->class;
            }
            $session=$CurentSession->session;

        return view('users.admin-document.getappointmentletter',compact('AllStaffs1','getuser_id','getAllStaffs','stafftype','session','classes'));
    }

    public function appointmentLetterDetails()
    {
        $input=\Request::all();
        $username=$input['username'];
        $class=$input['class'];

        $schooldetails = \DB::table('school')->where('id',\Auth::user()->school_id)
            ->first();
        $userdetails = \DB::table('users')->where('school_id',\Auth::user()->school_id)->where('username',$username)
            ->first(); 
        $teacherdetails = \DB::table('teacher')->where('school_id',\Auth::user()->school_id)->where('user_id',$userdetails->id)
            ->first();

        $schoolname=$schooldetails->school_name;
        return view('users.admin-document.appointment_letter',compact('class','schooldetails','userdetails','teacherdetails'));
    }
    public function getRelieveLetter()
    {
        return view('users.admin-document.getrelievingletter');
    }
    public function studentIDCard()
    {
        //dd('hhhh');
        $classes = \DB::table('class')->where('school_id', \Auth::user()->school_id)
            ->where('session_id',$this->active_session->id)//updated 14-4-2018
            ->get();
        return view('users.admin-document.idcardindex',compact('classes'));
       
    }
    public function getStudentIDcard()
    {

        $input=\Request::all();
        $username=$input['username'];
        
        $students = \DB::table('student')->where('student.school_id', $this->user->school_id)
                ->where('student.session_id', $this->active_session->id)//updated 14-4-2018
                ->where('student.id', $input['student'])
                ->join('class', 'student.class_id', '=', 'class.id')
                ->join('section', 'student.section_id', '=', 'section.id')
                ->join('parent', 'student.parent_id', '=', 'parent.id')
                ->select('student.name as student_name', 'parent.mobile','parent.name','class.class','section.section','parent.address','student.dob','student.avatar')->first();
                
                        $schoolname= \DB::table('school')
                                    ->where('user_id',\Auth::user()->id)
                                    ->first();
        if($input['types'] == 'Portrait'){
               // dd('port');
                return view('users.admin-document.idcardcreatesss',compact('students','schoolname'));
            }else{
               // dd('lands');
                return view('users.admin-document.idcardLandscreatesss',compact('students','schoolname'));
            }
       
    }
    public function relievingLetterDetails()
    {

       $input=\Request::all();
        $username=$input['username'];
       
        $from = date('M-Y', strtotime($input['from']));
            $to = date('M-Y', strtotime($input['to']));
         //dd('input',$input);
        $school = \DB::table('school')->where('id',\Auth::user()->school_id)
            ->first();
        $userdetails = \DB::table('users')->where('school_id',\Auth::user()->school_id)->where('username',$username)
            ->first(); 
        $teacherdetails = \DB::table('teacher')->where('school_id',\Auth::user()->school_id)->where('user_id',$userdetails->id)
            ->first();
        $schoolname=$school->school_name;
        return view('users.admin-document.relieving_letter',compact('school','userdetails','teacherdetails','from','to','timestamp'));
    }
    public function getShowCauseNotice()
    {
         return view('users.admin-document.getshowcausenotice');
    }

    public function showcausenoticeDetails()
    {

       $input=\Request::all();
        $username=$input['username'];
        $date=$input['date'];
        $regno=$input['regno'];
        $period=$input['period'];

        $date = date('d-M-Y', strtotime($input['date']));
       
        $school = \DB::table('school')->where('id',\Auth::user()->school_id)
            ->first();
        $userdetails = \DB::table('users')->where('school_id',\Auth::user()->school_id)->where('username',$username)
            ->first(); 
        $teacherdetails = \DB::table('teacher')->where('school_id',\Auth::user()->school_id)->where('user_id',$userdetails->id)
            ->first();
        $students = \DB::table('student')->where('registration_no', $input['regno'])
                ->where('session_id',$this->active_session->id)//updated 14-4-2018
                ->where('school_id', \Auth::user()->school_id)->first();

        $schoolname=$school->school_name;

        $class = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=',$students->class_id)
                    ->first();
        $section = Section::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)->where('class_id', $students->class_id)->where('id', $students->section_id)->first();
        
        return view('users.admin-document.showcausenotice',compact('section','class','school','userdetails','teacherdetails','date','period','schooldetails'));

    }
     public function getBonafiedCertificateIT()
    {
         return view('users.admin-document.getbonafiedcertificateIT');
    }

    public function bonafiedITDetails()
    {

       $input=\Request::all();
        $amount=$input['amount'];
        
        $students = \DB::table('student')->where('registration_no', $input['regno'])
                ->where('session_id',$this->active_session->id)//updated 14-4-2018
                ->where('school_id', \Auth::user()->school_id)->first();
        $session = Session::where('school_id', Auth::user()->school_id)->where('active', 1)
            ->first();
        $parents = \DB::table('parent')->where('id', $students->parent_id)
                ->first();
        $school = \DB::table('school')->where('id',\Auth::user()->school_id)
            ->first();
        $class = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=',$students->class_id)
                    ->first();
        $section = Section::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)->where('class_id', $students->class_id)->where('id', $students->section_id)->first();
        return view('users.admin-document.bonafiedcertificateITdetails',compact('school','session','section','class','amount','students','parents'));

    }
     public function getBonafiedCertificatestudent()
    {
         return view('users.admin-document.getbonafiedcertificatestudent');

    }
    public function bonafiedstudentDetails()
    {

       $input=\Request::all();
        $students = \DB::table('student')->where('registration_no', $input['regno'])
                ->where('session_id',$this->active_session->id)//updated 14-4-2018
                ->where('school_id', \Auth::user()->school_id)->first();
        $session = Session::where('school_id', Auth::user()->school_id)->where('active', 1)
            ->first();
        $parents = \DB::table('parent')->where('id', $students->parent_id)
                ->first();
        $school = \DB::table('school')->where('id',\Auth::user()->school_id)
            ->first();
        $class = addClass::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)
                    ->where('id','=',$students->class_id)
                    ->first();
        $section = Section::where('school_id', \Auth::user()->school_id)
                    ->where('session_id','=',$this->active_session->id)->where('class_id', $students->class_id)->where('id', $students->section_id)->first();
        
        return view('users.admin-document.bonafiedcertificatestudentdetails',compact('school','session','section','class','students','parents'));

    }

    public function distribute($id){
        $class_id=\DB::table('class')->where('school_id',\Auth::user()->school_id)
            ->where('session_id','=',$this->active_session->id)//updated 2-6-2018
            ->get();
        $furniturelist=FurnitureDetails::where('id',$id)->first();
    return view('users.furniture.distribute',compact('furniturelist','class_id'));
    }

    public function distributereport(){
        return view('users.furniture.distribute_report');
    }

    public function distributereportGenerate(){
        $input = \Request::all();
        $userError = [                
            'type' => 'Category Type',
            'category' => 'Category',
            'subcategory' => 'Sub-Category'
            ];
        $validator = \Validator::make($input, [
            'type' => 'required',
            'category' => 'required',
            'subcategory' => 'required'
            ], $userError);
        $validator->setAttributeNames($userError);
        if($validator->fails())
            return Redirect::back()->withErrors($validator)->withInput($input);
        else{
            $furnitruedetails=FurnitureDetails::where('type',$input["type"])
                ->where('category',$input["category"])
                ->where('sub_category',$input["subcategory"])
                ->where('school_id',\Auth::user()->school_id)
            ->get();
            $report_array=array();
            foreach($furnitruedetails as $key => $value) {
                $arr=array($value->id);
                $furnituredistribution=FurnitureDistribution::whereIn('furniture_distribution_details.purchase_id',$arr)
                    ->leftJoin('class','furniture_distribution_details.class_id','=','class.id')
                    ->leftJoin('section','furniture_distribution_details.section_id','=','section.id')
                    ->leftJoin('student','furniture_distribution_details.registration_no','=','student.registration_no')
                    ->leftJoin('furniture_details','furniture_distribution_details.purchase_id','=','furniture_details.id')
                    ->where('class.school_id',\Auth::user()->school_id)
                    ->where('section.school_id',\Auth::user()->school_id)
                    ->where('student.school_id',\Auth::user()->school_id)
                    ->where('furniture_details.is_delete','!=','1')
                    ->where('furniture_distribution_details.is_delete','!=','1')
                    ->select('furniture_details.type','furniture_distribution_details.id','furniture_distribution_details.section_id','furniture_distribution_details.purchase_id','furniture_distribution_details.class_id','class.class as class_name','section.section as section_name','furniture_distribution_details.registration_no','student.name as student_name','furniture_distribution_details.category','furniture_distribution_details.sub_category','furniture_distribution_details.item_name','furniture_distribution_details.quantity','furniture_distribution_details.distribute_rate','furniture_distribution_details.amount','furniture_distribution_details.comment')
                    ->get();
                if(!empty($furnituredistribution)){
                    foreach ($furnituredistribution as $key_dis => $value_dis) {
                       array_push($report_array,$value_dis);
                    }
                }
            }
            if(count($report_array)>0){
                $reporthead="Distribution List Report ".$input["type"]." and ".$input["category"]." and ".$input["subcategory"];
                \Excel::create("Distribution_list_report_".$input["type"]."_".$input["category"]."_".$input["subcategory"], function($excel) use ($report_array,$reporthead) {
                    $excel->sheet('Excel sheet', function($sheet) use ($report_array,$reporthead) {
                        $sheet->loadView('users.furniture.distribute_report_view')->with('report_array',$report_array)->with('reporthead',$reporthead);
                    });
                })->store('xls', storage_path('/public/excel'))->export('xls');
            }else{
                $input["Error"]="Report Not Avialable";
                return \Redirect::back()->withInput($input);
            }
        }
    }

    public function distributeedit($id){
        $furnituredistribution=FurnitureDistribution::where('furniture_distribution_details.id',$id)->
        leftJoin('class','furniture_distribution_details.class_id','=','class.id')
        ->leftJoin('section','furniture_distribution_details.section_id','=','section.id')
        ->leftJoin('student','furniture_distribution_details.registration_no','=','student.registration_no')
        ->where('class.school_id',\Auth::user()->school_id)
        ->where('section.school_id',\Auth::user()->school_id)
        ->where('student.school_id',\Auth::user()->school_id)
        ->select('furniture_distribution_details.id','furniture_distribution_details.section_id','furniture_distribution_details.purchase_id','furniture_distribution_details.class_id','class.class as class_name','section.section as section_name','furniture_distribution_details.registration_no','student.name as student_name','furniture_distribution_details.category','furniture_distribution_details.sub_category','furniture_distribution_details.item_name','furniture_distribution_details.quantity','furniture_distribution_details.avail_quantity','furniture_distribution_details.distribute_rate','furniture_distribution_details.amount','furniture_distribution_details.comment')
        ->first();
    return view('users.furniture.distribute_edit',compact('furnituredistribution'));
    }

    public function distributeupdate(SaveDistribute $request,$id){
        $input=$request->all();
        $exist_distri=FurnitureDistribution::where('id',$id)->first();
        $available=FurnitureDetails::where('id',$input['stockid'])->first();
        if($input['quantity']==$input['oldquantity']){
            $sub_total=0;
            $avail_quantity=$available->avail_quantity;
        }
        else if($input['quantity']>$input['oldquantity']){
            $sub_total=abs($exist_distri->quantity-$input['quantity']);
            $avail_quantity=$available->avail_quantity-$sub_total;
        }
        else{
            $sub_total=abs($exist_distri->quantity-$input['quantity']);

            $avail_quantity=$available->avail_quantity+$sub_total;
        }
        if($sub_total>$avail_quantity){
            $input['fail'] = 'Given Quantity not available';
            return \Redirect::back()->withInput($input);
        }else{
            FurnitureDetails::where('id',$input['stockid'])->update(['avail_quantity'=>$avail_quantity]);
                $amt=$input['quantity']*$input['rate'];
                FurnitureDistribution::where('id',$id)->update([
                    'category'=>$input['category'],
                    'sub_category'=>$input['subcategory'],
                    'item_name'=>$input['Itemname'],
                    'quantity'=>$input['quantity'],
                    'avail_quantity'=>$avail_quantity,
                    'comment'=>$input['comment'],
                    'distribute_rate'=>$input['rate'],
                    'amount'=>$amt
                ]);
            }
            \Session::flash('Success-distri','Furniture Distribute Updated Successfully');
        return redirect()->route('distriFurnitureList');
    }

    public function distributeSectionid(){
        $request=\Request::all();
        $section_id =\DB::table('section')->where('school_id',\Auth::user()->school_id)->where('class_id',$request['class_id'])->get();
    return $section_id;
    }

    public function distributeStudentid(){
        $request=\Request::all();
        $students=\DB::table('student')->where('school_id',\Auth::user()->school_id)->where('class_id',$request['class_id'])->where('section_id',$request["section_id"])->select('id','registration_no','name')->get();
        return $students;
    }

    public function distributePost(SaveDistribute $request){
        $input=$request->all();
        $available=FurnitureDetails::where('id',$input['stockid'])->first();
        if($input['quantity']>$available->avail_quantity){
            $input['fail'] = 'Given Quantity not available';
            return \Redirect::back()->withInput($input);
        }
        else{
            $avail_quantity=$available->avail_quantity-$input['quantity'];
            FurnitureDetails::where('id',$input['stockid'])->update(['avail_quantity'=>$avail_quantity]);
            $amt=$input['quantity']*$input['rate'];
                FurnitureDistribution::insert([
                    'purchase_id'=>$input['stockid'],
                    'school_id'=>\Auth::user()->school_id,
                    'user_id'=>\Auth::user()->id,
                    'category'=>$input['category'],
                    'sub_category'=>$input['subcategory'],
                    'item_name'=>$input['Itemname'],
                    'quantity'=>$input['quantity'],
                    'class_id'=>$input['class_id'],
                    'section_id'=>$input['section_id'],
                    'registration_no'=>$input['Student_id'],
                    'avail_quantity'=>$avail_quantity,
                    'comment'=>$input['comment'],
                    'distribute_rate'=>$input['rate'],
                    'amount'=>$amt
                ]);
            }
        \Session::flash('Success-distri','Furniture Distributed Successfully');
        return redirect()->route('distriFurnitureList');
    }

    public function distributeview($id){
        //$distributeview=FurnitureDistribution::where('id',$id)->first();
        $distributeview=FurnitureDistribution::where('furniture_distribution_details.id',$id)->
        leftJoin('class','furniture_distribution_details.class_id','=','class.id')
        ->leftJoin('section','furniture_distribution_details.section_id','=','section.id')
        ->leftJoin('student','furniture_distribution_details.registration_no','=','student.registration_no')
        ->where('class.school_id',\Auth::user()->school_id)
        ->where('section.school_id',\Auth::user()->school_id)
        ->where('student.school_id',\Auth::user()->school_id)
        ->select('furniture_distribution_details.id','furniture_distribution_details.purchase_id','furniture_distribution_details.class_id','class.class as class_name','section.section as section_name','furniture_distribution_details.registration_no','student.name as student_name','furniture_distribution_details.category','furniture_distribution_details.sub_category','furniture_distribution_details.item_name','furniture_distribution_details.quantity','furniture_distribution_details.avail_quantity','furniture_distribution_details.distribute_rate','furniture_distribution_details.amount','furniture_distribution_details.comment')
        ->first();
        
        return view('users.furniture.distribute_view',compact('distributeview'));
    }

    public function distributedelete($id){
        FurnitureDistribution::where('id',$id)->update(['is_delete'=>'1']);//->delete();
        \Session::flash('Success-distri','Furniture Distribution Record delted Successfully');
        return redirect()->route('distriFurnitureList');
    }

    public function viewFurniture($id){
        $furnitureDetails= FurnitureDetails::where('id',$id)->first();
        return view('users.furniture.view',compact('furnitureDetails'));
    }

    public function deleteFurniture($id){
        FurnitureDistribution::where('purchase_id',$id)->update(['is_delete'=>'1']);//->delete();
        $furnitureDetails= FurnitureDetails::where('id',$id)->update(['is_delete'=>'1']);;
        \Session::flash('Success-fur','Furniture Deleted Successfully');
    return redirect()->route('furniturelist');
   }
  //  }


}
