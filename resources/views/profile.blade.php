@extends('app')

@section('content')

<a class="top-right-corner red-btn" href="{{ route('home') }}">Back ></a>

<div style="margin-top:100px">
    <div class="profile-header">
        <p class="title profile-name">{{ auth()->user()->username }}</p>
        <p class="title profile-email">{{ auth()->user()->email }}</p>
    </div>

    <div class="profile-header">
        <p class="title profile-xp">{{
            auth()->user()->xp < 1500
            ? auth()->user()->xp . " Quiz Aprentice"
            : (auth()->user()->xp < 5000
                ? auth()->user()->xp . " Average Quizer"
                : (auth()->user()->xp < 10000
                    ? auth()->user()->xp . " Epic Quizer"
                    : "Quiz Master"
                )
            )
        }} XP</p>
    </div>
    <div class="results-wrapper">
        @foreach ($poucentage as $key => $value)
            <p>{{ $key}}</p>
            <p class="title">{{ $value}}%</p>
        @endforeach
    </div>
</div>

<div class="results-wrapper">
    <div class="result">
        <p>Art</p>
        <p class="title">{{ auth()->user()['art'] }}</p>
    </div>
    <div class="result">
        <p>Geography</p>
        <p class="title">{{ auth()->user()['geography'] }}</p>
    </div>
    <div class="result">
        <p>History</p>
        <p class="title">{{ auth()->user()['history'] }}</p>
    </div>
    <div class="result">
        <p>Science</p>
        <p class="title">{{ auth()->user()['science'] }}</p>
    </div>
    <div class="result">
        <p>Sports</p>
        <p class="title">{{ auth()->user()['sports'] }}</p>
    </div>

</div>

@endsection
