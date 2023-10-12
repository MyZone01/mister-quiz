@extends('app')

@section('content')

@auth
<a class="top-left-corner blue-btn" href="{{ route('profile.index') }}">{{ auth()->user()->username }}</a>
@endauth

@guest
<a class="top-left-corner blue-btn" href="{{ route('login.index') }}">Login</a>

@endguest

<a class="top-right-corner blue-btn" href="{{ route('leaderboard.index') }}">Leaderboard</a>

@auth
<a class="bottom-right-corner red-btn" href="{{ route('logout') }}">Logout</a>
@endauth

<div class="main-img">
    <img src="{{ asset('images/mister_quiz.png') }}" alt="">
    <p class="title">Mister Quiz</p>

    <a style="margin-bottom:20px" class="green-btn center" href="{{ route('quiz.index') }}">Start Quiz</a>
</div>

@endsection
