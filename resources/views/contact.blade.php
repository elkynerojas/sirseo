@extends('layouts.generic')
@section('content')
<section>
	<h1>Contacto</h1>
</section>
<section>
	<h2>REDSOFT DEVELOPERS</h2>
	<ul class="alt">
		<li></li>
		<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a> <br> +57 318 220 41 90</li>
		<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a> <br>atencionalcliente@redsoftdevelopers.com </li> 
		<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a><br>Carrera 1ra # 11-87 Jurado, Pamplona Colombia</li>
		<li></li>
	</ul>
</section>
<section>
	<h2>Deje su mensaje</h2>
	<form method="post" action="#">
		<div class="field half first">
			<input type="text" name="name" id="name" placeholder="Nombre" />
		</div>
		<div class="field half">
			<input type="email" name="email" id="email" placeholder="Email" />
		</div>
		<div class="field">
			<textarea name="message" id="message" placeholder="Mensaje"></textarea>
		</div>
		<ul class="actions">
			<li><input type="submit" value="Send" class="special" /></li>
		</ul>
	</form>
</section>
@endsection

