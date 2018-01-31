<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;

// student classes 6
use App\class6A; use App\Class6B; use App\Class6C; use App\Class6D; use App\Class6E;
use App\Class6F; use App\Class6G; use App\Class6H; use App\Class6I; use App\Class6J;

// student classes 7
use App\Class7A; use App\Class7B; use App\Class7C; use App\Class7D; use App\Class7E;
use App\Class7F; use App\Class7G; use App\Class7H; use App\Class7I; use App\Class7J;

// student classes 8
use App\Class8A; use App\Class8B; use App\Class8C; use App\Class8D; use App\Class8E;
use App\Class8F; use App\Class8G; use App\Class8H; use App\Class8I; use App\Class8J;

// student classes 9
use App\Class9A; use App\Class9B; use App\Class9C; use App\Class9D; use App\Class9E;
use App\Class9F; use App\Class9G; use App\Class9H; use App\Class9I; use App\Class9J;

class alocateController extends Controller
{
  // student view page
  public function studentAllocateview()
  {
    return view('studentAllocate\studentAllocate');
  }

  // teacher view page
  public function teacherAllocateview()
  {
    return view('teacherAllocate\teacherAllocate');
  }

  // studentAllocateClass
  public function studentAllocateClass(Request $request)
    {
      // student id validate
      $this->validate($request, [
        'stuId' => 'required|numeric',

        ]);

      // $table1 = new Class6B();
      //
      // $date = date('Y');
      // $table1->year        =$date;
      // $table1->student     =$request->input('stuId');
      // $table1->section     =$request->input('section');
      //
      // $table1->save();
      // return redirect()->route('atudentAllocate');
        //grade 6

        $table = new User();
        $grade= $request->input('section') . $request->input('poshition');
        DB::table('users')
            ->where('admition', $request->input('stuId'))
            ->update(['current_class' => $grade]);

      if ($request->input('section')=="6") {

        if ($request->input('poshition')=="-A") {

          $table1 = new Class6A();


          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-B") {

          $table1 = new Class6B();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-C") {

          $table1 = new Class6C();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-D") {

          $table1 = new Class6D();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-E") {

          $table1 = new Class6E();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-F") {

          $table1 = new Class6F();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-G") {

          $table1 = new Class6G();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-H") {

          $table1 = new Class6H();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-I") {

          $table1 = new Class6I();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-J") {

          $table1 = new Class6J();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } else {
          # code...
        }

        //grade 7
      } elseif ($request->input('section')=="7") {

        if ($request->input('poshition')=="-A") {

          $table1 = new Class7A();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-B") {

          $table1 = new Class7B();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-C") {

          $table1 = new Class7C();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-D") {

          $table1 = new Class7D();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-E") {

          $table1 = new Class7E();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-F") {

          $table1 = new Class7F();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-G") {

          $table1 = new Class7G();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-H") {

          $table1 = new Class7H();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-I") {

          $table1 = new Class7I();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-J") {

          $table1 = new Class7J();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } else {
          # code...
        }

        //grade 8
      } elseif ($request->input('section')=="8") {

        if ($request->input('poshition')=="-A") {

          $table1 = new Class8A();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-B") {

          $table1 = new Class8B();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-C") {

          $table1 = new Class8C();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-D") {

          $table1 = new Class8D();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-E") {

          $table1 = new Class8E();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-F") {

          $table1 = new Class8F();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-G") {

          $table1 = new Class8G();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-H") {

          $table1 = new Class8H();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-I") {

          $table1 = new Class8I();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-J") {

          $table1 = new Class8J();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } else {
          # code...
        }

        //grade 9
      } elseif ($request->input('section')=="9") {
        if ($request->input('poshition')=="-A") {

          $table1 = new Class9A();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-B") {

          $table1 = new Class9B();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-C") {

          $table1 = new Class9C();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-D") {

          $table1 = new Class9D();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-E") {

          $table1 = new Class9E();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-F") {

          $table1 = new Class9F();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-G") {

          $table1 = new Class9G();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-H") {

          $table1 = new Class9H();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-I") {

          $table1 = new Class9I();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } elseif ($request->input('poshition')=="-J") {

          $table1 = new Class9J();

          $date = date('Y');
          $table1->year        =$date;
          $table1->student     =$request->input('stuId');
          $table1->section     =$request->input('section');

          $table1->save();
          return redirect()->route('atudentAllocate');

        } else {
          # code...
        }
      }

    }

  //search all student classes
  public function searchClass(Request $request)
  {
    if ($request->input('section')=="6") {

      if ($request->input('poshition')=="-A") {

        // Sets the parameters from the get request to the variables.
        $date = date('Y');
        // $class = "6-a";
        // Perform the query using Query Builder
        $result  = DB::select('SELECT * FROM class6_as,stu_regs where stu_regs.admNo = class6_as.student AND 	class6_as.year = 2018 ');

        return view('studentAllocate/studentAllocate',['results'=>$result,'date'=>$date]);


      } elseif ($request->input('poshition')=="-B") {

        $date = date('Y');

        // Perform the query using Query Builder
        $result  = DB::select('SELECT * FROM class6_bs,stu_regs where stu_regs.admNo = class6_bs.student');

        return view('studentAllocate/studentAllocate',['results'=>$result]);


      } elseif ($request->input('poshition')=="-C") {
        # code...
      } elseif ($request->input('poshition')=="-D") {
        # code...
      } elseif ($request->input('poshition')=="-E") {
        # code...
      } elseif ($request->input('poshition')=="-F") {
        # code...
      } elseif ($request->input('poshition')=="-G") {
        # code...
      } elseif ($request->input('poshition')=="-H") {
        # code...
      } elseif ($request->input('poshition')=="-I") {
        # code...
      } elseif ($request->input('poshition')=="-J") {
        # code...
      }

    } elseif ($request->input('section')=="7") {
      # code...
    } elseif ($request->input('section')=="8") {
      # code...
    } elseif ($request->input('section')=="9") {
      # code...
    }
  }


}
