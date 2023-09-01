<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Models\Task;
use PDO;

class TaskController extends Controller
{
    public function showData()
    {
        $data = Task::where('is_active', 0)->get();
        // dd($data);
        return view('home', compact('data'));
    }
    public function completed()
    {
        $data = Task::where('is_active', 1)->get();
        return view('completed', compact('data'));
    }

    public function addData(Request $req)
    {
        // dd($req->pri);
        $data = new Task;
        $data->name = $req->name;
        $data->task = $req->task;
        $data->pri = $req->pri;
        $data->save();
        return redirect('home');
    }
    // public function gototask()
    // {
    //     dd('asdf');
    //     return redirect('addtask');
    // }
    public function updateData(Request $req)
    {
        $data = Task::find($req->id);
        $data->name = $req->name;
        $data->task = $req->task;
        $data->pri = $req->pri;

        $data->save();

        return redirect('home');
    }

    public function update($id)
    {

        $data = Task::find($id);
        // dd($data->name);
        return view('update', compact('data'));
    }
    public function delete($id)
    {
        $data = Task::find($id);
        $data->delete();
        return redirect('home');
    }


    public function updateState($id)
    {
        $data = Task::find($id);
        $data->is_active = true;
        $data->save();
        return redirect('completed');
    }
    function deleteCom($id)
    {
        $data = Task::find($id);
        $data->delete();
        return redirect('completed');
    }
}
