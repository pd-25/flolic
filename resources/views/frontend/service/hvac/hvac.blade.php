@extends("frontend.main.layout")
@section("content")


<section id="inn-banner-slider" class="banner-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('frontend/images/inn-banner.jpg')}}');">
		  <canvas id="canvas"></canvas>
            <div class="carousel-caption inn-cus-cap">
			  <h1>HVAC Design</h1>
		 <ul class="breadcrumb">
  <li><a href="{{ route('home') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
  <li>HVAC Design</li>
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
		<p>HVAC (Heating, Ventilation, and Air Conditioning) design is an important aspect of creating indoor environments that are comfortable, healthy, and energy-efficient. It involves the systematic planning, engineering, and implementation of systems that control the temperature, humidity, and air quality within various spaces. Here's a brief overview of HVAC design:</p>
		<p><b>1. Load Calculation: </b>HVAC designers start by performing thorough load calculations to determine the heating and cooling requirements of a space. This involves considering factors such as the size of the area, insulation, number of occupants, and the climate of the region.</p>
		<p><b>2. System Selection: </b>Based on load calculations, designers select the most suitable HVAC systems. This may include furnaces, boilers, air conditioners, heat pumps, and ventilation systems. The choice depends on the specific heating and cooling needs of the space.</p>
		<p><b>3. Ductwork Design: </b>Designers carefully plan the layout of ductwork systems to distribute conditioned air effectively. Proper duct design ensures balanced airflow, minimizes energy losses, and contributes to the overall efficiency of the HVAC system.</p>	
        </div>
		<div class="col-lg-5">
		<img src="{{asset('frontend/images/hvac-inn-pic.jpg')}}" class="img-fluid">
		 </div>
		 <div class="col-lg-12">		
		<p><b>4. Ventilation: </b>Adequate ventilation is essential for maintaining indoor air quality. HVAC designers incorporate ventilation systems that introduce fresh outdoor air, filter out pollutants, and regulate the exchange of air to create a healthier indoor environment.</p>
		<p><b>5. Zoning Strategies: </b>HVAC designers may implement zoning strategies to enhance energy efficiency. This involves dividing a space into zones with independent temperature controls, allowing for targeted heating and cooling based on occupancy and usage patterns.</p>
		<p><b>6. Energy Efficiency Measures: </b>Designers prioritize energy efficiency by incorporating technologies such as programmable thermostats, energy recovery systems, and high-efficiency HVAC equipment. </p>
		<p><b>7. Environmental Considerations: </b>With a growing focus on sustainability, HVAC designers may integrate environmentally friendly practices. This can include the use of eco-friendly refrigerants, energy-efficient equipment, and the incorporation of renewable energy sources.</p>
		<p><b>8. Compliance with Standards: </b>HVAC designs must adhere to industry standards and codes. Designers ensure that their plans comply with regulations to guarantee the safety, performance, and environmental sustainability of the HVAC systems.</p>	
		</div>		
      </div>
	  </div>
	</section>
@endsection