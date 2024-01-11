<header class="fixed">
    <a href="{{ route('index') }}" class="logo" draggable="false">Mr.Quizz</a>
    <a href="{{ route('quiz.index') }}" class="btn primary">Start Quizz</a>
    @if (!auth()->guest())
        <a href="{{ route('logout') }}" class="btn"> Logout</a>
    @else
        <a href="{{ route('login.index') }}" class="btn">Login</a>
    @endif

</header>
