@extends('layouts.footer')
@extends('layouts.header')
<style>
    @media only screen and (max-width: 320px) {
        .listing-features-info .addReadMore {
            font-size: 8px;
        }
    }

    @media only screen and (max-width: 375px) {
        .listing-features-info .addReadMore {
            font-size: 10px;
        }
    }

    @media only screen and (max-width: 425px) {
        .listing-features-info .addReadMore {
            font-size: 11px;
        }
    }

    .aboutsale {
        background-image: url(assets/img/banner2.jpg) !important;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: inherit;
        padding: 150px 0px 150px;
        height: 355px;
        width: 100%;
    }

    i.fa.fa-camera {
        color: #1b1a2f;
    }

    #pagin li a {
        padding: 3px !important;
    }

    .propertyInfo .listing-detail-wrapper .listing-short-detail .listing-name {
        font-size: 16px !important;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
        font-weight: bold;
        margin-left: 2px;
        color: #8a6d3b !important;
        cursor: pointer;
    }

    .addReadMore.showlesscontent .SecSec,
    .addReadMore.showlesscontent .readLess {
        display: none;
    }

    .addReadMore.showmorecontent .readMore {
        display: none;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
        font-weight: bold;
        margin-left: 2px;
        color: blue;
        cursor: pointer;
    }

    .addReadMoreWrapTxt.showmorecontent .SecSec,
    .addReadMoreWrapTxt.showmorecontent .readLess {
        display: block;
    }


    .toggledText {

        overflow: hidden;
    }

    .toggledText.toggle {
        height: auto;
    }

    .readless-txt,
    .toggledText.toggle~#readmore span.readmore-txt {
        display: none;
    }

    .toggledText.toggle~#readmore span.readless-txt {
        display: block;
    }

    #pagin {
        padding: 0px;
        margin: 50px 0px 0px;
    }

    #pagin li {
        display: inline-block;

    }

    #pagin li a.current {
        text-align: center;
        vertical-align: middle;
        background: #8a6d3b;
        padding: 5px 12px;
        color: #fff;
    }

    #pagin li a {
        text-align: center;
        vertical-align: middle;
        background: #80808038;
        padding: 5px 12px;
        color: #000;
    }
    .fb9 {
        border: 1px solid #1b1a2f;
        background-color: #1b1a2f;
        width: 94px;
        height: 30px;
     
    }

</style>
<script src='https://www.google.com/recaptcha/api.js'></script>
@section('content')
    <div class="property_list"style="background-color: #8a6d3b;">
        <div class="propertyHeader">
            <div class="aboutsale">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="ipt-title" style="color: aliceblue;">Rent Application</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="propertyListDiv">

            <div class="modal-body">
                <form method="post" action="{{route('Rent-application')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p style="margin-left: 334px;"><b style="color: #1b1a2f;">Facility Applied For:</b></p>

                    {{-- <p style="margin-left: 334px;color: #8a6d3b;">Current Residence:</p> --}}
                    <div style="display: flex;margin-top: 20px;justify-content: center;">

                        {{-- <label for="pakage" class="col-form-label" name="pakage">Pakage</label><br> --}}
                        <div class="col-sm-10">
                                  @php
                            $count=App\Models\Seller::where('type','=','rent')->get();
                      @endphp 
                            <select class="form-control" name="home" style="width: 48%;margin-left: 277px;">
                                <option name="home">Select Family Home* </option>
                                @foreach($count as $data)
                                <option value="{{ $data->name}}">{{ $data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div style="display: flex;margin-top: 20px;justify-content: center;">
                        <div class="form-group agentrrr" style="margin-right: 100px;">
                            <label for="recipient-name" class="col-form-label">First Name:*</label>
                            <input name="name" type="text" class="form-control" id="recipient-name"
                                placeholder="{{ trans('First Name') }}">
                            {{-- <input type="hidden" value="agent" name="type"> --}}
                        </div>
                        <div class="form-group mal">
                            <label for="recipient-name" class="col-form-label">Last Name:</label>
                            <input name="l_name" type="text"
                                class="form-control" required
                                placeholder="{{ trans('Last Name') }}">
                            
                                </div>
                            
                        </div>
                    </div>
                    <div style="display: flex;margin-top: 20px;justify-content: center;">
                        <div class="form-group agentuuuu" style="margin-right: 100px;">
                            <label for="recipient-name" class="col-form-label">Birth Date:*</label>
                            <input name="birth" type="date" class="form-control" id="recipient-name"
                                placeholder="{{ trans('Birth Date') }}">
                        </div>
                        <div class="form-group mal">
                            <label for="recipient-name" class="col-form-label">Any Past Name:</label>
                            <input name="p_name" type="text" class="form-control" id="recipient-name"
                                placeholder="{{ trans('Any Past Name') }}">
                        </div>
                    </div>
                    <div style="display: flex;margin-top: 20px;justify-content: center;">
                        <div class="form-group mal" style="margin-right: 100px;">
                            <label for="recipient-name" class="col-form-label">Phone:*</label>
                            <input class="form-control" name="number" type="tel" value="" id="example-tel-input"
                                placeholder="{{ trans('Phone') }}">
                        </div>
                        <div class="form-group mal">
                            <label for="recipient-name" class="col-form-label">Email:*</label>
                            <input class="form-control" name="email" type="email" value="" id="example-tel-input"
                                placeholder="{{ trans('Email') }}">
                        </div>
                    </div>

            </div>
            <hr style="width: 50%;height: -13px;background: rgb(27 26 47);height: 1px;">
            <p style="margin-left: 334px;"><b style="color: #1b1a2f;">Rental / Residential History:</b></p>

            <p style="margin-left: 334px;color: #8a6d3b;">Current Residence:</p>

            <div class="modal-body">


                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group agentrrr" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Address:*</label>
                        <input name="address" type="text" class="form-control" id="recipient-name"
                            placeholder="{{ trans('Address') }}">
                        {{-- <input type="hidden" value="agent" name="type"> --}}
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">State:*</label>
                        <input name="state" type="text"
                            class="form-control" required
                            placeholder="{{ trans('State') }}">
                      
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group agentuuuu" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">City:*</label>
                        <input name="city" type="text" class="form-control" id="recipient-name"
                            placeholder="{{ trans('City') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Zip:*</label>
                        <input name="zip" type="text" class="form-control" id="recipient-name"
                            placeholder="{{ trans('Zip ') }}">
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group mal" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Last Rent Paid:</label>
                        <input class="form-control" name="l_rent" type="text" value="" id="example-tel-input"
                            placeholder="{{ trans('Last Rent Paid:') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Reason for leaving:</label>
                        <input class="form-control" name="reason" type="text" value="" id="example-tel-input"
                            placeholder="{{ trans('Reason for leaving:') }}">
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group mal" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Owner:</label>
                        <input class="form-control" name="owner" type="text" value="" id="example-tel-input"
                            placeholder="{{ trans('Owner') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Owner Phone:</label>
                        <input class="form-control" name="o_phone" type="text" value="" id="example-tel-input"
                            placeholder="{{ trans('Owner Phone:') }}">
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group mal" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Residency From:</label>
                        <input class="form-control" name="r_date" type="date" value="" id="example-tel-input"
                            placeholder="{{ trans('Residency From:') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Residency To:</label>
                        <input class="form-control" name="r_to" type="date" value="" id="example-tel-input"
                            placeholder="{{ trans('Residency To:') }}">
                    </div>
                </div>



            </div>
            <hr style="width: 50%;height: -13px;background: rgb(27 26 47);height: 1px;">
            <p style="margin-left: 334px;"><b style="color: #1b1a2f;">Employment Details:</b></p>

            <p style="margin-left: 334px;color: #8a6d3b;">Primary Tenant:</p>
            <div class="modal-body">


                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group agentrrr" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Address:*</label>
                        <input name="t_address" type="text" class="form-control" id="recipient-name"
                            placeholder="{{ trans('Address') }}">
                        {{-- <input type="hidden" value="agent" name="type"> --}}
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">State:*</label>
                        <input name="t_state" type="text"
                            class="form-control" required
                            placeholder="{{ trans('State') }}">
                       
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group agentuuuu" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">City:*</label>
                        <input name="t-city" type="text" class="form-control" id="recipient-name"
                            placeholder="{{ trans('City') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Zip:*</label>
                        <input name="t_zip" type="text" class="form-control" id="recipient-name"
                            placeholder="{{ trans('Zip ') }}">
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group mal" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Last Rent Paid:</label>
                        <input class="form-control" name="t_rent" type="text" value="" id="example-tel-input"
                            placeholder="{{ trans('Last Rent Paid') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Reason for leaving:</label>
                        <input class="form-control" name="t_reason" type="text" value="" id="example-tel-input"
                            placeholder="{{ trans('Reason for leaving') }}">
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group mal" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Owner:</label>
                        <input class="form-control" name="t_owner" type="text" value="" id="example-tel-input"
                            placeholder="{{ trans('Owner') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Owner Phone:</label>
                        <input class="form-control" name="t_number" type="tel" value="" id="example-tel-input"
                            placeholder="{{ trans('Owner Phone:') }}">
                    </div>
                </div>
                <div style="display: flex;margin-top: 20px;justify-content: center;">
                    <div class="form-group mal" style="margin-right: 100px;">
                        <label for="recipient-name" class="col-form-label">Residency From:</label>
                        <input class="form-control" name="te_form" type="date" value="" id="example-tel-input"
                            placeholder="{{ trans('Residency From ') }}">
                    </div>
                    <div class="form-group mal">
                        <label for="recipient-name" class="col-form-label">Residency To:</label>
                        <input class="form-control" name="te_to" type="date" value="" id="example-tel-input"
                            placeholder="{{ trans('Residency To:') }}">
                    </div>
                </div>
                <p style="margin-left: 334px;"><b style="color: #1b1a2f;">Employment Details:</b></p>
                <p style="width: 46%;text-align: justify;margin-left: 336px;">
                    believe that the statements I have made are true and correct. I hereby authorize a credit and/or
                    criminal
                    check to be made, verification of information I provided and communication with any and all names listed
                    on
                    this application. I understand that any discrepancy or lack of information may result in the rejection
                    of this
                    application. I understand that this is an
                    application for an apartment or home rental and does not constitute a rental or lease agreement in whole
                    or
                    part. Any questions regarding rejected applications must be submitted in writing and accompanied by a
                    self-addressed stamped envelope.
                </p>
                <div class="agree" style="margin-left: 333px;">
                    <input type="checkbox" id="vehicle1" >
                    <label for="vehicle1">I Agree*</label>
                </div>
                      <div class="recapture"style="margin-left: 332px;">
                         <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>
                      </div>          
            </div>
            {{-- <input type="submit" value="Submit" class="fb9"style="margin-left: 353px;"> --}}
            <button type="submit" value="Submit" class="fb9"style="margin-left: 353px;color: aliceblue;border-radius: 11px;margin-bottom: 9px;">Send</button>
            </form>

        </div>
    </div>
    </div>
@endsection
