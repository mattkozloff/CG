@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Notes <br />
                    <a href='/notes/{{$entity}}/{{$entityID}}/create'>Add Note for {{ $entity }} {{ $entityName }} ID: {{ $entityID }}</a>
                </div> 

                <div class="card-body">
                    <table class="table" border='1'>
                        <tr>
                            <td>Name</td>
                            <td>Comments</td>
                            <td></td>
                        </tr>
                        @foreach($notes as $note)
                            <tr>
                                <td>{{ $note['comments'] }}</td>
                                <td>{{ $note['imageFileName'] }}</td>
                                <td><a href='/notes/edit/{{ $note['entityID'] }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection