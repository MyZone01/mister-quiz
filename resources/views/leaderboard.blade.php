@extends('app')

@section('content')

@include("header")
<main class="unique-col">
    <style>
        .unique-col {
            grid-template-columns: 1fr;
        }
    </style>
    <div>
        <div class="card f-height">
            <div class="header">
                <h3 class="spe">Leaderboard</h3>
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
                                    <span><strong>Total correct:</strong> {{ $user->total_correct }}</span>
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
