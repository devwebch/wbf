@extends('layouts.app')

@section('title', 'Form')

@section('styles')
@endsection

@section('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCelPpT9KgfceVGY8cBRFc4D-n8rbT9-0&libraries=places"></script>
    <script src="{{asset('assets/js/places.js')}}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Form</div>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-9">
                    <div class="json-loader">
                        <pre></pre>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="json-result">
                        <h4 class="title"></h4>
                        <ul class="list-unstyled">
                            <li>Speed : <span class="score-speed"></span></li>
                            <li>Usability : <span class="score-usability"></span></li>
                        </ul>
                        <img class="image" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection