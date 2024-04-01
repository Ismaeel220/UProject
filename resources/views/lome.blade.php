@extends('Designs.design')
@section('stuff')
        <div class="flex-center position-ref full-height">
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
            @endif

            <div class="stuff">
                <div class="title ">
                    <img src="/img/logo2.png" alt="logo" width="200" height="200"> <br />
                    Worlds best projects <br>
                    </div>
                    <a href="/projects/create">Create a Project</a> <br>
                    <a href="/projects">View our projects</a>

<p class="mssg">{{session('success')}}</p>
                </div>
            </div>
        </div>
  @endsection