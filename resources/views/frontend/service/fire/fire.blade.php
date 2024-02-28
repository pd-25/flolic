@extends("frontend.main.layout")
@section("content")


<section id="inn-banner-slider" class="banner-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('frontend/images/inn-banner.jpg')}}');">
		  <canvas id="canvas"></canvas>
            <div class="carousel-caption inn-cus-cap">
			  <h1>Fire System Design</h1>
		 <ul class="breadcrumb">
  <li><a href="{{ route('home') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
  <li>Fire System Design</li>
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
		<p>Fire system designing is a critical aspect of ensuring the safety of buildings and occupants by implementing effective measures for fire detection, suppression, and evacuation. This specialized field involves planning and integrating various components to create a comprehensive fire protection system. Here's a concise overview of fire system design:</p>
		<p><b>1. Fire Detection Systems: </b>Fire system designers begin by implementing reliable fire detection systems. This involves strategically placing smoke detectors, heat sensors, and other devices to quickly identify the presence of a fire. Early detection is crucial for timely response and evacuation.</p>
		<p><b>2. Alarm and Notification Systems: </b>Integrating alarm and notification systems is essential for alerting occupants in the event of a fire. Designers plan the placement of alarms, horns, and strobe lights to ensure that occupants receive immediate and clear signals to evacuate the premises.</p>
		

        </div>
		<div class="col-lg-5">
		<img src="{{asset('frontend/images/fire-inn-pic.jpg')}}" class="img-fluid">
		 </div>
		 
		 <div class="col-lg-12">
		<p><b>3. Suppression Systems: </b>Fire suppression systems, such as sprinklers and gas-based systems, are strategically designed to control or extinguish fires. Designers consider the type of occupancy, fire risks, and the layout of the building to determine the most effective suppression methods.</p>
		<p><b>4. Emergency Lighting: </b>In the event of a fire, visibility can be severely compromised. Fire system designers incorporate emergency lighting systems to illuminate escape routes, exits, and essential areas, ensuring that occupants can navigate safely during an evacuation.</p>
		<p><b>5. Evacuation Planning: </b>Designers create evacuation plans that outline clear escape routes, assembly points, and emergency procedures. These plans are crucial for guiding occupants to safety and preventing panic during a fire emergency.</p>
		<p><b>6. Fire-Resistant Materials and Construction: </b>Incorporating fire-resistant materials and construction techniques is a proactive measure in fire system design. This includes selecting materials that resist combustion and designing structures to contain or slow down the spread of fire.</p>
		<p><b>7. Integration with Building Management Systems: </b>Fire systems are often integrated with building management systems to enhance efficiency and coordination. This integration allows for real-time monitoring, remote control of systems, and automated responses based on detected fire incidents.</p>
		
		 </div>
      </div>
	  </div>
	</section>
@endsection