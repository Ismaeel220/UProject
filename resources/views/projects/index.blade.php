@extends('layouts.app')
@section('stuff')
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="wrapper stuff">
                <!-- <div class="title "> -->
                    <h1>Projects</h1> <br />
                    
                
                @foreach($projects as $project)
          <div class=project>
          
            <!-- {{ $project['pid'] }} - {{ $project['title'] }} - {{ $project['start_date'] }}
             -{{ $project['end_date'] }} - {{ $project['phase'] }} - {{ $project['description'] }}
             - {{ $project['uid'] }} -->
             <h4><a href="{{ route('projects.p', $project->pid) }}">{{ $project->title}}</a></h4>
    </div>
        
        @endforeach
            </div>
        
    @endsection