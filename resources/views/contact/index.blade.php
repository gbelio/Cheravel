@extends('layouts.app')
@section('content')
<div class="container">
	<br>
	<div class="row formulario">
		<form>
			<div class="form-group">
				<h2>Contactanos</h2>
				<label for="exampleFormControlInput1">NOMBRE</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">EMAIL</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">TELÉFONO(opcional)</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">MENSAJE (opcional)</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
		</form>
	</div>
	<br>
</div>
@endsection