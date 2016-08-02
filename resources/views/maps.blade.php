@extends('layouts.app')

@section('title', 'Google Maps')

@section('styles')
@endsection

@section('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCelPpT9KgfceVGY8cBRFc4D-n8rbT9-0&libraries=places"></script>
    <script src="{{asset('assets/js/places.js')}}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Google Map</div>
        </div>
        <div class="panel-body">
            <div id="map" style="height: 400px"></div>
        </div>
     </div>
@endsection