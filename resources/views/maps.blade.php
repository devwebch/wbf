@extends('layouts.app')

@section('title', 'Google Maps')

@section('styles')
@endsection

@section('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCelPpT9KgfceVGY8cBRFc4D-n8rbT9-0&libraries=places"></script>
    <script src="{{asset('assets/js/places.js')}}"></script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">Google Map</div>
                </div>
                <div class="panel-body">
                    <form class="wbf-location-form m-b-20">
                        <div class="form-group">
                            <label for="wbfInputAddress">Address</label>
                            <input type="text" name="wbfInputAddress" id="wbfInputAddress" class="form-control" placeholder="Address...">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <form role="form" class="wbf-search-form m-b-20">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wbfInputText">Search</label>
                                    <input type="text" name="wbfInputText" id="wbfInputText" class="form-control" placeholder="Store name...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wbfInputCategory">Category</label>
                                    <select name="wbfInputCategory" id="wbfInputCategory" class="form-control">
                                        <option value="">Select a category...</option>
                                        <option value="accounting">Accounting</option>
                                        <option value="airport">Airport</option>
                                        <option value="art_gallery">Art gallery</option>
                                        <option value="bakery">Bakery</option>
                                        <option value="bar">Bar</option>
                                        <option value="beauty_salon">Beauty Salon</option>
                                        <option value="bicycle_store">Bicycle Store</option>
                                        <option value="book_store">Book Store</option>
                                        <option value="bowling_alley">Bowling Alley</option>
                                        <option value="cafe">Cafe</option>
                                        <option value="car_dealer">Car Dealer</option>
                                        <option value="car_rental">Car Rental</option>
                                        <option value="car_repair">Car Repair</option>
                                        <option value="casino">Casino</option>
                                        <option value="church">Church</option>
                                        <option value="clothing_store">Clothing Store</option>
                                        <option value="convenience_store">Convenience Store</option>
                                        <option value="dentist">Dentist</option>
                                        <option value="electrician">Electrician</option>
                                        <option value="electronics_store">Electronics Store</option>
                                        <option value="establishment">Establishment</option>
                                        <option value="finance">Finance</option>
                                        <option value="florist">Florist</option>
                                        <option value="food">Food</option>
                                        <option value="funeral_home">Funeral Home</option>
                                        <option value="furniture_store">Furniture Store</option>
                                        <option value="general_contractor">General Contractor</option>
                                        <option value="grocery_or_supermarket">Grocery or Supermarket</option>
                                        <option value="gym">Gym</option>
                                        <option value="hair_care">Hair Care</option>
                                        <option value="hardware_store">Hardware Store</option>
                                        <option value="health">Health</option>
                                        <option value="home_goods_store">Home Goods Store</option>
                                        <option value="insurance_agency">Insurence Agency</option>
                                        <option value="jewelry_store">Jewelry Store</option>
                                        <option value="laundry">Laundry</option>
                                        <option value="lawyer">Lawyer</option>
                                        <option value="library">Library</option>
                                        <option value="liquor_store">Liquor Store</option>
                                        <option value="locksmith">Locksmith</option>
                                        <option value="lodging">Lodging</option>
                                        <option value="meal_delivery">Meal Delivery</option>
                                        <option value="meal_takeaway">Meal Takeaway</option>
                                        <option value="movie_theater">Movie Theater</option>
                                        <option value="moving_company">Moving Company</option>
                                        <option value="museum">Museum</option>
                                        <option value="night_club">Night Club</option>
                                        <option value="painter">Painter</option>
                                        <option value="pet_store">Pet store</option>
                                        <option value="pharmacy">Pharmacy</option>
                                        <option value="physiotherapist">Physiotherapist</option>
                                        <option value="plumber">Plumber</option>
                                        <option value="real_estate_agency">Real Estate Agency</option>
                                        <option value="restaurant">Restaurant</option>
                                        <option value="roofing_contractor">Roofing Contractor</option>
                                        <option value="school">School</option>
                                        <option value="shoe_store">Shoe Store</option>
                                        <option value="spa">Spa</option>
                                        <option value="storage">Storage</option>
                                        <option value="store">Store</option>
                                        <option value="travel_agency">Travel Agency</option>
                                        <option value="university">University</option>
                                        <option value="veterinary_care">Veterinary Care</option>
                                        <option value="zoo">Zoo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <div id="map" style="height: 400px"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">Business details</div>
                </div>
                <div class="panel-body">
                    <div class="json-loader"></div>
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