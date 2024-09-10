    <!-- contact section starts -->
    <section class="contact py-5" id="contact">
        <div class="heading text-center">
          <small>Get in Touch</small>
          <h3>Any Questions? Feel Free to Contact</h3>
        </div>
        <div class="row justify-content-evenly mt-5">
          <div class="col-md-5 col-10 contact-details" data-aos="slide-right">
            <div class="row justify-content-evenly">
              <div class="col-1">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div class="col-11">
                <p>Indonesia</p>
              </div>
            </div>
            <div class="row justify-content-evenly">
              <div class="col-1">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="col-11">
                <p>+62 8817269307</p>
              </div>
            </div>
            <div class="row justify-content-evenly">
              <div class="col-1">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="col-11">
                <p>cryxme404@gmail.com</p>
              </div>
            </div>
            <div class="row justify-content-evenly">
              <div class="col-1">
                <i class="bi bi-globe-americas"></i>
              </div>
              <div class="col-11">
                <p>cryxme.com</p>
              </div>
            </div>
          </div>

          <div class="col-md-5 col-10 mt-3 mt-md-0" data-aos="slide-left">
            @session('success')
            <div class="alert alert-success" role="alert" style="width: 80% !important">
              {{  session('success') }}
            </div>
            @endsession

            <form action="" method="POST">
              @csrf
                <div class="contact-form">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      id="exampleFormControlInput1"
                      placeholder="Name"
                      name="Name"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      id="exampleFormControlInput1"
                      placeholder="E-mail"
                      name="Email"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      id="exampleFormControlInput1"
                      placeholder="Mobile No."
                      name="Mphone"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <textarea
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      placeholder="Message"
                      rows="5"
                      name="Message"
                      required
                    ></textarea>
                  </div>
                  <button type="submit" class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
                    Send
                  </button>
                </div>
            </form>
          </div>
        </div>
      </section>
      <!-- contact section ends here -->
  
        <!-- now we will make back to top button when user click on it it will be redirected to top page  -->
      <button
        type="button"
        class="btn btn-floating btn-lg rounded-pill"
        id="btn-back-to-top"
      >
        <i class="bi bi-arrow-up"></i>
      </button>