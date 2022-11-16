// Denmark
$(function(){
	$('#mapDenmark').vectorMap({
		map: 'dk_mill',
		zoomOnScroll: false,
		regionStyle:{
			initial: {
				fill: '#17995e',
			},
			hover: {
				"fill-opacity": 0.8
			},
			selected: {
				fill: '#405189'
			},
		},
		backgroundColor: 'transparent',
	});
});
