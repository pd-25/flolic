@extends("frontend.main.layout")
@section("content")
<div class="inner-banner">
        <div class="banner-caption">
          <h1 data-aos="fade-up" data-aos-duration="3000">About Us</h1>
        </div>
     <img src="{{asset('frontend/images/about-banner.jpg')}}">
     </div>
     
     <div class="after-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="about-us-text" data-aos="fade-left" data-aos-duration="3000">
            <span>Explore the world with us, one adventure at a time.</span>
            <h1>The perfect   vacation   come true with Us</h1>
            <p>We are a team of experienced travel experts who specialize in planning and organizing unforgettable travel experiences for our clients with a wide range of travel services, including flight bookings, hotel reservations and more.</p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="inner-about-image" data-aos="fade-right" data-aos-duration="2000">
              <img src="{{asset('frontend/images/about-right.jpg')}}">
            </div>
          </div>
        </div>
      </div>
     </div>

      
      
      
      <section class="testimonials-sec" data-aos="fade-up" data-aos-duration="1000">
         <div class="sec-header">
            <h1>What Our <span class="text-color">Clients Says</span></h1>
         </div>
         <div class="container">
            <div class="row">
               <div class="testimonials-box">
                  <div id="Testimonials" class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="feedback">
                           <img src="{{asset('frontend/images/comma.png')}}" class="comma">
                           <p>
                              Curabitur velit arcu, pellenteue quis varius at, porta eget ex. Nulla phtra semper tortor, ornare tincidunt est fcibus at. Pellentesque arcu justo, finibus non volutpat a, maximus ut tellus. Duisis nec libero ultricies tincidunt ut a risus fusce ut convallis lectus. 
                           </p>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="feedback-profile">
                                    <img src="{{asset('frontend/images/profile.jpg')}}">
                                 </div>
                              </div>
                              <div class="col-md-8">
                                 <div class="profile-details">
                                    <strong>Ankita Gupta</strong>
                                    <ul>
                                       <li><i class="fa-solid fa-star"></i></li>
                                       <li><i class="fa-solid fa-star"></i></li>
                                       <li><i class="fa-solid fa-star"></i></li>
                                       <li><i class="fa-solid fa-star"></i></li>
                                       <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <small>Solo Traveler</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection