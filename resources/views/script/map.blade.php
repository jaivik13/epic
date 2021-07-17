	<!-- Map -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="{{ asset('assets/js/markerclusterer.js') }}"></script>
	<script src="{{ asset('assets/js/listing_map.js') }}"></script>
	<script src="{{ asset('assets/js/infobox.js') }}"></script> 


	<script> 
	$(document).ready(function () {
	
    $.ajax({
        url: "https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search?resource_id=fb42db12-7c82-40bb-8d3c-4f6119540edc&limit=25",
        dataType: "jsonp",
        success: function (data) {
            console.log(data);
        },
    });
});
		
	</script>