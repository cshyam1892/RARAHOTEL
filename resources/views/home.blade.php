@extends ('layout')
@section ('title')
The RARA Hotel
@endsection
@section ('content')
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">The Rara Hotel</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ Request::path() == '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{ Request::path() == 'about' ? 'current_page_item' : ''}}"><a href="about" accesskey="2" title="">About Us</a></li>
				<li class="{{ Request::path() == 'reservation' ? 'current_page_item' : ''}}"><a href="reservation" accesskey="3" title="">Reservation</a></li>
				<li class="{{ Request::path() == 'contact' ? 'current_page_item' : ''}}"><a href="contact" accesskey="4" title="">Contact</a></li>
			</ul>
		</div>
	</div>
	<div id="header-featured">
		<div id="banner-wrapper">
			<div id="banner" class="container">
				<h2>Find the luxurious feeling</h2>
				<p>The <strong>Legendary</strong> Hotel of Nepal renowned for starting Adventure Tourism in the country. The RARA Hotel prides on being affordable to all budgets, from those looking to treat themselves to total comfort in elegantly modern suites, to volunteers and scholars who take the famous no-frills rooms. Whether you're returning from the mountains or arriving from the airport, come and relax at the courtyard restaurant, order a cup of coffee and escape for a moment in the historic surroundings of Biratnagar's most loved guesthouse. </p>
				<a href="reservation" class="button">Book Now</a> </div>
		</div>
	</div>
</div>
@endsection
