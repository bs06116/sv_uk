@extends('layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<style>
    .swal-button {
    background-color: #715b39;
    color: #fff;
    border: none;
    box-shadow: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 14px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
}
</style>
@extends('layouts.header')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@section("content")
<div class="homeBanner" onload="loadPage()">
    <!-- <div class="parallax-overlay" style="background-color: rgb(54, 56, 62); opacity: 0.72;"></div> -->
    <div class="mainContent">
        <div class="container">
        <div class="row">
            <div class="coll-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabPillsDiv">
                                <div class="bannerText">
                                    <h2><span style="color: #bc985f"> Best</span> Place To Find<span class="typed-words"> Properties</span></h2>
                                    <p>Looking to Buy, Sell, Rent or Invest? We have you covered!</p>
                                </div>
                                <div class="tabsdiv">
                                                    @php
                                     $count=App\Models\Seller::where('allp','=','1')->count();
                               @endphp

                                    <h3 style="font-size: 22px;">Search properties anywhere in UK: <span style="color: #BC985F;"><b>{{ $count }}</b></span></h3>
                                    <ul class="nav nav-pills">
                                        <li class="active"><a data-toggle="pill" href="#home" onclick="search_result()"><b>For Sale</b></a></li>
                                        <li><a data-toggle="pill" href="#rent" onclick="search_result_rent()" ><b>To Rent</b></a></li>
                                        <li><a data-toggle="pill" href="#house" onclick="search_result_lease()"><b>Lease</b></a></li>
                                    </ul>
                                    <div class="tabsContent tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <form class="estate" method="post" action="{{route('property-search')}} "enctype="multipart/form-data">
                                                @method('GET')
                                                {{ csrf_field() }}
                                                <div class="input-with-icon">
                                                    <input type="text"name="city"id="autocomplete-input"  class="form-control" placeholder="e.g London, Birmingham, Glasgow, Newcastle">
                                                    <i class="fa fa-search"></i>
                                                    {{-- <input type="hidden" value="sale" name="type"> --}}
                                                </div>
                                                <input type="hidden" name="category" id="cat" value="1">
                                                <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <label for="minprice"><span style="color: #1b1a2f"> Min price</span></label>
                                                         <input type="text"name="minprice"id="minprice" class="form-control" placeholder="10,000">


                                                        {{-- <input type="text" name="minprice" id="minprice" class="inputCommon"> --}}
                                                        {{-- <select name="minprice" id="minprice" class="inputCommon">
                                                            <option value="10,000">10,000</option>
                                                            <option value="20,000">20,000</option>
                                                            <option value="30,000">30,000</option>
                                                            <option value="40,000">40,000</option>
                                                            <option value="50,000">50,000</option>
                                                        </select> --}}
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="maxprice">Max price</label>
                                                        <input type="text"name="maxprice" id="mixprice" class="form-control" placeholder="10,000">
                                                    </div>
                                                </div>
                                                <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <label for="">Property type</label>
                                                        <select name="purpose" class="form-control" id="purpose">

                                                                <option value="all" disabled selected>Show All</option>
                                                                <option value="flat">Flats</option>
                                                                <option value="house">House</option>
                                                                <option value="land">Lands</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="bedroom">Bed Rooms</label>
                                                        <input type="text"name="bedroom" class="form-control" placeholder="1+" id="bed" >
                                                    </div>
                                                </div>
                                                <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <button type="submit" value="Search" id="search-submit" class="button button--primary"> <span id="myText"> Properties</span></button>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label type="reset" id="configreset" value="Reset" class="clearText" style="padding:left;" for="">
                                                            <a class="advanceText">Clear All
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-20" id="loro" style="display:none">
                                                    <div class="col-lg-12">
                                                        <label style="padding:10px 0px;" for="">
                                                            <a class="advanceSearchText">More options <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div id="rent" class="tab-pane fade">
                                            <form method="post" action="{{route('property-search-rent')}}"enctype="multipart/form-data">
                                                @method('GET')
                                                {{ csrf_field() }}

                                                <div class="input-with-icon">
                                                    <input type="text"name="city"id="autocomplete-input_rent" class="form-control" placeholder="e.g London, Birmingham, Glasgow, Bradford, New Castle....">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <input type="hidden" name="new" id="cat_rent" value="2">
                                                <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <label for="minprice">Min price</label>
                                                         <input type="text"name="minprice"  id="minprice_rent" class="form-control" placeholder="10,000">

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="maxprice">Max price</label>
                                                        <input type="text"name="maxprice"id="mixprice_rent" class="form-control" placeholder="10,000">
                                                    </div>
                                                </div>
                                                <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <label for="">Property type</label>
                                                        <select name="purpose" style="padding-top:5px !important;;padding-bottom:5px !important;" class="inputCommon" id="purpose_rent">

                                                                <option value="all" disabled selected>Show All</option>
                                                                <option value="flat">Flats</option>
                                                                <option value="house">House</option>
                                                                <option value="land">Lands</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="bedroom">Bed Rooms</label>
                                                        <input type="text" name="bedroom" id="bed_rent" class="form-control" placeholder="1+">
                                                    </div>
                                                </div>
                                                <div class="advanceSearch">
                                                    <div class="row mb-20">
                                                        <div class="col-lg-6">
                                                            <label for="">Added</label>
                                                            <select name="" id="" class="inputCommon">
                                                                <option value="min">Anytime</option>
                                                                <option value="1">Last 24 hours</option>
                                                                <option value="2">Last 3 days</option>
                                                                <option value="3">Last 7 days</option>
                                                                <option value="4">Last 14 days</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-20">
                                                        <div class="col-lg-6">
                                                            <label for="">Sort by</label>
                                                            <select name="" id="" class="inputCommon">
                                                                <option value="all">Highest price</option>
                                                                <option value="Houses">Lowest price</option>
                                                                <option value="Flats">Most recent</option>
                                                                <option value="farms_land">Most reduced</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-20">
                                                        <div class="col-lg-12">
                                                            <label for="">Keywords</label>
                                                            <label for="" style="float:right;">What is this?</label>
                                                            <input type="text" class="inputCommon" placeholder="e.g Edinburgh, London, Liverpool, Oxford">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-20">
                                                        <div class="col-lg-12">
                                                            <label for="">Include</label>
                                                            <div class="checkBoxDiv">
                                                                <div class="row mb-20">
                                                                    <div class="col-lg-6">
                                                                        <label class="checkLabel">New homes
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label class="checkLabel">Retirement homes
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-20">
                                                                    <div class="col-lg-6">
                                                                        <label class="checkLabel">Shared ownership
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label class="checkLabel">Auctions
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="row mb-20">
                                                    <div class="col-lg-12">
                                                        <button type="submit" value="Search" id="search-submit" class="button button--primary"> <span id="myText_rent"></span></button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div id="house" class="tab-pane fade">
                                           <form class="estate" method="post" action="{{url('lease_search')}}"enctype="multipart/form-data">

                                                {{ csrf_field() }}
                                                <div class="input-with-icon">
                                                    <input type="text"name="city"id="autocomplete-input_lease" class="form-control" placeholder="e.g Edinburgh, London, Liverpool, Oxford">
                                                    <i class="fa fa-search"></i>
                                                    {{-- <input type="hidden" value="sale" name="type"> --}}
                                                </div>
                                                <input type="hidden" name="category" id="cat" value="3">
                                                <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <label for="minprice"><span style="color: #1b1a2f"> Min price</span></label>
                                                         <input type="text"name="minprice" id="minprice_lease" class="form-control" placeholder="10,000">


                                                        {{-- <input type="text" name="minprice" id="minprice" class="inputCommon"> --}}
                                                        {{-- <select name="minprice" id="minprice" class="inputCommon">
                                                            <option value="10,000">10,000</option>
                                                            <option value="20,000">20,000</option>
                                                            <option value="30,000">30,000</option>
                                                            <option value="40,000">40,000</option>
                                                            <option value="50,000">50,000</option>
                                                        </select> --}}
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="maxprice">Max price</label>
                                                        <input type="text"name="maxprice" id="mixprice_lease" class="form-control" placeholder="10,000">
                                                    </div>
                                                </div>
                                                <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <label for="">Property type</label>
                                                        <select name="purpose" class="form-control" id="purpose_lease">

                                                                <option value="all" disabled selected>Show All</option>
                                                                <option value="flat">Flats</option>
                                                                <option value="house">House</option>
                                                                <option value="land">Lands</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="bedroom">Bed Rooms</label>
                                                        <input type="text"name="bedroom" class="form-control" placeholder="1+" id="bed_lease" >
                                                    </div>
                                                </div>
                                               <div class="row mb-20">
                                                    <div class="col-lg-6">
                                                        <button type="submit" value="Search" id="search-submit" class="button button--primary"> <span id="myText_lease"></span></button>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label type="reset" id="configreset" value="Reset" class="clearText" style="padding:left;" for="">
                                                            <a class="advanceText">Clear All
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="row mb-20" id="loro" style="display:none">
                                                    <div class="col-lg-12">
                                                        <label style="padding:10px 0px;" for="">
                                                            <a class="advanceSearchText">More options <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<div class="featureDiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="commonHeading">Featured <span style="color: #bc985f"> Properties</span></h3>
                <p class="commonText">Advertise properties on ShinnyView and see the huge benefit. You’ll soon see that your property has got lots of traffic and will be at the top of each page.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="tabsDiv">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#menu5"><b>London</b></a></li>
                        <li><a data-toggle="pill" href="#menu1"><b>Birmingham</b></a></li>
                        <li><a data-toggle="pill" href="#menu2"><b>Manchester</b></a></li>
                        <li><a data-toggle="pill" href="#menu3"><b>Glasgow</b></a></li>
                        <li><a data-toggle="pill" href="#menu4"><b>Newcastle</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tabContent">
                    <div class="tab-content">
                        <div id="menu5" class="tab-pane fade in active">
                            <div class="your-class">
                                @php
                                   $cities=App\Models\Seller::where('city','=','london')->where('enable','=','1')->whereRaw('MOD(id, 2) = 1')->inRandomOrder()->get();
                                @endphp
                                @foreach ($cities as $seller)
                                <div class="featuresBox" style="    margin-right: 15px;
    width: 350px;">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">

                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                        {{-- <div class="priceDiv">
                                             <span>
                                                  @php
                                                        $converter = new App\Convertmodel();
                                                        $price = $converter->numberTowords($seller->price)
                                                    @endphp
                                                  Pound:{{ $price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <!--<li>-->
                                        <!--    <span style="color:  #1B1A2F;  float: right;position: relative;right: 2px;margin-top: 1px;">Pound:</span>-->
                                        <!--    {{ number_format($seller->price) }}-->
                                        <!--</li>-->
                                         @if ($seller->garage!= 'null')
                                        <li>
                                             @php
                                                $converter = new App\Convertmodel();
                                                $price = $converter->numberTowords($seller->price)
                                            @endphp
                                            <span style="color: #1B1A2F">Pound:</span>  {{$price}}
                                        </li>
                                        @endif
                                    </ul>
                                    {{-- <div class="footer">
                                        <a href="#" tabindex="0">
                                        <i class="fa fa-user" aria-hidden="true"></i>{{ ucfirst($seller->name) }}
                                        </a><br>
                                        <span>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ ucfirst($seller->city) }}
                                        </span>
                                    </div> --}}
                                </div>
                                @endforeach



                            </div>
                            <div class="your-class">
                                @php
                                   $cities=App\Models\Seller::where('city','=','london')->where('enable','=','1')->whereRaw('MOD(id, 2) = 0')->inRandomOrder()->get();
                                @endphp
                                @foreach ($cities as $seller)
                                <div class="featuresBox"style="    margin-right: 15px;
    width: 350px;">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">

                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                        {{-- <div class="priceDiv">
                                             <span>
                                                  Pound:{{ $seller->price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <!--<li>-->
                                        <!--    <span style="color:  #1B1A2F;  float: right;position: relative;right: 2px;margin-top: 1px;">Pound:</span>-->
                                        <!--    {{ number_format($seller->price) }}-->
                                        <!--</li>-->
                                         @if ($seller->garage!= 'null')
                                        <li>
                                             @php
                                        $converter = new App\Convertmodel();
                                        $price = $converter->numberTowords($seller->price)
                                    @endphp
                                            <span style="color: #1B1A2F">Pound:</span>  {{$price}}
                                        </li>
                                        @endif
                                    </ul>
                                    {{-- <div class="footer">
                                        <a href="#" tabindex="0">
                                        <i class="fa fa-user" aria-hidden="true"></i>{{ ucfirst($seller->name) }}
                                        </a><br>
                                        <span>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>  {{ ucfirst($seller->city) }}
                                        </span>
                                    </div> --}}
                                </div>
                                @endforeach



                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="your-class">
                                @php
                                   $cities=App\Models\seller::where('city','=','london')->where('enable','=','1')->get();
                                @endphp
                                @foreach ($cities as $seller)
                                {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                <div class="featuresBox">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">
                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                        {{-- <div class="priceDiv">
                                             <span>
                                                  Pound:{{ $seller->price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <li>
                                            <span style="color: #1B1A2F;float: right;position: relative;right: -153px;">Pound:</span>
                                            {{ number_format($seller->price) }}
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                            <div class="your-class">
                                @php
                                   $cities=App\Models\seller::where('city','=','london')->where('enable','=','1')->whereRaw('MOD(id, 2) = 1')->get();
                                @endphp
                                @foreach ($cities as $seller)
                                {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                <div class="featuresBox">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">
                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                        {{-- <div class="priceDiv">
                                             <span>
                                                  Pound:{{ $seller->price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <li>
                                            <span style="color: #1B1A2F;float: right;position: relative;right: -153px;">Pound:</span>
                                            {{ number_format($seller->price) }}
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        <div id="menu2" class="tab-pane fade">
                         <div class="karachi-class">
                             @php
                                   $cities=App\Models\seller::where('city','=','london')->where('enable','=','1')->whereRaw('MOD(id, 2) = 0')->get();
                                @endphp
                                @foreach ($cities as $seller)
                                <div class="featuresBox">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
                                        <!--<div class="priceDiv">-->
                                        <!--    <span>$850.00</span>  Per month-->
                                        <!--</div>-->
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <li>
                                            <span style="color: #1B1A2F;float: right;position: relative;right: -153px;"> Price:  {{ ucfirst($seller->price) }}</span>
                                        </li>
                                    </ul>
                                    <!--<div class="footer">-->
                                    <!--    <a href="#" tabindex="0">-->
                                    <!--    <i class="fa fa-user" aria-hidden="true"></i>Jhon Doe-->
                                    <!--    </a>-->
                                    <!--    <span>-->
                                    <!--        <i class="flaticon-calendar"></i>5 Days ago-->
                                    <!--    </span>-->
                                    <!--</div>-->
                                </div>
                                 @endforeach
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="your-class">
                                @php
                                   $cities=App\Models\seller::where('city','=','brigum')->where('enable','=','1')->whereRaw('MOD(id, 2) = 1')->get();
                                @endphp
                                @foreach ($cities as $seller)
                                {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                <div class="featuresBox">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">
                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <li>
                                            <span style="color: #1B1A2F;float: right;position: relative;right: -153px;"> Price:  {{ ucfirst($seller->price) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                            <div class="your-class">
                                @php
                                   $cities=App\Models\seller::where('city','=','london')->where('enable','=','1')->whereRaw('MOD(id, 2) = 0')->get();
                                @endphp
                                @foreach ($cities as $seller)
                                {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                <div class="featuresBox">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">
                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <li>
                                            <span style="color: #1B1A2F;float: right;position: relative;right: -153px;"> Price:  {{ ucfirst($seller->price) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="menu4" class="tab-pane fade">
                            <div class="your-class">
                                @php
                                   $cities=App\Models\seller::where('city','=','london')->whereRaw('MOD(id, 2) = 0')->get();
                                @endphp
                                @foreach ($cities as $seller)
                                {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                <div class="featuresBox">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">
                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                        {{-- <div class="priceDiv">
                                             <span>
                                                  Pound:{{ $seller->price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <li>
                                            <span style="color: #1B1A2F;float: right;position: relative;right: -153px;"> Price:  {{ ucfirst($seller->price) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                            <div class="your-class">
                                @php
                                   $cities=App\Models\seller::where('city','=','newcastle')->whereRaw('MOD(id, 2) = 1')->get();
                                @endphp
                                @foreach ($cities as $seller)
                                {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                <div class="featuresBox">
                                    <div class="thumbnailImage">
                                        <img class="img-responsive" src="{{asset($seller->image)}}" alt="">
                                        <div class="listing-badges">
                                            <span style="color: aliceblue" class="featured">Featured</span>
                                        </div>
                                        {{-- <div class="priceDiv">
                                             <span>
                                                  Pound:{{ $seller->price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a href="{{route('seller.show',$seller->id)}}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <ul class="facilities-list clearfix">
                                        @if ($seller->size!= '0')
                                        <li>
                                            <span style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }} &nbsp;{{ ucfirst($seller->area) }}
                                        </li>
                                         @endif
                                         @if ($seller->bedroom!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                        </li>
                                        @endif
                                         @if ($seller->Bath!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                        </li>
                                         @endif
                                         @if ($seller->garage!= '0')
                                        <li>
                                            <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                        </li>
                                        @endif
                                        <li>
                                            <span style="color: #1B1A2F;float: right;position: relative;right: -153px;"> Price:  {{ ucfirst($seller->price) }}</span>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featureDiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="commonHeading">Popular <span style="color: #bc985f"> Properties</span></h3>
                <p class="commonText">Advertise properties on ShinnyView and see the huge benefit. You’ll soon see that
                    your property has got lots of traffic and will be at the top of each page.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="tabsDiv">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#menu5"><b>Sale</b></a></li>
                        <li><a data-toggle="pill" href="#menu1"><b>Rent</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tabContent">
                    <div class="tab-content">
                        <div id="menu5" class="tab-pane fade in active">
                            <div class="your-class">
                                @php
                                    $cities = App\Models\Seller::where('type', '=', 'sale')
                                        ->whereRaw('MOD(id, 2) = 1')
                                        ->inRandomOrder()
                                        ->limit(10)->get();
                                @endphp
                                @foreach ($cities as $seller)
                                    <div class="featuresBox" style="    margin-right: 15px;
                                                 width: 350px;">
                                        <div class="thumbnailImage">
                                            <img class="img-responsive" src="{{ asset($seller->image) }}" alt="">

                                            <div class="listing-badges">
                                                <span style="color: aliceblue" class="featured">Featured</span>
                                            </div>

                                        </div>
                                        <div class="detailBox">
                                            <h1 class="title">
                                                <a
                                                    href="{{ route('seller.show', $seller->id) }}">{{ ucfirst($seller->name) }}</a>
                                            </h1>
                                            <div class="locationText">
                                                <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    {{ ucfirst($seller->address) }}</a>
                                            </div>
                                        </div>
                                        <ul class="facilities-list clearfix">
                                            @if ($seller->size != '0')
                                                <li>
                                                    <span
                                                        style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }}
                                                    &nbsp;{{ ucfirst($seller->area) }}
                                                </li>
                                            @endif
                                            @if ($seller->bedroom != '0')
                                                <li>
                                                    <span style="color: #1B1A2F">Beds</span>
                                                    {{ ucfirst($seller->bedroom) }}
                                                </li>
                                            @endif
                                            @if ($seller->Bath != '0')
                                                <li>
                                                    <span style="color: #1B1A2F">Baths</span>
                                                    {{ ucfirst($seller->Bath) }}
                                                </li>
                                            @endif
                                            @if ($seller->garage != '0')
                                                <li>
                                                    <span style="color: #1B1A2F">Garage</span>
                                                    {{ ucfirst($seller->garage) }}
                                                </li>
                                            @endif
                                            <!--<li>-->
                                            <!--    <span style="color:  #1B1A2F;  float: right;position: relative;right: 2px;margin-top: 1px;">Pound:</span>-->
                                            <!--    {{ number_format($seller->price) }}-->
                                            <!--</li>-->
                                            @if ($seller->garage != 'null')
                                                <li>
                                                    @php
                                                        $converter = new App\Convertmodel();
                                                        $price = $converter->numberTowords($seller->price);
                                                    @endphp
                                                    <span style="color: #1B1A2F">Pound:</span> {{ $price }}
                                                </li>
                                            @endif
                                        </ul>

                                    </div>
                                @endforeach



                            </div>
                            <div class="your-class">
                                @php
                                    $cities = App\Models\Seller::where('type', '=', 'sale')
                                        ->whereRaw('MOD(id, 2) = 0')
                                        ->inRandomOrder()
                                        ->limit(10)
                                        ->get();
                                @endphp
                                @foreach ($cities as $seller)
                                    <div class="featuresBox" style="    margin-right: 15px;
                                            width: 350px;">
                                        <div class="thumbnailImage">
                                            <img class="img-responsive" src="{{ asset($seller->image) }}" alt="">

                                            <div class="listing-badges">
                                                <span style="color: aliceblue" class="featured">Featured</span>
                                            </div>

                                        </div>
                                        <div class="detailBox">
                                            <h1 class="title">
                                                <a
                                                    href="{{ route('seller.show', $seller->id) }}">{{ ucfirst($seller->name) }}</a>
                                            </h1>
                                            <div class="locationText">
                                                <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    {{ ucfirst($seller->address) }}</a>
                                            </div>
                                        </div>
                                        <ul class="facilities-list clearfix">
                                            @if ($seller->size != '0')
                                                <li>
                                                    <span
                                                        style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }}
                                                    &nbsp;{{ ucfirst($seller->area) }}
                                                </li>
                                            @endif
                                            @if ($seller->bedroom != '0')
                                                <li>
                                                    <span style="color: #1B1A2F">Beds</span>
                                                    {{ ucfirst($seller->bedroom) }}
                                                </li>
                                            @endif
                                            @if ($seller->Bath != '0')
                                                <li>
                                                    <span style="color: #1B1A2F">Baths</span>
                                                    {{ ucfirst($seller->Bath) }}
                                                </li>
                                            @endif
                                            @if ($seller->garage != '0')
                                                <li>
                                                    <span style="color: #1B1A2F">Garage</span>
                                                    {{ ucfirst($seller->garage) }}
                                                </li>
                                            @endif
                                            <!--<li>-->
                                            <!--    <span style="color:  #1B1A2F;  float: right;position: relative;right: 2px;margin-top: 1px;">Pound:</span>-->
                                            <!--    {{ number_format($seller->price) }}-->
                                            <!--</li>-->
                                            @if ($seller->garage != 'null')
                                                <li>
                                                    @php
                                                        $converter = new App\Convertmodel();
                                                        $price = $converter->numberTowords($seller->price);
                                                    @endphp
                                                    <span style="color: #1B1A2F">Pound:</span> {{ $price }}
                                                </li>
                                            @endif
                                        </ul>

                                    </div>
                                @endforeach



                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="your-class">
                                @php
                                    $cities = App\Models\Seller::where('type', '=', 'rent')
                                        ->whereRaw('MOD(id, 2) = 1')
                                        ->inRandomOrder()
                                        ->limit(10)->get();
                                @endphp
                                @foreach ($cities as $seller)
                                    {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                    <div class="featuresBox">
                                        <div class="thumbnailImage">
                                            <img class="img-responsive" src="{{ asset($seller->image) }}" alt="">
                                            <div class="listing-badges">
                                                <span style="color: aliceblue" class="featured">Featured</span>
                                            </div>
                                            {{-- <div class="priceDiv">
                                             <span>
                                                  Pound:{{ $seller->price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                        </div>
                                        <div class="detailBox">
                                            <h1 class="title">
                                                <a
                                                    href="{{ route('seller.show', $seller->id) }}">{{ ucfirst($seller->name) }}</a>
                                            </h1>
                                            <div class="locationText">
                                                <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    {{ ucfirst($seller->address) }}</a>
                                            </div>
                                        </div>
                                        <ul class="facilities-list clearfix">
                                            <ul class="facilities-list clearfix">
                                                @if ($seller->size != '0')
                                                    <li>
                                                        <span
                                                            style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }}
                                                        &nbsp;{{ ucfirst($seller->area) }}
                                                    </li>
                                                @endif
                                                @if ($seller->bedroom != '0')
                                                    <li>
                                                        <span style="color: #1B1A2F">Beds</span>
                                                        {{ ucfirst($seller->bedroom) }}
                                                    </li>
                                                @endif
                                                @if ($seller->Bath != '0')
                                                    <li>
                                                        <span style="color: #1B1A2F">Baths</span>
                                                        {{ ucfirst($seller->Bath) }}
                                                    </li>
                                                @endif
                                                @if ($seller->garage != '0')
                                                    <li>
                                                        <span style="color: #1B1A2F">Garage</span>
                                                        {{ ucfirst($seller->garage) }}
                                                    </li>
                                                @endif
                                                <li>
                                                    <span
                                                        style="color: #1B1A2F;float: right;position: relative;right: -153px;">Pound:</span>
                                                    {{ number_format($seller->price) }}
                                                </li>
                                            </ul>
                                    </div>
                                @endforeach
                            </div>
                            <div class="your-class">
                                @php
                                  $cities = App\Models\Seller::where('type', '=', 'rent')
                                        ->whereRaw('MOD(id, 2) = 0')
                                        ->inRandomOrder()
                                        ->limit(10)
                                        ->get();
                                @endphp
                                @foreach ($cities as $seller)
                                    {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                    <div class="featuresBox">
                                        <div class="thumbnailImage">
                                            <img class="img-responsive" src="{{ asset($seller->image) }}" alt="">
                                            <div class="listing-badges">
                                                <span style="color: aliceblue" class="featured">Featured</span>
                                            </div>
                                            {{-- <div class="priceDiv">
                                             <span>
                                                  Pound:{{ $seller->price }}
                                                   <div class="right" id="propertyrating-{{$seller->id}}"></div>
                                             </span>
                                        </div> --}}
                                        </div>
                                        <div class="detailBox">
                                            <h1 class="title">
                                                <a
                                                    href="{{ route('seller.show', $seller->id) }}">{{ ucfirst($seller->name) }}</a>
                                            </h1>
                                            <div class="locationText">
                                                <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    {{ ucfirst($seller->address) }}</a>
                                            </div>
                                        </div>
                                        <ul class="facilities-list clearfix">
                                            <ul class="facilities-list clearfix">
                                                @if ($seller->size != '0')
                                                    <li>
                                                        <span
                                                            style="color:#1B1A2F">Area</span>{{ ucfirst($seller->size) }}
                                                        &nbsp;{{ ucfirst($seller->area) }}
                                                    </li>
                                                @endif
                                                @if ($seller->bedroom != '0')
                                                    <li>
                                                        <span style="color: #1B1A2F">Beds</span>
                                                        {{ ucfirst($seller->bedroom) }}
                                                    </li>
                                                @endif
                                                @if ($seller->Bath != '0')
                                                    <li>
                                                        <span style="color: #1B1A2F">Baths</span>
                                                        {{ ucfirst($seller->Bath) }}
                                                    </li>
                                                @endif
                                                @if ($seller->garage != '0')
                                                    <li>
                                                        <span style="color: #1B1A2F">Garage</span>
                                                        {{ ucfirst($seller->garage) }}
                                                    </li>
                                                @endif
                                                <li>
                                                    <span
                                                        style="color: #1B1A2F;float: right;position: relative;right: -153px;">Pound:</span>
                                                    {{ number_format($seller->price) }}
                                                </li>
                                            </ul>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="mostPopularDiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="commonHeading"><span style="color:#bc985f">Properties</span> In Most <span style="color:#bc985f">Popular Places</span></h3>
                <p class="commonText">UK is full of wonderful places and on SHINNYVIEW there are properties in each liveable city. UK has a robust selection of residential and commercial properties that are to live for. The warm temperature and the relaxing lifestyle makes it the best place ever.</p>
            </div>
        </div>
        <div class="row mt-80">
            <div class="col-lg-3">
                <div class="propertyDiv">
                    <div class="icon-container"><i class="fa fa-building"></i></div>
                    <h3 class="title">Student Property</h3>
                    <p class="detail">A lease is a contract outlining the terms under which one party agrees to rent property owned by another party.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="propertyDiv">
                    <div class="icon-container"><i class="fa fa-home"></i></div>
                    <h3 class="title">Family homes</h3>
                    <p class="detail">If you would like to move into a house with your family then you can choose an ideal property fit to your needs.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="propertyDiv">
                    <div class="icon-container"><i class="fa fa-hotel"></i></div>
                    <h3 class="title">Commercial</h3>
                    <p class="detail">The location and amenities of your commercial property can be featured with us to gain substantial result.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="propertyDiv">
                    <div class="icon-container"><i class="fa fa-building"></i></div>
                    <h3 class="title">Farm and lands</h3>
                    <p class="detail">If you want a dream apartment for you near town or other places, you can find it with us (on SV) with a peace of mind.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popularPlaceDiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="commonHeading"><span style="color:#bc985f">MOST</span> POPULAR <span style="color:#bc985f">CITIES</span></h3>
                <p class="commonText">With specialists on hand that are ready to help you with buying and selling your properties. We lay a bridge of communication between the buyers and sellers of your properties. Given to the wide spread on adoption of Smart phones, there is a pressing that is needed to reach out to more people and also give the best deals in terms of selling and buying properties.</p>
            </div>
        </div>
        <div class="row mt-80">
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('London')}}" class="imgBg" style="background-image: url('assets/img/London1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">London</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Birmingham')}}" class="imgBg" style="background-image: url('assets/img/birmingham1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Birmingham</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Manchester')}}" class="imgBg" style="background-image: url('assets/img/manchester1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Manchester</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Liverpool')}}"class="imgBg" style="background-image: url('assets/img/Liverpool1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Liverpool</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Newcastle')}}"class="imgBg" style="background-image: url('assets/img/newcastle1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Newcastle-upon-Tyne</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Cardiff')}}"class="imgBg" style="background-image: url('assets/img/cardiff1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Cardiff</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Edinburgh')}}"class="imgBg" style="background-image: url('assets/img/edinburgh1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Edinburgh</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Glasgow')}}"class="imgBg" style="background-image: url('assets/img/glasgow1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Glasgow</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Cambridge')}}"class="imgBg" style="background-image: url('assets/img/cambridge1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Cambridge</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Oxford')}}"class="imgBg" style="background-image: url('assets/img/oxford1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Oxford</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Bath')}}"class="imgBg" style="background-image: url('assets/img/bath1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Bath</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 padd-75">
                <div class="linkImg">
                    <a href="{{route('Dublin')}}"class="imgBg" style="background-image: url('assets/img/dublin1.jpg');">
                        <div class="image-link__overlay">
                            <div class="image-link__text">Dublin</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="marketInfoDiv">
    <div class="bg-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature">
                        <img class="img-responsive"  src="{{asset('assets/img/image (1).png')}}" alt="">
                        <h3 class="feature__title"><span style="color: #bc985f"> Managing your tenancy </span></h3>
                        <p class="feature__desc">
Being a tenant, it’s expected for you to reside in the property with responsibility. This includes things such as cleaning the property on a daily basis...</p><br>
            <p class="feature__desc"><a href="{{url('managing-your-tenancy')}}">Find now</a> </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <img class="img-responsive" src="{{asset('assets/img/image (2).png')}}" alt="">
                        <h3 class="feature__title"><span style="color: #bc985f"> Investors and landlords </span></h3>
                        <p class="feature__desc">
                           The areas where you’re most fascinated in staying focused on our monthly property market update is a must-have tool for landlords...
                        </p><br>
                        <p  class="feature__desc"><a href="{{url('investor-landlord')}}">Sign up now </a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature">
                        <img class="img-responsive" src="{{asset('assets/img/image (4).png')}}" alt="">
                        <h3 class="feature__title"><span style="color: #bc985f"> Residential properties </span></h3>
                        <p class="feature__desc">
We at Shinnyview (website and mobile application) advertise properties on behalf of commercial agents, chartered surveyors...            </p><br>
<p class="feature__desc"><a href="{{url('residential-commercial-properties')}}">Find now</a>  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="testimonialDiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonialDivInfo">
                    <h1 class="ourTestimonial">Our Testimonial</h1>
                    <p class="testimonialText">Our dealers & customers are very important to us, here's what they say about us:</p>
                    <a href="{{url('contact')}}" class="btn important-btn btn-theme btn-md">Contact us</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonial-class">
                    <div class="testimonial-info-box">
                        <div class="profile-user">
                            <div class="avatar">
                                <img src="{{asset('assets/img/Shakir.jpg')}}" alt=""class="rounded-circle">
                            </div>

                        </div>
                        <h5>
                            <a>Majeed Shakir</a>
                            </h5>
                            <h6>Estate Agent, London</h6>
                            <p><i class="fa fa-quote-left"></i>The top property website! ShinnyView is really nice company to deal with. Their customer service is very friendly and website posting process is very simple and straight. Great to advertise with ShinnyView and wishes for the best.<i class="fa fa-quote-right"></i></p>
                    </div>
                    <div class="testimonial-info-box">
                        <div class="profile-user">
                            <div class="avatar">
                                <img src="{{asset('assets/img/Bilal.jpg')}}" alt=""class="rounded-circle">
                            </div>

                        </div>
                        <h5>
                            <a>M. Bilal Shams</a>
                            </h5>
                            <h6>Estate Agent,London</h6>
                            <p><i class="fa fa-quote-left"></i> ShinnyView offered a FREE listing for limited period. This is a very good for dealers.  The website is very simple to use for posting our properties. I have excellent experience with Shinny View. Their searching filter is very easy.<i class="fa fa-quote-right"></i></p>
                    </div>

                    <div class="testimonial-info-box">
                        <div class="profile-user">
                            <div class="avatar">
                                <img src="{{asset('assets/img/Homelan.jpg')}}" alt="">
                            </div>

                        </div>
                        <h5>
                            <a>Homeland Properties</a>
                            </h5>
                            <h6>Estate Agent London</h6>
                            <p><i class="fa fa-quote-left"></i>I am very satisfied with ShinnyView in regard my properties advertisement. This company listing system is very effortless and this property portal will help us to promote our all property. It is very good value for money...<i class="fa fa-quote-right"></i></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="newLetter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsLetter">
                    <div class="newsLetterContent">
                        <h2><span style="color: #080808;">News letter</span></h2>
                        <p>Sign up for our newsletter to get up-to-date from us</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsFormDiv">

                    <form action="{{route('newsletter') }}" method="post">
                      @csrf
                        <input type="email"name="user_email" placeholder="Enter Your E-mail" required="">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('new/assets/js/app.js')}}"></script>
  <script src="{{asset('new/toastr/toastr.min.js')}}"></script>

<script>
    $('#minprice').keyup(function() {
        search_result();
})
  $('#mixprice').keyup(function() {
        search_result();
})
//  $('#autocomplete-input').keypress(function() {
//       var city="";
//           search_result();
// })

$('#autocomplete-input').on("input", function() {
   search_result();
});
 $('#bed').keyup(function() {
        search_result();
})
$('#purpose').change(function() {
        search_result();
})
  $('#minprice_rent').keyup(function() {

        search_result_rent();
})
  $('#mixprice_rent').keyup(function() {
        search_result_rent();
})
 $('#autocomplete-input_rent').keyup(function() {

           search_result_rent();
})
 $('#bed_rent').keyup(function() {

        search_result_rent();
})
$('#purpose_rent').change(function() {

        search_result_rent();
})

 $('#minprice_lease').keyup(function() {
        search_result_lease();
})
  $('#mixprice_lease').keyup(function() {


        search_result_lease();
})
 $('#autocomplete-input_lease').keyup(function() {

           search_result_lease();
})
 $('#bed_lease').keyup(function() {

        search_result_lease();
})
$('#purpose_lease').change(function() {
    //   alert('jxgcxj')
        search_result_lease();
})
function search_result_lease(){
    // alert('dhsfgsdj');
    var purpose=document.getElementById("purpose_lease").value;

    var bedroom=document.getElementById("bed_lease").value;

    var min_price=document.getElementById("minprice_lease").value;

    var city=document.getElementById("autocomplete-input_lease").value;

    var max_price = document.getElementById("mixprice_lease").value;

    let _token   = $('meta[name="csrf-token"]').attr('content');
    let cat=3;
       $.ajax({
        url : '{{ URL::to('search_home') }}',
       type:"POST",
        data:{
          minprice:min_price,
          maxprice:max_price,
          city:city,
          purpose:purpose,
          bedroom:bedroom,
          category:cat,
          _token: _token
        },
      success: function(response) {
        document.getElementById("myText_lease").innerHTML = "Search "+response+" Properties";

      }
    })
 }


 function search_result_rent(){
    var purpose=document.getElementById("purpose_rent").value;
    var bedroom=document.getElementById("bed_rent").value;
    var min_price=document.getElementById("minprice_rent").value;
    var city=document.getElementById("autocomplete-input_rent").value;
    var max_price = document.getElementById("mixprice_rent").value;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    let cat=2;
       $.ajax({
        url : '{{ URL::to('search_home') }}',
       type:"POST",
        data:{
          minprice:min_price,
          maxprice:max_price,
          city:city,
          purpose:purpose,
          bedroom:bedroom,
          category:cat,
          _token: _token
        },
      success: function(response) {
          console.log(response);
         document.getElementById("myText_rent").innerHTML = "Search "+response+" Properties";
      }
    })
 }

 function search_result(){

    var min_price=document.getElementById("minprice").value;
    var city=document.getElementById("autocomplete-input").value;//alert(city);
    var max_price = document.getElementById("mixprice").value;
    var purpose=document.getElementById("purpose").value;

    var bedroom=document.getElementById("bed").value;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    let cat=document.getElementById("cat").value;
        // alert(cat);
       $.ajax({
        url : '{{ URL::to('search_home') }}',
       type:"POST",
        data:{
          minprice:min_price,
          maxprice:max_price,
          city:city,
          purpose:purpose,
          bedroom:bedroom,
          category:cat,
          _token: _token
        },
      success: function(response) {

    console.log(response);
        document.getElementById("myText").innerHTML = "Search "+response+" Properties";
      }
    })
 }


window.onload =   search_result();
    </script>
    <script>
    jQuery(".homeList").click(function(){
        if(jQuery(".homeList .dropdown-menu").hasClass("show")){
            jQuery(".homeList .dropdown-menu").removeClass("show");
        }
        else
        {
            jQuery(".homeList .dropdown-menu").addClass("show");
        }
    });
    </script>
     <script>
    jQuery(".notification-list").click(function(){
        if(jQuery(".notification-list .dropdown-menu").hasClass("show")){
            jQuery(".notification-list .dropdown-menu").removeClass("show");
        }
        else
        {
            jQuery(".notification-list .dropdown-menu").addClass("show");
        }
    });
    </script>
     <script>$(window).on('load', function(){
    @if(Session::has('subscribe'))
    </script>
    <script>
swal("Thank You","For Choosing Us!");
  </script>
  @endif
   <script>$(window).on('load', function(){
    @if(Session::has('email'))
    </script>
    <script>
swal("Thank You","Email already subscribed");
  </script>
  @endif
@toastr_render
@endsection
