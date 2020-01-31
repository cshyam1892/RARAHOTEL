@extends ('layout')
@section ('title')
Reservation - The RARA Hotel
@endsection
@section ('content')
<div id="header" class="container">
<div id="logo">
<h1><a href="/">The RARA Hotel</a></h1>
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
<div id="wrapper">
<div id="page" class="container"> 
<h1>Secure Online Reservation</h1>
<p>
With our assurance of the best available rates and using our secure online reservation system, you can book the room of your choice directly and instantly. So, start by a quick check for availability below.<br>
And should you face any issues or need more assistance, you can always <a target="_blank" class="click" href="contact#con-area1">contact us.</a>
</p>
</div>
</div>
@endsection
