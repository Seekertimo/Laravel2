@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            {{--<div class="card-header">User Overview</div>--}}
            {{--<div class="card-body">--}}
            <table class="table table-striped">
                <thead>
                <th>Username</th>
                <th>Email</th>
                <th>Super Admin</th>
                <th>Actions</th>
                </thead>
                @foreach($users as $user)

                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->is_admin)
                                <a class="">Yes</a>
                            @else
                                <a class="">No</a>
                            @endif
                        </td>
                        <td><a class="btn btn-primary"><Edit></Edit></a><a class="btn btn-danger">Remove</a></td>
                    </tr>

                @endforeach
            </table>

        </div>
        <div class="card-footer">
            <ul class="btn-group pagination pagination-sm no-margin pull-right">
                <li><a class="btn btn-primary btn-group" href="{{ $users->previousPageUrl() }}">&laquo;</a></li>
                @for($x = 1; $x <= $users->lastPage(); $x++)
                    @if($x === $users->currentPage())
                        <li><a href="{{ $users->url($x) }}" class="btn btn-group btn-outline-primary">{{ $x }}</a></li>
                    @else
                        <li><a href="{{ $users->url($x) }}" class="btn btn-group btn-primary">{{ $x }}</a></li>
                    @endif
                @endfor
                <li><a class="btn btn-primary" href="{{ $users->nextPageUrl() }}">&raquo;</a></li>
            </ul>
        </div>
    </div>
    </div>
@endsection


