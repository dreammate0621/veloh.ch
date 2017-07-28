@extends('layouts.default')

@section('banner_content')

<div class="banner-wrapper">
	<img class="banner-image" src="{{asset('assets/img/banner-home.jpg')}}" alt="Home Banner" />
	<h1 class="banner-title">
		Genial. Alle Velobörsen!
		<p>der Schweiz auf einer Seite</p>
	</h1>

	<div class="banner-meta-wrapper">
		<div class="banner-social">
			<a class="banner-social-icon icon-facebook" href="https://www.facebook.com"></a>
			<a class="banner-social-icon icon-twitter" href="https://www.twitter.com"></a>
			<a class="banner-social-icon icon-google-plus" href="https://plus.google.com"></a>
			<a class="banner-social-icon icon-linkedin" href="https://www.instagram.com"></a>
			<a class="banner-social-icon icon-pinterest" href="https://www.pinterest.com"></a>
		</div>
		<div class="banner-newsletter">
			<form action="" method="POST">
				<input type="text" name="newsletter_email" placeholder="Velobörsen per E-mail" />
				<input type="submit" name="newsletter_submit" value="Go!" />
			</form>
		</div>
	</div>
</div>

@endsection

@section('main_content')
<div class="main-content-wrapper" ng-controller="pageController" ng-init="init()">
	<div class="box-row odd">
		<div class="box-item">
			<h1 class="item-title item-blue">
				Der Schweizer Velobörsenkalender
				<br/>
				<br/>
				die nächste Börse
			</h1>
		</div>
		<div class="box-item">
			<img class="item-img" src="{{asset('assets/img/Velo-auswaehlen.jpg')}}" alt="Box Image" />
		</div>
		<div class="box-item">
			<h2 class="item-title item-green">
				Wie funktioniert
				<br/>
				eine Velobörse?
				<br/>
				<br/>
				Velos kaufen
				<br/>
				und verkaufen!
			</h2>
		</div>
	</div>

	<div class="box-row odd">
		<div class="box-item">
			<img class="item-img" src="{{asset('assets/img/velosophie.jpg')}}" alt="Box Image" />
		</div>
		<div class="box-item">
			<p class="item-desc">
				Velobörsen erfreuen sich in der Schweiz grosser Beliebtheit, und dies zu Recht: Das hochkonzentrierte Recycling des umweltfreundlichsten Verkehrsmittels macht Spass und bringt Angebot und Nachfrage im Bereich gebrauchter Velos in geradezu genialer und super-effizienter Weise zusammen. Nicht selten finden an den grösseren Velobörsen innert weniger Stunden 1000 und noch mehr Bikes neue Besitzer!
				<br/>
				<br/>
				<strong>
				Das Börsenkonzept ist überaus einfach: Fahrrad registrieren, auf den Platz stellen und am Abend das Geld abholen. Der Rest klappt ganz von selbst, mit hohem Erfolg. Und Interessenten finden eine riesige Auswahl an Bikes zur unkomplizierten Testfahrt vor
				</strong>
				<br/>
				<br/>
				Diese Website bringt Ihnen die Velobörsen der Schweiz näher - <a title="Velomarkt Zürich" href="veloboerse-zuerich.html" target="_self">Zürich</a>, <a title="Velomarkt Basel" href="veloboerse-basel.html" target="_self">Basel</a>, <a title="Velomarkt Bern" href="veloboerse-bern.html" target="_self">Bern</a>, <a title="Velomarkt Luzern" href="veloboerse-luzern.html" target="_self">Luzern</a>, <a title="Velomarkt Winterthur" href="veloboerse-winterthur.html" target="_self">Winterthur</a> und kleinere Orte. <a title="Daten alle Velobörsen" href="veloboerse-datum.html" target="_self">Wann, wo</a> findet der nächste Fahrradmarkt statt? Wie läuft der <a title="Velo verkaufen" href="Fahrrad-kaufen-verkaufen.html" target="_self">Verkauf</a> eines Bikes ab, wie der <a title="Bike kaufen" href="Fahrrad-kaufen-verkaufen.html" target="_self">Fahrradkauf</a>? Was ist zu beachten beim Kauf eines Secondhand-Bikes? Veranstalter können ihre Velobörsen <a title="Fahrradbörse gratis eintragen" href="Veloboerse-eintragen.html" target="_self">gratis eintragen</a> und mit dem Newsletter geht keine Börse mehr vergessen!
				</strong>
			</p>
		</div>
		<div class="box-item">
			<img class="item-img" src="{{asset('assets/img/kindervelo-kaufen.jpg')}}" alt="Box Image" />
		</div>
	</div>

	<div class="box-row odd">
		<div class="box-item">
			<h2 class="item-title item-green">
				Occasionsvelos
				<br/>
				<br/>
				Was ist zu
				<br/>
				beachten beim
				<br/>
				Kauf?
			</h2>
		</div>
		<div class="box-item">
			<img class="item-img" src="{{asset('assets/img/Quittung-veloboerse.jpg')}}" alt="Box Image" />
		</div>
		<div class="box-item">
			<h1 class="item-title item-blue">
				Veranstalter:
				<br/>
				<br/>
				Ihre Velobörse
				<br/>
				gratis eintragen
				<br/>
				Topplatz bei Google!
			</h1>
		</div>
	</div>

	@include('partials.jigjaw')
	@include('partials.slider')

	
</div>

@endsection

