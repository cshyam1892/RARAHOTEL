@extends ('layout')
@section ('title')
About Us - The RARA Hotel
@endsection
@section ('content')
<div id="header-wrapper1">
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
<h2>About Us</h2>
<p>
<strong>
RARA Hotel, has a distinctively  sleek  contemporary architectural design contrasting with the rich essence of Biratnagar. The hotel is four star categorized boutique designed luxury  hotel that has the efficiency to cater full satisfaction to their guests.<br>
Featuring  50 spacious rooms &amp; suits inside this hotel located at heart of  Biratnagar provides business and leisure travellers with the perfect home base from which to explore “Industrial and Business city” and beyond.<br>
The hotel is established  with a vision to be the preferred group of hotels for the discerning global traveller. The hotel  Harrison Palace is in the hospitality business to provide superior service. Hotel Harrison Palace is committed to offer quality accommodation and services to our guests. We strive to achieve Excellence in Service and Standards.<br>
The luxurious fine vegetarian multi cuisine restaurant, the internationally acclaimed bar <strong>&#8220;MEHFIL &#8220;,</strong> Fitness center, Club lounge and tastefully appointed meeting spaces and lavish spa and ultramodern massage chairs offering comprehensive wellness treatments ensure that this luxury hotel exceeds your expectations, whatever your needs may be. </span></strong>
</p>
</div>
</div>
</div>
</div>
@endsection
