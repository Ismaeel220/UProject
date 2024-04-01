@extends('layouts.app')

@section('stuff')
<div class="wrapper projectinfo">
<h1> Project Title: {{$projects->title}}</h1>
<p class="startdate">start date: {{$projects->start_date}}</p> <br>
<p class="enddate">end date: {{$projects->end_date}}</p> <br>
<p class="description">description: {{$projects->description}}</p> <br> 
<form action="{{ route('projects.p', $projects->pid) }}" method="POST">
    @csrf
    @method('DELETE')

    <button>Delete Project </button>
</form>

<div class= "edit">
<form action ="{{ route('projects.edit', $projects->pid)}}"method="GET"> 
    @csrf
    @method('GET')
    <button>Edit Project </button>
</form>
</div>
</div>
<a href="/projects" class="return">-back to all projects</a>
@endsection