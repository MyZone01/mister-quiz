@extends('app')

@section('content')

<!-- <a class="top-right-corner red-btn" href="{{ route('index') }}">Back ></a>

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

</div> -->

@include("header")
<main class="unique-col">
    <style>
        .unique-col {
            grid-template-columns: 1fr;
        }

        label.radio {
            cursor: pointer;
            font-size: 2.5rem;
            line-height: 1.1;
            display: grid;
            grid-template-columns: 1em auto;
            gap: 0.5em;
            padding-bottom: .5em;
            border-bottom: 1px solid var(--dark);
        }

        label.radio+label.radio {
            margin-top: 1em;
        }

        label.radio:focus-within {
            color: var(--primary);
        }

        input[type="radio"] {
            -webkit-appearance: none;
            appearance: none;
            background-color: transparent;
            margin: 0;
            font: inherit;
            color: currentColor;
            width: 1.15em;
            height: 1.15em;
            border: 0.15em solid currentColor;
            border-radius: 50%;
            transform: translateY(-0.075em);

            display: grid;
            place-content: center;
        }

        input[type="radio"]::before {
            content: "";
            width: 0.65em;
            height: 0.65em;
            border-radius: 50%;
            transform: scale(0);
            transition: 120ms transform ease-in-out;
            box-shadow: inset 1em 1em var(--primary);
            background-color: CanvasText;
        }

        input[type="radio"]:checked::before {
            transform: scale(1);
        }

        input[type="radio"]:focus {
            outline: max(2px, 0.15em) solid currentColor;
            outline-offset: max(2px, 0.15em);
        }
    </style>
    <div>
        <div class="card">
            <div class="body">
                <div class="text--center">
                <div class="avatar lg"><img  src="//ui-avatars.com/api/?name={{ auth()->user()->username }}&size=100&rounded=true&color=fff&background=random" alt=""></div>
                    <h4 class="mt--16">{{ auth()->user()->username }}</h4>
                    <span class="text--teal text--small">{{ auth()->user()->email }}</span>
                </div>
            </div>
        </div>
        <div class="card bg--light-gradient text--dark">
            <div class="body">
                <div class="display--flex justify--space-between">
                    <div class="text--left">
                        <div class="text--small">Total correct answer</div>
                        <h2>{{ auth()->user()->total_correct}} </h2>
                    </div>
                    <div class="text--right">
                        <div class="text--small">My Score</div>
                        <h2> {{auth()->user()->xp}} XP {{auth()->user()->xp < 1500
        ? " Quiz Aprentice"
        : (auth()->user()->xp < 5000
            ? " Average Quizer"
            : (auth()->user()->xp < 10000
                ? " Epic Quizer"
                : "Quiz Master"
            )
        )
    }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg--light-gradient text--dark">
            <div class="body">
                <div class="display--flex justify--space-between">
                    <div class="text--left">
                        <div class="text--small">Art</div>
                        <h2>{{ number_format($poucentage["art"])}}%</h2>
                        <h2>{{auth()->user()->art}}</h2>
                    </div>
                    <div class="text--left">
                        <div class="text--small">History</div>
                        <h2> {{ number_format($poucentage["history"])}}%</h2>
                        <h2>{{auth()->user()->history}}</h2>
                    </div>
                    <div class="text--center">
                        <div class="text--small">Sport</div>
                        <h2> {{ number_format($poucentage["sports"])}}%</h2>
                        <h2>{{auth()->user()->sports}}</h2>
                    </div>
                    <div class="text--right">
                        <div class="text--small">Science</div>
                        <h2> {{ number_format($poucentage["science"])}}%</h2>
                        <h2>{{auth()->user()->science}}</h2>
                    </div>
                    <div class="text--right">
                        <div class="text--small">Geography</div>
                        <h2>{{ number_format($poucentage["geography"])}}%</h2>
                        <h2>{{auth()->user()->geography}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
