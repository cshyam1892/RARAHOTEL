@extends ('layout')
@section ('title')
Contact - The RARA Hotel
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.3495746622953!2d87.27425931503507!3d26.444458483331456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744c7a1f0b81%3A0xfadac53e5e1e249e!2sHotel%20Eastern%20Star!5e0!3m2!1sen!2snp!4v1577873133697!5m2!1sen!2snp" width="1500" height="650" frameborder="0" style="border:0;" allow="fullscreen"></iframe>
<div id="con-area">
<p>
Address<br>
Random Tole, Random Area, Morang-20<br>
Email: rarahotel@gmail.com<br>
Tel: +977 9676290680, +977 9614824133 +977 423343
</p>
</div>
<br>
<b id="one">Get In Touch</b>
<div id="con-area1">
<h1 class="heading has-text-weight-bold is-size-4">Message</h1>
<form method="POST" action="contact">
@csrf
<ul class="form-style-1">
<li><label>Full Name <span class="required">*</span></label><input type="text" name="first" class="field-divided" placeholder="First" /> <input type="text" name="last" class="field-divided" placeholder="Last" /></li>
<li>
<label>Email <span class="required">*</span></label>
<input type="email" name="email" class="field-long" />
</li>
<li>
<label>Your Message <span class="required">*</span></label>
<textarea name="message" id="field5" class="field-long field-textarea"></textarea>
</li>
<li>
<input type="submit" value="Submit"/>
</li>
</ul>
<div class="flash-message">
@if ( Session::has( 'success' ))
{{ Session::get( 'success' ) }}
@elseif ( Session::has( 'warning' ))
{{ Session::get( 'warning' ) }} <!-- here to 'withWarning()' -->
@endif
</div>
</div>
</form>
</div>
</div>
</div>
@endsection
