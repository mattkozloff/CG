@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Users <br />
                    <a href='/users/create'>Add User</a>
                </div>

                <div class="card-body">
                    <table class="table" border='1'>
                        <tr>
                            <td>Name</td>
                            <td>email</td>
                            <td></td>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td><img src="{{$user['imageFileName']}}" style="width: 35px; height: 35px" class="rounded"></td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td><a href='/users/edit/{{ $user['id'] }}'>Edit</a></td>
                                
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection