@extends('layout.master')
<body>
	
	<div id="page">
		
		@extends('layout.header')
	<!-- /header -->
	
	<main>
		<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-5 content-left order-md-last order-sm-last order-last">
			<div id="results_map_view">
		   <div class="container-fluid">
			   <div class="row">
				   <div class="col-10">
					   <h4><strong>145</strong> result for All listing</h4>
				   </div>
				   <div class="col-2">
					   <a href="#0" class="search_mob btn_search_mobile map_view"></a> <!-- /open search panel -->
						
				   </div>
			   </div>
			   <!-- /row -->
				<div class="search_mob_wp">
					<div class="custom-search-input-2 map_view">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="What are you looking for...">
							<i class="icon_search"></i>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Where">
							<i class="icon_pin_alt"></i>
						</div>
						<select class="wide">
							<option>All Categories</option>	
							<option>Shops</option>
							<option>Hotels</option>
							<option>Restaurants</option>
							<option>Bars</option>
							<option>Events</option>
							<option>Fitness</option>
						</select>
						<input type="submit" value="Search">
					</div>
				</div>
				<!-- /search_mobile -->
		   </div>
		   <!-- /container -->
	   </div>
	   <!-- /results -->
		
		<div class="filters_listing version_3">
			<div class="container-fluid">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
					<li><a class="btn_filt_map" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Less filters" data-text-original="More filters">More filters</a></li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
				
				<div class="collapse map_view" id="filters">
			<div class="container-fluid margin_30_5">
				<h6>Rating</h6>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<li>
								<label class="container_check">Superb 9+ <small>245</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Very Good 8+ <small>123</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<label class="container_check">Good 7+ <small>32</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Pleasant 6+ <small>12</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					</div>
					<h6>Tags</h6>
					<div class="row">
					<div class="col-md-6">
						
						<ul>
							<li>
								<label class="container_check">Wireless Internet
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Smoking Allowed
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
						<div class="col-md-6">
						
						<ul>
							
							<li>
								<label class="container_check">Wheelchair Accesible
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Parking
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					</div>
				<!-- /row -->
					<div class="row">
					<div class="col-md-12">
						<div class="add_bottom_30">
							<h6>Distance</h6>
							<div class="distance"> Radius around selected destination <span></span> km</div>
							<input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
						</div>
					</div>
					</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /Filters -->
				
				<div class="strip map_view add_top_20">
						<div class="row no-gutters">
							<div class="col-4">
								<figure>
									<a href="detail-restaurant.html"><img src="img/location_1.jpg" class="img-fluid" alt=""></a>
									<small>Bar</small>
								</figure>
							</div>
							<div class="col-8">
								<div class="wrapper">
									<a href="#0" class="wish_bt"></a>
									<h3><a href="detail-restaurant.html">Da Alfredo</a></h3>
									<small>27 Old Gloucester St</small>
									<p><a href="#0" onclick="onHtmlClick('Marker',1)" class="address">View on Map</a></p>
								</div>
								<ul>
									<li><span class="loc_open">Now Open</span></li>
									<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip map_view -->
				
					<div class="strip map_view">
							<div class="row no-gutters">
								<div class="col-4">
									<figure>
										<a href="detail-restaurant.html"><img src="img/location_2.jpg" class="img-fluid" alt=""></a>
										<small>Bar</small>
									</figure>
								</div>
								<div class="col-8">
									<div class="wrapper">
										<a href="#0" class="wish_bt"></a>
										<h3><a href="detail-restaurant.html">Limon Bar</a></h3>
										<small>438 Rush Green Road, Romford</small>
										<p><a href="#0" onclick="onHtmlClick('Marker',2)" class="address">View on Map</a></p>
									</div>
									<ul>
										<li><span class="loc_open">Now Open</span></li>
										<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /strip list_view -->
				
					<div class="strip map_view">
						<div class="row no-gutters">
							<div class="col-4">
								<figure>
									<a href="detail-shop.html"><img src="img/location_3.jpg" class="img-fluid" alt=""></a>
									<small>Shop</small>
								</figure>
							</div>
							<div class="col-8">
								<div class="wrapper">
									<a href="detail-shop.html" class="wish_bt"></a>
									<h3><a href="detail.html">Mary Boutique</a></h3>
									<small>43 Stephen Road, Bexleyheath</small>
									<p><a href="#0" onclick="onHtmlClick('Marker',3)" class="address">View on Map</a></p>
								</div>
								<ul>
									<li><span class="loc_closed">Now Closed</span></li>
									<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip list_view -->
				
					<div class="strip map_view">
						<div class="row no-gutters">
							<div class="col-4">
								<figure>
									<a href="detail.html"><img src="img/location_4.jpg" class="img-fluid" alt=""></a>
									<small>Bar</small>
								</figure>
							</div>
							<div class="col-8">
								<div class="wrapper">
									<a href="detail-restaurant.html" class="wish_bt"></a>
									<h3><a href="detail.html">Garden Bar</a></h3>
									<small>40 Beechwood Road, Sanderstead</small>
									<p><a href="detail-restaurant.html" onclick="onHtmlClick('Marker',4)" class="address">View on Map</a></p>
								</div>
								<ul>
									<li><span class="loc_closed">Now Closed</span></li>
									<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip list_view -->

					<div class="strip map_view">
						<div class="row no-gutters">
							<div class="col-4">
								<figure>
									<a href="detail-hotel.html"><img src="img/location_5.jpg" class="img-fluid" alt=""></a>
									<small>Hotel</small>
								</figure>
							</div>
							<div class="col-8">
								<div class="wrapper">
									<a href="detail-hotel.html" class="wish_bt"></a>
									<h3><a href="detail.html">Mariott Hotel</a></h3>
									<small>213 Malden Road, New Malden</small>
									<p><a href="#0" onclick="onHtmlClick('Marker',5)" class="address">View on Map</a></p>
								</div>
								<ul>
									<li><span class="loc_open">Now Open</span></li>
									<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip list_view -->
				
				<p class="text-center add_top_30"><a href="#0" class="btn_1 rounded"><strong>Load more</strong></a></p>
			</div>
			<!-- /content-left-->

			<div class="col-lg-7 map-right">
				<div id="map_right_listing"></div>
				<!-- map-->
			</div>
			<!-- /map-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->
	</main>
	<!--/main-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
	@extends('script.common')
	<!-- Map -->
	@extends('script.map')
  
</body>
</html>