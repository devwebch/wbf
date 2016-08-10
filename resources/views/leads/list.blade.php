@extends('layouts.app')

@section('title', 'List of leads')

@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Table</div>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>URL</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($leads as $lead)
                    <tr>
                        <td>{{$lead->id}}</td>
                        <td>{{$lead->name}}</td>
                        <td>{{$lead->address}}</td>
                        <td>{{$lead->url}}</td>
                        <td><a href="/leads/delete/{{$lead->id}}"><i class="fa fa-times text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection