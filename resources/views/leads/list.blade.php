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
                    <th>Label 1</th>
                    <th>Label 2</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem ipsum</td>
                    <td>Dolor sit amet</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lorem ipsum</td>
                    <td>Dolor sit amet</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lorem ipsum</td>
                    <td>Dolor sit amet</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection