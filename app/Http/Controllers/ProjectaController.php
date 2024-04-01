<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;

class ProjectaController extends Controller{ 

// public function index(){
    // $projects=projects::all();
    // Route::get('/projects', function () {
    //     return view('projects');
    public function index(){
        $projects = projects::all();
        return view('projects.index',compact('projects'));
    }
    
    


public function show($pid){
$project=projects::findOrFail($pid);
    return view('projects.show', ['projects' => $project]);
}
public function create(){

    return view('projects.create');
}
public function store(Request $request){
    
    $projects = new projects();
    // error_log(request('title'));
    // error_log(request('start_date'));
    // error_log(request('end_date'));
    // error_log(request('phase'));
    // error_log(request('description'));
    // error_log(request('uid'));
    $projects->pid=request('pid');
    $projects->title=request('title');
     $projects->start_date=request('start_date');
     $projects->end_date=request('end_date');
     $projects->phase=request('phase');
     $projects->description=request('description');
     $projects->uid=request('uid');
     $projects->save();
     

    return redirect('/')->with('success','Your project has been recorded');
    
}
public function destroy($pid){
    $projects=projects::findOrFail($pid);
    $projects->delete();
    return redirect('/')->with('success','Your project has been Deleted');

}
public function edit($pid){
    $projects=projects::findOrFail($pid);
   
    return view('projects.edit',['projects'=>$projects]);


}
public function update( Request $request)
{
    $projects=projects::findOrFail($request->pid);
    $projects->pid=request('pid');
    $projects->title=request('title');
     $projects->start_date=request('start_date');
     $projects->end_date=request('end_date');
     $projects->phase=request('phase');
     $projects->description=request('description');
     $projects->uid=request('uid');
     $projects->save();
     return redirect('/')->with('success','Your project has been edited');
     
}
}
