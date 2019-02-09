@extends('layouts')
@section('content')
<form class="form-horizontal" method="POST" action="insert-contact">
	@csrf
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="focusedInput"> Full Name</label>
			<div class="controls">
				<input class="input-xlarge focused" id="focusedInput" type="text"  name="name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="focusedInput">Email Address</label>
			<div class="controls">
				<input class="input-xlarge focused" id="focusedInput" type="text"  name="email">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="focusedInput">Mobile Number</label>
			<div class="controls">
				<input class="input-xlarge focused" id="focusedInput" type="text"  name="phone">
			</div>
		</div>

		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Add Contact</button>
			
		</div>
	</fieldset>
</form>

@endsection