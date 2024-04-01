@extends('layouts.app')

@section('stuff')
  <div class = "create-project">
    <h1> Create a New Project </h1>
    <form action= "/projects/create" method="POST">
      @csrf
      <label for="pid ">Project Id:</label>
      <input type="text" id="pid"name="pid"><br>
      <label for="Title ">Project Title:</label>
      <input type="text" id="title"name="title"><br>
      <label for="start_date">Start Date:</label>
      <input type="date"id="start_date"name="start_date"><br>
      <label for="end_date">End Date:</label>
      <input type="date"id="end_date"name="end_date"><br>
      <label for="phase">Phase:</label>
      <select name="phase"id="phase">
        <option value="design">design</option>
        <option value="development">development</option>
        <option value="testing">testing</option>
        <option value="deployment">deployment</option>
        <option value="complete">complete</option>
</select><br>
<label for="description">Description:</label>
      <input type="text"id="description"name="description"><br>
      <label for="uid">Enter uid:</label>
      <input type="text"id="uid"name="uid"><br>
      
       <input type="submit"value="Create Project">
</form>
       
</div>
  
@endsection