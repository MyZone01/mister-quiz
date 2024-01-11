@extends('app')

@section('content')
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
                    <h4 class="mt--16">You have finished</h4>
                    <h1>Your Score: </h1>
                    <span class="text--teal text--giant"> {{ $results['overall'] }} / 20</span>
                </div>
            </div>
        </div>
        <div class="card bg--light-gradient text--dark">
            <div class="body">
                <div class="display--flex justify--space-between">
                    <div class="text--left">
                        <div class="text--small">Art</div>
                        <h2>{{ $results['art'] }}</h2>
                    </div>
                    <div class="text--left">
                        <div class="text--small">History</div>
                        <h2>{{ $results['history'] }}</h2>
                    </div>
                    <div class="text--center">
                        <div class="text--small">Sport</div>
                        <h2>{{ $results['sports'] }}</h2>
                    </div>
                    <div class="text--right">
                        <div class="text--small">Science</div>
                        <h2>{{ $results['science'] }}</h2>
                    </div>
                    <div class="text--right">
                        <div class="text--small">Geography</div>
                        <h2>{{ $results['geography'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
