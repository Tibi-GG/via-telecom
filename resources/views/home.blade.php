<x-app-layout>

    <div class="container-fluid home main-c" name="main-top" id="main-top">
        <div class="position-relative overflow-hidden main-content">
            <div class="p-lg-5 px-4 mx-auto my-5">
                <h1 class="display-5 text-light shd font-semibold " >VIA TELECOM </h1>
                <p class="lead text-light i-right">Your success is our business.</p>
                <div class="e-divider"></div>
                <a class="btn btn-primary-via w100" href="{{ route('products') }}" style="text-decoration: none">Browse Products</a>
            </div>
        </div>
    </div>



      <div name="main" id="main">
        <div class="container">
          <div class="row">

                <div class="container-main col-3 text-center" onClick="window.location='/products/broadband'">
                  <img class="i-center i-icon-black" src="/assets/img/icons/icons8-ethernet-on-100.png">
                  <hr class="e-hr">
                  <h5 class="h-rsp">Broadband</h5>
                </div>


                <div class="container-main col-3 text-center" onClick="window.location='/products/phone-and-voip'">
                  <img class="i-center i-icon-black" src="/assets/img/icons/icons8-voip-100.png">
                  <hr class="e-hr">
                  <h5 class="h-rsp">Phone and VoIP</h5>
                </div>


                <div class="container-main col-3 text-center" onClick="window.location='/products/digital-payments'">
                  <img class="i-center i-icon-black" src="/assets/img/icons/icons8-pos-terminal-100.png">
                  <hr class="e-hr">
                  <h5 class="h-rsp">Digital Payments</h5>
                </div>

                <div class="container-main col-3 text-center" onClick="window.location='/products/mobile-phones'">
                  <img class="i-center i-icon-black" src="/assets/img/icons/icons8-windows-mobile-sim-via100.png">
                  <hr class="e-hr">
                  <h5 class="h-rsp">Mobile Phones</h5>
                </div>

          </div>
        </div>
      </div>



  <div class="container-fluid">



    <div class="promo-row ">
      <div class="b-div bg-primary-via">
        <h3 class="headline">The future of business phone lines</h3>
          <h4 class="sub-headline">VoIP</h4>


        <div class="subtitle shl text-light">By 2025, UK business phone lines will be going digital as the old networks are shut down. That may seem a long way off, but there are plenty of reasons to make the switch now and replace your current phone line with an alternative smart, feature-rich VoIP solution.
            Follow the link below to find out what the 2025 'Switch Off' really means for your business.

            <div class="e-divider"></div>
          <a class="btn btn-outline-primary-via w100" href="{{ route('products/phone-and-voip') }}">
              Read more >
          </a>
        </div>
      </div>
    </div>


    <div class="e-divider-md"></div>



    <div class="row mb-2 promo-row">

        <div class="col-md-6 solo-quad">
          <div class="b-div-half bg-primary-via">
            <h3 class="headline">We keep your business on the line</h3>
              <h4 class="sub-headline">Mobile</h4>
              <div class="e-divider-md"></div>
            <div class="shl text-light">Flexible, affordable Mobile Phones, SIM card & plans for businesses.


                <hr><div class="e-divider-md"></div>
                <a class="btn btn-outline-light w100-h" href="{{ route('products/mobile-phones') }}">
                    View services >
                </a>
            </div>
          </div>
        </div>





        <div class="col-md-6 solo-quad">
          <div class="b-div-half-2 bg-primary-via">
            <h3 class="headline">The easiest way of payments</h3>
              <h4 class="sub-headline">POS Terminals</h4>
              <div class="e-divider-md"></div>
            <div class="shl text-light">
              Flexible payment solutions for small businesses. Card machines & online payments.

                <hr>
                <div class="e-divider-md"></div>
                <a class="btn btn-outline-light w100-h" href="{{ route('products/digital-payments') }}">
                    View services >
                </a>
            </div>
          </div>
        </div>


    </div>



    <div class="promo-row ">
      <div class="b-div-2 bg-orange-via">
        <h3 class="headline h-right shr">Business Broadband & Fibre</h3>

            <div class="e-divider-md"></div>


        <div class="subtitle-right shr text-light">

          Business Broadband deals tailored for Small Business
          Small businesses are bouncing back and our Business Broadband deals offer savings when you need them most - all with famously fast 5-star service.



            <div class="e-divider"></div>
          <a class="btn btn-outline-green w100 al-right" style="color: #fff;" href="{{ route('products/broadband') }}">
              Request Quote >
          </a>
        </div>
      </div>
    </div>

      <div class="e-divider-md"></div>




      <div class="row justify-content-center">
        <div class="desc-target text-muted text-center">

          <h1 class="display-6 text-muted">Type of business</h1>

            <div class="e-divider"></div>
          <h5 class="display-7 text-muted">
        From national retailers to sole traders, our mission is to deliver what matters most to our 180,000+
        business and public sector customers, and 800+
        Partners, through reliable, easy-to-use, innovative, great value connectivity solutions.
        Discover the right products and information for your business.

        Work on the go, never miss a customer call and keep your private calls and life apart.
        </h5>
        </div>

          <div class="e-divider"></div>

        <div class="col-sm-12 col-md-3 col-xl-3 text-center">


            <i class="bi bi-house" style="font-size: 3rem; color: rgba(245, 107, 90, 0.7);"></i>
            <h5 class="h1-top text-muted">Freelancer</h5>
            <hr class="e-static-hr">
            <div class="desc-target text-muted">
            Work on the go, never miss a customer call and keep your private calls and life apart.
          </div>

      </div>



      <div class="col-sm-12 col-md-3 col-xl-3 text-center">



          <i class="bi bi-shop" style="font-size: 3rem; color: rgba(245, 107, 90, 0.7);"></i>
          <h5 class="h1-top text-muted">Startup Business</h5>
          <hr class="e-static-hr">
          <div class="desc-target text-muted">
          Achieve big-league presence for with call menus, hold music, auto attendant all setup in minutes.
        </div>


      </div>

      <div class="col-sm-12 col-md-3 col-xl-3 text-center">



          <i class="bi bi-building" style="font-size: 3rem; color: rgba(245, 107, 90, 0.7);"></i>
          <h5 class="h1-top text-muted">Growing Business</h5>
          <hr class="e-static-hr">
          <div class="desc-target text-muted">
          Add users, teams, chat, video/call conferencing, call recording, CRM integration as you scale up.
        </div>
      </div>


      </div>
  </div>



      <div class="e-divider-md"></div>

          @include('layouts.review')

      <div class="container-fluid bg-primary-dark text-light px-4 py-3 text-center contact-us">
          <div class="py-3">
            <h1 class="display-6 fw-bold text-white">Need advice?</h1>
            <div class="col-lg-6 mx-auto">
              <p class="fs-5 mb-4">Contact us to request a quote or request advice for your demands.</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-outline-light btn-lg px-4">Chat with us</button>
              </div>
            </div>
          </div>
        </div>




</x-app-layout>
