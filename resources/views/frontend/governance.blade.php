@extends('frontend.layouts.app')

@section('content')

<section class="col-lg-12">

    <div class="banner">
        <img src="{{asset('uploads/banner/1122323864.jpg')}}" style="width: 100%;height:500px">
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="about-wrap reveal">
                <div class="about-content"  style="justify-content: center;" >
                    <h4 style="margin-top:5rem">WE PRACTICE GOOD CORPORTAE GOVERNENCE</h4>
                    <div class="reveal-img rainbow " style="width:500px;">
                        <div class="about_img" >

                            <div class="col_img" style="width: 100%">
                                <img src="{{ asset('front_assets') }}/img/about/about3.jpg" class="w-100"
                                    alt="">
                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </div>

        <div class="col-lg-6">
            <div class="about-wrap reveal">
                <div class="about-content"  style="justify-content: center;" >
                    <h4 style="margin-top:5rem">WE PRACTICE GOOD CORPORTAE GOVERNENCE</h4>
                    <div class="reveal-img rainbow " style="width:500px;">
                        <div class="about_img" >

                            <div class="col_img" style="width: 100%">
                                <img src="{{ asset('front_assets') }}/img/about/about3.jpg" class="w-100"
                                    alt="">
                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </div>
</div>

@endsection

