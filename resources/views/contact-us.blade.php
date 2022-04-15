<x-app-layout>
 <br>
  <div class="container-fluid" >

+php js

<div class="row justify-content-md-center">
  <div class="col-md-8 text-center">
      <div class="jumbotron">
        <h1 class="display-4">We are here!</h1>
        <p class="lead">Do you have any questions? Please do not hesitate to contact us directly. <br> Our team will come back to you as soon as possible to help you</p>

        <br>
        <button type="button" class="btn btn-outline-primary">Live chat</button>
      </div>
    </div>
</div>




      <section class="mb-4">
          <h1 class="display-4 font-weight-normal text-center my-4">Contact us </h1>

          <div class="row">


            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Halifax House 93-101 Bridge Street <br>  M3 2GX, Manchester, UK</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+44 (pn)</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>hello@viatelecoms.co.uk</p>
                    </li>
                </ul>
            </div>


              <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">




                      <div class="row">

                          <div class="col-md-6">
                              <div class="md-form mb-0">
                              <label for="name" class="">Your name</label>
                                  <input type="text" id="name" name="name" class="form-control">
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="md-form mb-0">
                              <label for="email" class="">Your email</label>
                                  <input type="text" id="email" name="email" class="form-control">
                              </div>
                          </div>

                      </div>





                      <div class="row">
                          <div class="col-md-10">
                              <div class="md-form mb-0">
                              <label for="subject" class="">Subject</label>
                                  <input type="text" id="subject" name="subject" class="form-control">
                              </div>
                          </div>
                      </div>




                      <div class="row">

                          <div class="col-md-10">

                              <div class="md-form">
                              <label for="message">Your message</label>
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                              </div>

                          </div>
                      </div>

                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="updates" id="updates" value="1">
                        <label for="updates" class="form-check-label">Notify me about new updates</label>
                      </div>

                  </form>

                  <br>
                  <div class="row">
                      <div class="col-md-3">
                        <div class="text-center text-md-left">
                            <a class="btn btn-lg btn-block btn-outline-primary text-primary"  onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div>
                        <div class="status"></div>
                      </div>
                  </div>


          </div>




          </div>

      </section>

      <br>













</div>






</x-app-layout>
