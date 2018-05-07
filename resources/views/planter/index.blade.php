@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Planter <br />
                    <a href='/planter/create'>Add Planter</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>Name</td>
                            <td>Comments</td>
                            <td></td>
                        </tr>
                        @foreach($planter as $planter)
                            <tr>
                                <td>{{ $planter['name'] }}</td>
                                <td>{{ $planter['comments'] }}</td>
                                <td><a href='/planter/edit/{{ $planter['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection