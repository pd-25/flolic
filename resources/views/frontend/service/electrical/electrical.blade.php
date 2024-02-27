@extends("frontend.main.layout")
@section("content")

<section id="inn-banner-slider" class="banner-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('frontend/images/inn-banner.jpg')}}');">
		  <canvas id="canvas"></canvas>
            <div class="carousel-caption inn-cus-cap">
			  <h1>Electrical Design</h1>
		 <ul class="breadcrumb">
  <li><a href="index.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
  <li>Electrical Design</li>
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
		
        <div class="col-lg-7">
		<p>Electrical designing is a significant aspect of creating safe, efficient, and functional electrical systems in various applications, ranging from residential buildings to industrial facilities. This discipline involves the careful planning, layout, and integration of electrical components to ensure seamless operation and compliance with safety standards.</p>
		<p>In the world of electrical design, engineers focus on creating systems that deliver electricity reliably and efficiently. Here are key elements within the electrical design:</p>
		<p><b>1. System Planning: </b>Electrical designers start by understanding the specific requirements of a project. This includes determining the power needs, load distribution, and the overall scope of the electrical system.</p>
		<p><b>2. Circuit Design: </b>Creating circuits that efficiently deliver electricity from the power source to the intended endpoints is fundamental. This involves selecting appropriate conductors, switches, and protective devices while considering voltage drop and electrical load balancing.</p>
		
        </div>
		<div class="col-lg-5">
		<img src="images/ed-inn-img.jpg" class="img-fluid">
		 </div>
		 <div class="col-lg-12">
		 <p><b>3. Component Selection: </b>Electrical designers carefully choose components such as transformers, circuit breakers, and switches based on the system's requirements. The selection process ensures compatibility, reliability, and compliance with safety regulations.</p>
		 <p><b>4. Safety Considerations: </b>Safety is very important in electrical design. Engineers incorporate safety measures, such as grounding, insulation, and protective devices, to mitigate the risk of electrical hazards and ensure the well-being of users.</p>
		<p><b>5. Energy Efficiency: </b>Designers aim to optimize energy use by incorporating energy-efficient components and considering factors like lighting design, motor efficiency, and power factor correction. This not only reduces environmental impact but also contributes to cost savings.</p>
		<p><b>6. Integration of Renewable Energy: </b>With a growing emphasis on sustainability, electrical designers may incorporate renewable energy sources like solar panels or wind turbines into their designs. Integrating these sources requires careful consideration of energy storage, conversion, and distribution.</p>
		<p><b>7. Automation and Control Systems</b>In modern electrical design, automation and control systems play an essential role. Designers implement programmable logic controllers (PLCs) and other smart technologies to enhance system control, monitoring, and efficiency.</p>
		</div>
      </div>
	  </div>
	</section>
	
	
@endsection