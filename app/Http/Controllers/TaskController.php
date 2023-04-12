<?php

namespace App\Http\Controllers;
use App\Models\tasks;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function display(){

        $task = DB::table('task')->get();
        $data = compact('task');
        return view('taskView')->with($data);
    }
    public function store(){
        return view('store');
    }

    public function create(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $data=array('name'=>$name,"description"=>$description,"completed"=>0);

        DB::table('task')->insert($data);
        return redirect('display');
    }
    public function delete($id){

        DB::table('task')->where('id', $id)->delete();
        return redirect('display');

    }
    public function update($id,Request $request)
    {
        $u= DB::table('task')->where('id', $id)->get();
        print_r($u['completed']);
        die;
    }
}
