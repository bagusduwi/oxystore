@extends('template.template')

@section('content')
<div class="conact-section section pt-85 pt-lg-65 pt-md-55 pt-sm-45 pt-xs-35  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row row justify-content-md-center">
            <div class="col-5">
                <div class="contact-form-wrap">
                    <h3 class="contact-title">Login</h3>
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="name-fild-padding mb-sm-30 mb-xs-30">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <label class="fild-name">Username</label>
                                        <input name="username" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <label class="fild-name">Password</label>
                                        <input name="password" placeholder="" type="password">
                                    </div>
                                </div>
                                <button class="btn mt-5" type="submit"><span>Login</span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection