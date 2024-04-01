@extends('layouts.app')
@section('stuff')


@section('stuff')
  <div class = "create-project">
    <h1> Edit a project </h1>
    <form action= "/projects" method="POST">
      @csrf
      
      <label for="pid ">Project Id:</label>
      <input type="text" id="pid" name="pid"value="{{$projects['pid']}}" readonly><br>
      <label for="Title ">Project Title:</label>
      <input type="text" id="title" name="title"  value="{{$projects['title']}}"><br>
      <label for="start_date">Start Date:</label>
      <input type="date" id="start_date" name="start_date"value="{{$projects['start_date']}}"><br>
      <label for="end_date">End Date:</label>
      <input type="date" id="end_date" name="end_date"value="{{$projects['end_date']}}"><br>
      <label for="phase">Phase:</label>
      <select name="phase" id="phase"value="{{$projects['phase']}}">
        <option value="design">design</option>
        <option value="development">development</option>
        <option value="testing">testing</option>
        <option value="deployment">deployment</option>
        <label for="uid"> uid:</label>
        <option value="complete">complete</option>
</select><br>
<label for="description">Description:</label>
      <input type="text" id="description" name="description"value="{{$projects['description']}}"><br>
      <label for="uid"> uid:</label>
      <input type="text" id="uid" name="uid"value="{{$projects['uid']}}" readonly> <br>
      
       <input type="submit" value="Edit Project">
</form>
       
</div>
  
@endsection