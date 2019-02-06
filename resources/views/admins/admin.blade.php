@extends ('layouts.app')

@section('content')
    <div class ="container">
       <h1>Hi user</h1>

        <table class="table table-stripper">

            @foreach($users as $user)
            <tr>
                <td>{{$user->name }} <br/></td>
                <td><a href="mailto:{{ $user->email  }}">{{ $user->email }}</a> </td>
            </tr>
            @endforeach

        </table>
    </div>




    @endsection