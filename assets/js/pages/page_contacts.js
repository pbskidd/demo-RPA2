var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 41.114616,
				lng: -73.414764
			  });
			  
			  var marker = map.addMarker({
				lat: 41.114616,
				lng: -73.414764,
	            title: 'Regina Pacis Academy'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
		        lat : 41.114616,
		        lng : -73.414764
		      });
		    });
		}        

    };
}();