@extends('frontend.layouts.app')

@section('content')


<section class="col-lg-12">

    <div class="banner">
        <img src="{{asset('uploads/banner/1122323864.jpg')}}" style="width: 100%;height:500px">
    </div>
</section>


   <!-- Start Mission Area -->
   <section class="about-area pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-wrap reveal">
                    <div class="about-content" style="padding-top:3rem">
                        <h4>Director Designation</h4>
                        <p>
                            Unique Group (UG) is one of the largest conglomerate and foremost diversified
                            business entities in Bangladesh. Its journey started in early 1980’s,
                            and over the years, it has diversified into many new businesses sectors
                            in order to meet the needs of the stakeholders, while contributing
                            significantly to the economy. UG has developed a unique business model of
                            creating synergized companies that enjoy the best of entrepreneurial
                            independence and Group-wide synergies.
                        </p>


                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="reveal-img rainbow mt-lg-5">
                    <div class="about_img">

                        <div class="col_img" style="width: 100%">
                            <img src="{{ asset('front_assets') }}/img/about/about3.jpg" class="w-100"
                                alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>





 <section>
 <div id = "animated-example" class = "animated bounceInLeft">

    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="reveal-img rainbow mt-lg-5">
                    <div class="about_img">

                        <div class="col_img" style="width: 100%">
                            <img src="{{ asset('front_assets') }}/img/about/about3.jpg" class="w-100"
                                alt="">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-wrap reveal">
                    <div class="about-content" style="padding-top:3rem">

                        <h4>Director Designation</h4>
                        <p>
                            Unique Group (UG) is one of the largest conglomerate and foremost diversified
                            business entities in Bangladesh. Its journey started in early 1980’s,
                            and over the years, it has diversified into many new businesses sectors
                            in order to meet the needs of the stakeholders, while contributing
                            significantly to the economy. UG has developed a unique business model of
                            creating synergized companies that enjoy the best of entrepreneurial
                            independence and Group-wide synergies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </div>


 <script>
    function myFunction() {
       location.reload();
    }
 </script>

@endsection
