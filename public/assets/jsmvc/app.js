var veloapp = angular.module('veloApp', ['slickCarousel'], function($interpolateProvider, $injector) {
		$interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
	}).config(['slickCarouselConfig', function (slickCarouselConfig) {
    slickCarouselConfig.dots = true;
    slickCarouselConfig.autoplay = false;
  }]);