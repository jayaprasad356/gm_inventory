@extends('layouts.public')

@section('content')
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
                .imgsize {
        width: 250px;
        height: 250px;
        }
        .imgicon {
        width: 143px;
        height: 143px;
        }
        .imgicon2 {
        width: 90px;
        height: 90px;
        }
        /*--------------------------------------------------------------
        # Pricing
        --------------------------------------------------------------*/
        .pricing .row {
        padding-top: 40px;
        }

        .pricing .box {
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
        background: #fff;
        text-align: center;
        }

        .pricing h3 {
        font-weight: 300;
        margin-bottom: 15px;
        font-size: 28px;
        }

        .pricing h4 {
        font-size: 46px;
        color: #68a4c4;
        font-weight: 400;
        font-family: "Open Sans", sans-serif;
        margin-bottom: 25px;
        }

        .pricing h4 span {
        color: #bababa;
        font-size: 18px;
        display: block;
        }

        .pricing ul {
        padding: 0;
        list-style: none;
        color: #999;
        text-align: left;
        line-height: 20px;
        }

        .pricing ul li {
        padding-bottom: 12px;
        }

        .pricing ul i {
        color: #68a4c4;
        font-size: 18px;
        padding-right: 4px;
        }

        .pricing ul .na {
        color: #ccc;
        }

        .pricing ul .na i {
        color: #ccc;
        }

        .pricing ul .na span {
        text-decoration: line-through;
        }

        .pricing .get-started-btn {
        background: #1e4356;
        display: inline-block;
        padding: 6px 30px;
        border-radius: 20px;
        color: #fff;
        transition: none;
        font-size: 14px;
        font-weight: 400;
        font-family: "Roboto", sans-serif;
        transition: 0.3s;
        }

        .pricing .get-started-btn:hover {
        background: #68a4c4;
        }

        .pricing .featured {
        z-index: 10;
        margin: -30px -5px 0 -5px;
        }

        .pricing .featured .get-started-btn {
        background: #68a4c4;
        }

        .pricing .featured .get-started-btn:hover {
        background: #85b6cf;
        }

        @media (max-width: 992px) {
        .pricing .box {
            max-width: 60%;
            margin: 0 auto 30px auto;
        }
        }

        @media (max-width: 767px) {
        .pricing .box {
            max-width: 80%;
            margin: 0 auto 30px auto;
        }
        }

        @media (max-width: 420px) {
        .pricing .box {
            max-width: 100%;
            margin: 0 auto 30px auto;
        }
        }
        /*--------------------------------------------------------------
        # Contact
        --------------------------------------------------------------*/
        .contact {
        padding-bottom: 30px;
        }

        .contact .info-box {
        color: #444;
        text-align: center;
        box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
        padding: 20px 0 30px 0;
        margin-bottom: 30px;
        }

        .contact .info-box i {
        font-size: 32px;
        color: #68a4c4;
        border-radius: 50%;
        padding: 8px;
        border: 2px dotted #a2cce3;
        }

        .contact .info-box h3 {
        font-size: 20px;
        color: #666;
        font-weight: 700;
        margin: 10px 0;
        }

        .contact .info-box p {
        padding: 0;
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
        }

        .contact .php-email-form {
        box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
        padding: 30px;
        margin-bottom: 30px;
        }

        .contact .php-email-form .validate {
        display: none;
        color: red;
        margin: 0 0 15px 0;
        font-weight: 400;
        font-size: 13px;
        }

        .contact .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        }

        .contact .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        }

        .contact .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
        }

        .contact .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form input,
        .contact .php-email-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        }

        .contact .php-email-form input::focus,
        .contact .php-email-form textarea::focus {
        background-color: #68a4c4;
        }

        .contact .php-email-form input {
        padding: 20px 15px;
        }

        .contact .php-email-form textarea {
        padding: 12px 15px;
        }

        .contact .php-email-form button[type="submit"] {
        background: #68a4c4;
        border: 0;
        padding: 10px 24px;
        color: #fff;
        transition: 0.4s;
        }

        .contact .php-email-form button[type="submit"]:hover {
        background: #8dbad2;
        }
        @-webkit-keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }

        @keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }

    </style>
    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs mt-5">
      <div class="container">

        <div class=" text-center ">
          <h2 class="text-secondary">UPGRADE YOUR PLAN</h2>
          
        </div>

      </div>
    </section><!-- End Contact Section -->

            <!-- ======= Pricing Section ======= -->
            <section class="pricing section-bg" data-aos="fade-up">
            <div class="container">
      
      
              <div class="row no-gutters">
      
                <div class="col-lg-4 box">
                  <h3>14 Days Trial</h3>
                  <h4>Free<span>No Cost</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Sales - Invoice & Quotation</li>
                    <li><i class="bx bx-check"></i> Purchase Orders</li>
                    <li><i class="bx bx-check"></i> Supplier List</li>
                    <li><i class="bx bx-check"></i> Products</li>
                    <li><i class="bx bx-check"></i> Services</li>
                    
                    
                  </ul>
                  <a href="#" class="get-started-btn">Get Started</a>
                </div>
      
                <div class="col-lg-4 box featured">
                  <h3>Monthly Plan</h3>
                  <h4>Rs.499<span>Price</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Sales - Invoice & Quotation</li>
                    <li><i class="bx bx-check"></i> Purchase Orders</li>
                    <li><i class="bx bx-check"></i> Supplier List</li>
                    <li><i class="bx bx-check"></i> Products</li>
                    <li><i class="bx bx-check"></i> Services</li>
                    
                    
                  </ul>
                  <a href="#" class="get-started-btn">Get Started</a>
                </div>
      
                <div class="col-lg-4 box">
                  <h3>Yearly Plan</h3>
                  <h4>Rs.4999<span>Price</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Sales - Invoice & Quotation</li>
                    <li><i class="bx bx-check"></i> Purchase Orders</li>
                    <li><i class="bx bx-check"></i> Supplier List</li>
                    <li><i class="bx bx-check"></i> Products</li>
                    <li><i class="bx bx-check"></i> Services</li>
                    
                    
                  </ul>
                  <a href="#" class="get-started-btn">Get Started</a>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Pricing Section -->
                  <!-- ======= Contact Section ======= -->
        <section class="contact mt-5" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">


          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <img class="img-fluid imgicon" src="{{ URL::to('/public/assets/logo.png') }}"/>

                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <img class="img-fluid imgicon2" src="{{ URL::to('/public/assets/mobile.png') }}"/>
                  <h5>App Development</h5>

                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <img class="img-fluid imgicon2" src="{{ URL::to('/public/assets/web.png') }}"/>
                  <h5>Web Development</h5>

                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Tiruchirappalli,Tamil Nadu</p>
                  <p>INDIA</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>
                    greymatterinnovation@gmail.com
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 9751665327</p>
                </div>
              </div>
            </div>

          </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection
