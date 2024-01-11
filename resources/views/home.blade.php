@extends('app')

@section('content')
 @include("header")
    <main>
         @auth
        <div>
            <div class="card">
                <div class="body">
                    <div class="text--center">
                        <div class="avatar lg"><img  src="//ui-avatars.com/api/?name={{ auth()->user()->username }}&size=100&rounded=true&color=fff&background=random" alt=""></div>
                        <h4 class="mt--16">{{ auth()->user()->username }}</h4>
                        <div class="mt--16">
                            <a href="{{ route('profile.index') }}" class="btn primary small">Profile</a>
                            <a href="{{ route('logout') }}" class="btn small">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg--light-gradient text--dark">
                <div class="body">
                    <div class="display--flex justify--space-between">
                        <div class="text--left">
                            <div class="text--small">Total correct answer</div>
                            <h2>{{ auth()->user()->total_correct}}</h2>
                        </div>
                        <div class="text--right">
                            <div class="text--small">My Score</div>
                            <h2>{{ auth()->user()->xp}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endauth
        <div>
            <div class="card f-height">
                <div class="header">
                    <h3 class="spe">Leaderboard</h3>
                    <a href="{{ route('leaderboard.index') }}" class="btn primary small">Show All</a>
                </div>
                <div class="body">
                    <ul class="list">
                        <li class="list__item">
                            <div class="list__grid">
                                <div class="text--left text--small text--medium">Rank</div>
                                <div class="text--left text--small text--medium">Name</div>
                                <div class="text--right text--small text--medium">XP</div>
                            </div>
                        </li>
                        @foreach ($users as $user)
                        <li class="list__item">
                            <div class="list__grid">
                                <div class="flag place bg--transparent text--dark bg--yellow">{{ $loop->index +1}}</div>
                                <div class="media">
                                    <div class="avatar media__img"><img  src="//ui-avatars.com/api/?name={{$user->username}}&size=50&rounded=true&color=fff&background=random" alt=""></div>
                                    <div class="media__content">
                                        <div class="media__title">{{ $user->username }}</div>
                                    </div>
                                </div>
                                <div class="text--right text--yellow">
                                    <div class="mt--8">
                                        <strong>{{ $user->xp }}</strong>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
    @endsection
