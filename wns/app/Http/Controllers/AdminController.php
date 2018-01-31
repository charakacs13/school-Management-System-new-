<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\StuReg;
use App\StParent;
use App\Guardian;
use App\Emergency;
use App\teaReg;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function stdRegPage()
    {
      return view('admin/stdReg');
    }

    public function studentReg(Request $request)
    {
      $this->validate($request, [
        //student
        'admNo'   => 'required|numeric|unique:stu_regs',
        'addDate' => 'required|date|date_format:Y-m-d|after:yesterday',
        'fullName'=> 'required',
        'surname' => 'required',
        'fname'   => 'required|max:20',
        'far'     => 'required|numeric',
        'bDate'   => 'required|date|date_format:Y-m-d',
        'pAddress'=> 'required|max:225',
        'tAddress'=> 'max:225',
        'mPhone'  => 'numeric|max:9999999999',
        'lPhone'  => 'numeric|max:9999999999',

        //farther
        'fathName'       => 'required',
        'fathPAddress'   => 'required|max:225',
        'fathJobAddress' => 'max:225',
        'fathEmail'      => 'email',
        'fathMNo'        => 'numeric|max:9999999999',
        'fathJobNo'      => 'numeric|max:9999999999',

        //mother
        'motName'       => 'required',
        'motPAddress'   => 'required|max:225',
        'motJobAddress' => 'max:225',
        'motEmail'      => 'email',
        'motMNo'        => 'numeric|max:9999999999',
        'motJobNo'      => 'numeric|max:9999999999',

        //Guardian
        'guaName'        => 'required',
        'guaPAddress'    => 'required|max:225',
        'guaJobAddress'  => 'max:225',
        'guaEmail'       => 'email',
        'guaMNo'         => 'numeric|max:9999999999',
        'guaJobNo'       => 'numeric|max:9999999999',

        //Emergency Notices
        'emeName'     =>'required',
        'emePAddress' =>'required',
        'emeMNo'         => 'numeric|max:9999999999',
        'emeJobNo'       => 'numeric|max:9999999999',


      ]);

      $grade= $request->input('grade1') . $request->input('grade2');
      //user insert to users table
      $table = new User();
      $table->admition     =$request->input('admNo');
      $table->fname	       =$request->input('fname');
      $table->current_class	   =$grade;
      $table->position	   ="Student";

      $table->save();

      //StudentReg
      $table1 = new StuReg();



      $table1->admNo     =$request->input('admNo');
      $table1->admDate   =$request->input('addDate');
      $table1->fullName  =$request->input('fullName');
      $table1->surName   =$request->input('surname');
      $table1->fName	   =$request->input('fname');
      $table1->ethics    =$request->input('ethics');
      $table1->religion  =$request->input('religion');
      $table1->far	     =$request->input('far');
      $table1->addGrade	 =$grade;
      $table1->bDay      =$request->input('bDate');
      $table1->sex       =$request->input('sex');
      $table1->pAddress  =$request->input('pAddress');
      $table1->tAddress  =$request->input('tAddress');
      $table1->mNomber   =$request->input('mPhone');
      $table1->lNomber   =$request->input('lPhone');

      $table1->save();

      //parents
       $table2 = new StParent();
      //father
      $table2->admNo       =$request->input('admNo');
      $table2->fName       =$request->input('fathName');
      $table2->fJob        =$request->input('fJob');
      $table2->fAddress    =$request->input('fathPAddress');
      $table2->fJobAddress =$request->input('fathJobAddress');
      $table2->fEmail      =$request->input('fathEmail');
      $table2->fMNo        =$request->input('fathMNo');
      $table2->fJobNo      =$request->input('fathJobNo');
      //mother
      $table2->mName       =$request->input('motName');
      $table2->mJob        =$request->input('motJob');
      $table2->mAddress    =$request->input('motPAddress');
      $table2->mJobAddress =$request->input('motJobAddress');
      $table2->mEmail      =$request->input('motEmail');
      $table2->mMNo        =$request->input('motMNo');
      $table2->mJobNo      =$request->input('motJobNo');

       $table2->save();
      //
      //
      //Guardian
      $table3 = new Guardian();

      $table3->admNo       =$request->input('admNo');
      $table3->gName       =$request->input('guaName');
      $table3->gJob        =$request->input('guaJob');
      $table3->gAddress    =$request->input('guaPAddress');
      $table3->gJobAddress =$request->input('guaJobAddress');
      $table3->gEmail      =$request->input('guaEmail');
      $table3->gMNo        =$request->input('guaMNo');
      $table3->gJobNo      =$request->input('guaJobNo');

      $table3->save();

      //Emergency
      $table4 = new Emergency();

      $table4->admNo        =$request->input('admNo');
      $table4->eName        =$request->input('emeName');
      $table4->eMember1     =$request->input('emeMember1');
      $table4->eMember2     =$request->input('emeMember2');
      $table4->eMember3     =$request->input('emeMember3');
      $table4->eAddress     =$request->input('emePAddress');
      $table4->eJobAddress  =$request->input('emeJobAddress');
      $table4->eMNo	        =$request->input('emeMNo');
      $table4->eJobNo       =$request->input('emeJobNo');

      $table4->save();
      return redirect()->route('stuReg');
    }

    //Teacher reg page
    public function teaRegPage()
    {
      return view('admin/teaReg');
    }

    //teacher reg
    public function teacherReg(Request $request)
    {
      $table1 = new teaReg();

      $table1->admNo       =$request->input('admNo');
      $table1->regDate     =$request->input('regdate');
      $table1->fullName    =$request->input('fullName');
      $table1->bDay        =$request->input('bDate');
      $table1->sex         =$request->input('sex');
      $table1->nic         =$request->input('nic');
      $table1->firstDate   =$request->input('firstDate');
      $table1->institute   =$request->input('institute');
      $table1->grade       =$request->input('grade');
      $table1->bestQuali   =$request->input('bestQuali');
      $table1->proQuali    =$request->input('proQuali');
      $table1->wSch1       =$request->input('sch1');
      $table1->wSch2       =$request->input('sch2');
      $table1->wSch3       =$request->input('sch3');
      $table1->pAddress    =$request->input('pAddress');
      $table1->tAddress    =$request->input('tAddress');
      $table1->mNomber     =$request->input('mNum');
      $table1->lNomber     =$request->input('lNum');

      $table1->save();
      return redirect()->route('teaReg');

    }

    public function showDitals()
    {
      return view('admin/showUser');
    }
    //show Request ditels for admin in user
    public function userDitels(Request $request)
    {

      if ($request->input('poshition')=='Student') {
        $detail = "Student";
        //student ditels
        if ($request->input('Detail')=='Student') {

              // Sets the parameters from the get request to the variables.
              $id = $request->input('id');

              // Perform the query using Query Builder
              $result  = DB::table('stu_regs')
                  ->select(DB::raw("*"))
                  ->where('admNo', '=', $id)
                  ->get();

              $user = "student";
          return view('admin/showUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);

          //parents ditela
        } else if ($request->input('Detail')=='Parents') {

          $id = $request->input('id');

          // Perform the query using Query Builder
          $result  = DB::table('st_parents')
              ->select(DB::raw("*"))
              ->where('admNo', '=', $id)
              ->get();

          $user = "parents";

          return view('admin/showUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);

          //guardian ditels
        }else if ($request->input('Detail')=='Guardian') {

          $id = $request->input('id');

          // Perform the query using Query Builder
          $result  = DB::table('guardians')
              ->select(DB::raw("*"))
              ->where('admNo', '=', $id)
              ->get();

          $user = "guardian";
          return view('admin/showUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);

          //emergencie ditels
        }else if ($request->input('Detail')=='Emergencie') {

          $id = $request->input('id');

          // Perform the query using Query Builder
          $result  = DB::table('emergencies')
              ->select(DB::raw("*"))
              ->where('admNo', '=', $id)
              ->get();
          $user = "emergency";
          return view('admin/showUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);
        }


        //teacher ditels
      }elseif ($request->input('poshition')=='Teachre') {
        $id = $request->input('id');

        // Perform the query using Query Builder
        $result  = DB::table('tea_regs')
            ->select(DB::raw("*"))
            ->where('admNo', '=', $id)
            ->get();
        $detail = "Teachre";
        return view('admin/showUser',['results'=>$result,'detail'=>$detail]);

        //admin ditels
      }elseif ($request->input('poshition')=='Admin') {
        $detail = "Admin";
        $teacher = teaReg::get();
        return view('admin/showUser',['teachers'=>$teacher,'detail'=>$detail]);


      }else {
        # code...
      }
    }

    //upDate user page
    public function upUser()
    {
      return view('admin/upDateUser');
    }

    //show Request ditels for admin in update to user
    public function upUserDitels(Request $request)
    {

      if ($request->input('poshition')=='Student') {
        $detail = "Student";
        //student ditels
        if ($request->input('Detail')=='Student') {

              // Sets the parameters from the get request to the variables.
              $id = $request->input('id');

              // Perform the query using Query Builder
              $result  = DB::table('stu_regs')
                  ->select(DB::raw("*"))
                  ->where('admNo', '=', $id)
                  ->get();

              $user = "student";
          return view('admin/upDateUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);

          //parents ditela
        } else if ($request->input('Detail')=='Parents') {

          $id = $request->input('id');

          // Perform the query using Query Builder
          $result  = DB::table('st_parents')
              ->select(DB::raw("*"))
              ->where('admNo', '=', $id)
              ->get();

          $user = "parents";

          return view('admin/upDateUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);

          //guardian ditels
        }else if ($request->input('Detail')=='Guardian') {

          $id = $request->input('id');

          // Perform the query using Query Builder
          $result  = DB::table('guardians')
              ->select(DB::raw("*"))
              ->where('admNo', '=', $id)
              ->get();

          $user = "guardian";
          return view('admin/upDateUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);

          //emergencie ditels
        }else if ($request->input('Detail')=='Emergencie') {

          $id = $request->input('id');

          // Perform the query using Query Builder
          $result  = DB::table('emergencies')
              ->select(DB::raw("*"))
              ->where('admNo', '=', $id)
              ->get();
          $user = "emergency";
          return view('admin/upDateUser',['results'=>$result,'detail'=>$detail,'user'=>$user]);
        }


        //teacher ditels
      }elseif ($request->input('poshition')=='Teachre') {
        $id = $request->input('id');

        // Perform the query using Query Builder
        $result  = DB::table('tea_regs')
            ->select(DB::raw("*"))
            ->where('admNo', '=', $id)
            ->get();
        $detail = "Teachre";
        return view('admin/upDateUser',['results'=>$result,'detail'=>$detail]);

        //admin ditels
      }elseif ($request->input('poshition')=='Admin') {
        $detail = "Admin";
        $teacher = teaReg::get();
        return view('admin/upDateUser',['teachers'=>$teacher,'detail'=>$detail]);


      }else {
        # code...
      }
    }

    //pudate Registration
    //update studentReg
      public function sudentUpdate(Request $request)
      {
        $id = $request->input('admNo');
        $grade= $request->input('grade1') . $request->input('grade2');


              $update = [
              'admDate'     => $request->input('addDate'),
              'fullName'    => $request->input('fullName'),
              'surName'     => $request->input('surname'),
              'fName'	      => $request->input('fname'),
              'ethics'      => $request->input('ethics'),
              'religion'    => $request->input('religion'),
              'far'	        => $request->input('far'),
              'addGrade'	  => $grade,
              'bDay'        => $request->input('bDate'),
              'sex'         => $request->input('sex'),
              'pAddress'    => $request->input('pAddress'),
              'tAddress'    => $request->input('tAddress'),
              'mNomber'     => $request->input('mPhone'),
              'lNomber'     => $request->input('lPhone'),
            ];

            DB::table('stu_regs')
                ->where('admNo', '=', $id)
                ->update($update);

            return view('admin/upDateUser');
      }

      //update parents
      public function parentUpdate(Request $request)
      {
        $id = $request->input('admNo');

              $update = [
                //father

                'fName'       => $request->input('fathName'),
                'fJob'        => $request->input('fJob'),
                'fAddress'    => $request->input('fathPAddress'),
                'fJobAddress' => $request->input('fathJobAddress'),
                'fEmail'      => $request->input('fathEmail'),
                'fMNo'        => $request->input('fathMNo'),
                'fJobNo'      => $request->input('fathJobNo'),
                //mother
                'mName'       => $request->input('motName'),
                'mJob'        => $request->input('motJob'),
                'mAddress'    => $request->input('motPAddress'),
                'mJobAddress' => $request->input('motJobAddress'),
                'mEmail'      => $request->input('motEmail'),
                'mMNo'        => $request->input('motMNo'),
                'mJobNo'      => $request->input('motJobNo'),
            ];

            DB::table('st_parents')
                ->where('admNo', '=', $id)
                ->update($update);

            return view('admin/upDateUser');
      }

      //update Guardian's Detailses
      public function guardianUpdate(Request $request)
      {
        $id = $request->input('admNo');

              $update = [

                'gName'       => $request->input('guaName'),
                'gJob'        => $request->input('guaJob'),
                'gAddress'    => $request->input('guaPAddress'),
                'gJobAddress' => $request->input('guaJobAddress'),
                'gEmail'      => $request->input('guaEmail'),
                'gMNo'        => $request->input('guaMNo'),
                'gJobNo'      => $request->input('guaJobNo'),
            ];

            DB::table('guardians')
                ->where('admNo', '=', $id)
                ->update($update);

            return view('admin/upDateUser');
      }

      //update Emergency Notices's Detailses
      public function emergencyUpdate(Request $request)
      {
        $id = $request->input('admNo');

              $update = [

                'eName'        => $request->input('emeName'),
                'eMember1'     => $request->input('emeMember1'),
                'eMember2'     => $request->input('emeMember2'),
                'eMember3'     => $request->input('emeMember3'),
                'eAddress'     => $request->input('emePAddress'),
                'eJobAddress'  => $request->input('emeJobAddress'),
                'eMNo'	       => $request->input('emeMNo'),
                'eJobNo'       => $request->input('emeJobNo'),
            ];

            DB::table('emergencies')
                ->where('admNo', '=', $id)
                ->update($update);

            return view('admin/upDateUser');
      }

      //update teacher Detailses
      public function teacherUpdate(Request $request)
      {
        $id = $request->input('admNo');

              $update = [


                'regDate'     => $request->input('regdate'),
                'fullName'    => $request->input('fullName'),
                'bDay'        => $request->input('bDate'),
                'sex'         => $request->input('sex'),
                'nic'         => $request->input('nic'),
                'firstDate'   => $request->input('firstDate'),
                'institute'   => $request->input('institute'),
                'grade'       => $request->input('grade'),
                'bestQuali'   => $request->input('bestQuali'),
                'proQuali'    => $request->input('proQuali'),
                'wSch1'       => $request->input('sch1'),
                'wSch2'       => $request->input('sch2'),
                'wSch3'       => $request->input('sch3'),
                'pAddress'    => $request->input('pAddress'),
                'tAddress'    => $request->input('tAddress'),
                'mNomber'     => $request->input('mNum'),
                'lNomber'     => $request->input('lNum'),
            ];

            DB::table('tea_regs')
                ->where('admNo', '=', $id)
                ->update($update);

            return view('admin/upDateUser');
      }

}
