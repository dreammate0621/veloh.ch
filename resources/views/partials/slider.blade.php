<div class="bike-slider-container" ng-controller="sliderController" ng-init="init()">
	<slick class="slider" settings="slickConfig" ng-if="slickConfigLoaded" dots="true">
    <div ng-repeat="slider in sliderImages track by $index">
        <img ng-src="{{asset('assets/img/slider/[[slider]]')}}" />
    </div>
	</slick>
	<div class="slider-description">
		<p>Oder...Hunderte radikal reduzierte Neuvelos - ein Klick von hier!</p>
	</div>
</div>