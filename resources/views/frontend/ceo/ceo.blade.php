@extends("frontend.main.layout")
@section("content")

<section id="inn-banner-slider" class="banner-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('frontend/images/inn-banner.jpg')}}');">
		  <canvas id="canvas"></canvas>
            <div class="carousel-caption inn-cus-cap">
			  <h1>CEO Desk</h1>
		 <ul class="breadcrumb">
  <li><a href="{{ route('home') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
  <li>CEO Desk</li>
</ul> 
            </div>
          </div> 
		  

        </div>

      </div>
    </section>
    <!-- Page Content -->

	
	<section id="welcome-section">
	<div class="container">
	    <div class="row">
		<div class="col-lg-5">
		<img src="{{asset('frontend/images/abt-img.jpg')}}" class="img-fluid">
		 </div>
        <div class="col-lg-7">
		<p>“As we build an equitable world for our future generations, we consistently hone our focus towards Sustainability." We have created this Company on the four pillars of “Hard Work, Integrity, Adaptability and Excellence”.</p>
		<p>Our relentless pursuit is to cultivate expertise across diverse engineering disciplines, positioning ourselves as global contenders in urgently delivering sustainable infrastructure solutions to the developing world. By doing so, we actively contribute to the overall economic progress and the well-being of humanity at large.</p>
		<p>Our overarching goal is to shape nations and the world through unparalleled infrastructure consultancy services. Our primary asset is our people, united in purpose. The pride we hold for our organization's achievements fuels our motivation. Our foundation is built upon integrity, with our compass set towards the goals of quality, safety, and excellence.</p>
		<p>What evolve constantly are our tools, innovations, and sustainability initiatives. Through the addition of fresh talent, strategic partnerships, and new client relationships, growth remains an on-going journey. The current revolution within our industry kindles our innovative spirit, as we continue to pioneer competitive solutions for our clients.</p>
		<p>In light of the unpredictability witnessed in recent years, we've harnessed new strategies and approaches, revamping resource utilization. This invaluable experience has equipped us to guide our clients and our company through challenging times by reassigning our resources for long-term success.</p>
		
		

        </div>
		<div class="col-lg-12">
		<p>Moving forward, we discern promising signs of economic recovery and increased global opportunities. Our commitment at FROLIC SERVICES unwavering, always striving to deliver optimal outcomes for our clients. This includes addressing their sustainability concerns and challenges. Our dedication to delivering quality and cost-effective professional services, our unwavering focus on efficiency, and our unyielding commitment to offering superior value to our clients remains constant, regardless of market conditions.</p>
		</div>
      </div>
	  
	   <div class="row">
		<div class="col-lg-6">
		<div class="innabt-box">
		<h2>Mission</h2>
		<p>FROLIC SERVICES is committed to providing quality professional engineering services to enhance the communities where our clients live and work. Our approach combines exceptional design, innovative solutions, and proven performance.</p>
		</div>
		</div>
		<div class="col-lg-6">
		<div class="innabt-box">
		<h2>Vision</h2>
		<p>Our vision is to evolve from a firm that is internally service focused to one that is externally market focused, while increasing the customer base in the southeast and being our clients’ first choice for engineering services. We will honor our company values and maintain the financial health and stability for our company.</p>
		</div>
		</div>
		
		<div class="col-lg-12 mt-4">
		<div class="innabt-box">
		<h2>Values</h2>
		<p><b>Clients : </b>Our goal is to develop enduring business relationships that are built on trust, integrity, effective communication, and delivering quality services on time and within budget.</p>
		<p><b>Employees : </b>Our employees are the fabric of our company. They determine our reputation, capability, and ultimately, our success. We provide a work environment that encourages self-improvement, teamwork, and innovation.</p>
		<p><b>Quality of Work : </b>Our reputation is built on a tradition of providing services with a high level of technical competence and attention to detail. We continually train and educate our staff to provide quality work.</p>
		</div>
		</div>
		
		
	  </div>
	</section>
@endsection