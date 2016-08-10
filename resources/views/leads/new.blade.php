@extends('layouts.app')

@section('title', 'List of leads')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/css/summernote.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('assets/plugins/summernote/js/summernote.min.js')}}"></script>
    <script src="{{asset('assets/js/widgets.js')}}"></script>
@endsection

@section('content')

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Table</div>
        </div>
        <div class="panel-body">

            @include('shared.errors')

            <form action="/leads/new/store" class="form" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="leadName">Name:</label>
                    <input type="text" class="form-control" name="leadName" id="leadName" placeholder="Name" value="{{old('leadName')}}">
                </div>
                <div class="form-group">
                    <label for="leadAddress">Address:</label>
                    <input type="text" class="form-control" name="leadAddress" id="leadAddress" placeholder="Address" value="{{old('leadAddress')}}">
                </div>
                <div class="form-group">
                    <label for="leadUrl">URL:</label>
                    <input type="text" class="form-control" name="leadUrl" id="leadUrl" placeholder="URL" value="{{old('leadUrl')}}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="leadLat">Latitude:</label>
                            <input type="text" class="form-control" name="leadLat" id="leadLat" value="46.5215533">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="leadLng">Longitude:</label>
                            <input type="text" class="form-control" name="leadLng" id="leadLng" value="6.6287104">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="leadNotes">Notes:</label>
                            <textarea name="leadNotes" id="leadNotes" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="leadStatus">Status:</label>
                            <select name="leadStatus" id="leadStatus" class="form-control">
                                <option value="0">Status 0</option>
                                <option value="1">Status 1</option>
                                <option value="2">Status 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-complete">Add new lead</button>
            </form>
        </div>
    </div>

@endsection