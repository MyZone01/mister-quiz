@extends('app')

@section('content')
<header class="fixed">
        <a href="{{ route('index') }}" class="logo" draggable="false">Mr.Quizz</a>
        <p>Register now and start answering question</p>
    </header>
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
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="body display--flex direction-col">
                        @error('username')
                        <div class="error-msg mt2 center">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text"id="username" name="username" placeholder="Enter username" value="{{ old('username')}}">
                        @error('email')
                        <div class="error-msg mt2 center">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="email" name="email" id="email" placeholder="Enter email" value="{{ old('email')}}">
                        @error('password')
                        <div class="error-msg mt2 center">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="password" name="password" id="password" placeholder="Enter password">
                        @error('password_confirmation')
                        <div class="error-msg mt2 center">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="password"  name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
                        <button class="primary mt--16">Register</button>
                        <p class="mt--8">Already have an account. <a href="{{ route('login.index') }}">Login here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
