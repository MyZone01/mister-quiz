@extends('app')

@section('content')

<table>
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <th>username</th>
                <th>XP amount</th>
                <th>total correct answers</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr class="table-primary">
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->xp }}</td>
                        <td>9999</td>  <!-- Assuming this is a placeholder value -->
                    </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
    </table>
</div>

</table>

@endsection
