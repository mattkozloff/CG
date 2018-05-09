@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Soil Type <br />
                    <a href='/soilType/create'>Add Soil Type</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <tr>
                            <td>Name</td>
                            <td>Comments</td>
                            <td></td>
                        </tr>
                        @foreach($soilType as $soilTypes)
                            <tr>
                                <td>{{ $soilTypes['name'] }}</td>
                                <td>{{ $soilTypes['comments'] }}</td>
                                <td><a href='/soilType/edit/{{ $soilTypes['id'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection