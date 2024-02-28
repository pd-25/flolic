@extends("frontend.main.layout")
@section("content")

<section id="inn-banner-slider" class="banner-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{asset('frontend/images/inn-banner.jpg')}}');">
		  <canvas id="canvas"></canvas>
            <div class="carousel-caption inn-cus-cap">
			  <h1>PHE Design</h1>
		 <ul class="breadcrumb">
  <li><a href="{{ route('home') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
  <li>PHE Design</li>
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
		<p>PHE (Public Health Engineering) design is a specialized field focused on planning and implementing water supply, sanitation, and hygiene systems to safeguard public health. This branch of engineering addresses the essential infrastructure required for the safe provision of drinking water, effective sewage disposal, and hygiene promotion. Here's a concise overview of PHE design:</p>
		<p><b>1. Water Supply Systems: </b>PHE designers carefully plan water supply systems to ensure a reliable and safe water source for communities. This involves assessing water availability, designing distribution networks, and incorporating water treatment processes to meet quality standards.</p>
		<p><b>2. Sanitation Infrastructure: </b>PHE design includes the development of sanitation infrastructure to manage wastewater and sewage effectively. This encompasses the design of sewerage systems, sewage treatment plants, and disposal methods that prevent contamination of water sources and protect public health.</p>
		
        </div>
		<div class="col-lg-5">
		<img src="{{asset('frontend/images/phe-inn-pic.jpg')}}" class="img-fluid">
		 </div>
		 
		 <div class="col-lg-12">
		<p><b>3. Drainage Systems: </b>Effective drainage systems are crucial for preventing waterlogging and flooding, which can contribute to the spread of waterborne diseases. PHE designers plan drainage networks that efficiently carry stormwater away from populated areas while minimizing environmental impact.</p>
		<p><b>4. Hygiene Promotion: </b>PHE design extends beyond physical infrastructure to include hygiene promotion initiatives. Designers incorporate education and awareness programs to encourage hygienic practices, emphasizing the importance of proper sanitation, handwashing, and waste management.</p>
		<p><b>5. Water Quality Management: </b>PHE designers implement measures to maintain and improve water quality throughout the distribution system. This includes the selection of appropriate water treatment technologies, regular monitoring, and addressing potential sources of contamination.</p>
		<p><b>6. Emergency Response Planning: </b>PHE design incorporates contingency plans for emergencies, such as natural disasters or disease outbreaks. This ensures that water supply and sanitation systems remain resilient and can respond effectively to unforeseen challenges.</p>
		 </div>
      </div>
	  </div>
	</section>
@endsection