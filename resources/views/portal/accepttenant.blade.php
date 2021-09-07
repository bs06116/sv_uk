@extends('layout')
<style>
@media only screen and (max-width: 768px) {
     .card-body form div{
                justify-content: initial !important;
        }
        .card-body form div .form-group{
            width:100% !important;
        }
}
</style>
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div style="display: flex;margin-top: 20px;justify-content: center;">
                            <div class="form-group agentrrr">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input name="name" type="text"value="" class="form-control" id="recipient-name"
                                    placeholder="{{ trans('Name') }}">
                                <input type="hidden" value="tenant" name="type">
                            </div>
                            <div class="form-group mal">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input name="email" value=""type="email" class="form-control" id="recipient-name"
                                    placeholder="{{ trans('Email') }}">
                            </div>
                        </div>
                        <div style="display: flex;margin-top: 20px;justify-content: center;">
                            <div class="form-group agentuuuu">
                                <label for="recipient-name" class="col-form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="recipient-name"
                                    placeholder="{{ trans('Password') }}">
                            </div>
                            <div class="form-group mal">
                                <label for="recipient-name" class="col-form-label">Confirm Password</label>
                                <input name="confirm_password"value="" type="password" class="form-control"
                                    id="recipient-name" placeholder="{{ trans('Confirm Password') }}">
                            </div>
                        </div>
                        
                                  <div style="display: flex;margin-top: 20px;justify-content: center;">
                                        <div class="form-group  agentdddd">
                                            <label for="recipient-name" class="col-form-label"style="
                                                margin-left: 82px;">Logo</label>
                                            <input name="image" type="file" class="form-control"style="
                                               width: 53%;margin-left: 83px;">
                                            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                                        </div>
                                        <div class="form-group mal">
                                            <label for="recipient-name" class="col-form-label"style="
                                                margin-left: -78px;">Contact NO</label>
                                            <input class="form-control" name="number" type="tel" value=""
                                                id="example-tel-input" placeholder="{{ trans('Phone Number') }}"style="
                                                 margin-left: -78px;">
                                        </div>
                                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>                    </form>
                </div> <!-- Page content Wrapper -->

            </div>
        </div>
    </div>
        @endsection
