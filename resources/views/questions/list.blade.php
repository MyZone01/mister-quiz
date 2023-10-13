@extends('app')

@section('content')
<style>
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
</form>


@endsection
