@extends("frontend.main.layout")
@section("content")
<div class="inner-banner">
         <div class="banner-caption">
            <h1>Contact Us</h1>
         </div>
         <img src="{{asset('frontend/images/contact-us.png')}}">
      </div>
      <div class="container contact-information">
         <div class="row">
            <div class="col-md-5">
               <div class="single-contact mb-40" data-aos="fade-left" data-aos-duration="1000">
                  <div class="title">
                     <h6>Phone</h6>
                  </div>
                  <div class="icon">
                     <i class="fa-solid fa-phone-volume"></i>
                  </div>
                  <div class="content">
                     <h6><a href="tel:">+990-737 621 432</a></h6>
                     <h6><a href="tel:">+990-737 621 432</a></h6>
                  </div>
               </div>
               <div class="single-contact mb-40" data-aos="fade-left" data-aos-duration="2000">
                  <div class="title">
                     <h6>Email Now</h6>
                  </div>
                  <div class="icon">
                     <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="content">
                     <h6><a href="tel:">info@example.com2</a></h6>
                     <h6><a href="tel:">example@example.com</a></h6>
                  </div>
               </div>
               <div class="single-contact mb-40" data-aos="fade-left" data-aos-duration="3000">
                  <div class="title">
                     <h6>Location</h6>
                  </div>
                  <div class="icon">
                     <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="content">
                     <h6><a href="tel:">168/170, Avenue 01, Old York Drive Rich Mirpur DOHS, Bangladesh</a></h6>
                  </div>
               </div>
            </div>
            <div class="col-md-7">
               <div class="contact-form-panel" data-aos="fade-right" data-aos-duration="3000">
                  <h2>Reach Us Anytime</h2>
                  <form>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-inner">
                              <label>Name*</label>
                              <input type="text" name=" placeholder="Daniel Scoot">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-inner">
                              <label>Phone</label>
                              <input type="text" placeholder="Phone Number...">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-inner">
                              <label>Email</label>
                              <input type="email" placeholder="Email Us....">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-inner">
                              <label>Write Your Massage*</label>
                              <textarea placeholder="What’s on your mind"></textarea>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-inner">
                              <button class="primary-btn1 btn-hover" type="submit">
                              Submit Now
                              </button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
@endsection