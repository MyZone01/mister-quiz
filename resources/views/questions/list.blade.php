@extends('app')

@section('content')
<!-- <style>
    .radio-group input[type="radio"] {
    display: none;
}

.radio-group label {
    display: inline-block;
    margin: 0 10px 10px 0;
    padding: 10px 20px;
    font-size: 16px;
    border: 2px solid #3498db;
    color: #3498db;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.radio-group label:hover {
    background-color: #3498db;
    color: white;
}

.radio-group input[type="radio"]:checked + label {
    background-color: #3498db;
    color: white;
}
</style>
<form action="{{ route('quiz.store') }}" method="post">
    @csrf

    @error('wrong')
    <div class="center error-msg mt2 mb2">
        {{ $message }}
    </div>
    @enderror
    @if ($quiz ?? '')
    @foreach ($quiz ?? ''['questions'] as $question)
    <x-question :question="$question" />

        @foreach ($question->answers as $answer)
            <li>
                <label>
                    <input type="radio" name="answers[{{ $question->id }}]" required value="{{ $answer->id }}">
                    {{ $answer->answer }}
                </label>
        @endforeach
        </ul>
    @endforeach
    @endif

    <button type="submit" class="center green-btn">Submit</button>
</form> -->
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
    <form action="{{ route('quiz.store') }}" method="post">
        @csrf
        @error('wrong')
        <div class="center error-msg mt2 mb2">
            {{ $message }}
        </div>
        @enderror
        @if ($quiz ?? '')
            @foreach ($quiz ?? ''['questions'] as $question)
                <div class="card f-height">
                    <div class="header">
                        <h1><x-question :question="$question" /></h1>
                    </div>
                    @foreach ($question->answers as $answer)
                        <div class="body">
                            <label class="radio">
                            <input type="radio" name="answers[{{ $question->id }}]" required value="{{ $answer->id }}">
                            {{ $answer->answer }}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif
        <button type="submit" class="center green-btn">Submit</button>
    </form>
</main>
@endsection
