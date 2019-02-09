@extends('layouts')
@section('content')
<form class="form-horizontal" method="POST" action="{{url('update-contact/'.$info->id)}}">
	@csrf
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="focusedInput"> Full Name</label>
			<div class="controls">
				<input class="input-xlarge focused" type="text" value="{{$info->name}}"  name="name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="focusedInput">Email Address</label>
			<div class="controls">
				<input class="input-xlarge focused" value="{{$info->email}}" type="text"  name="email">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="focusedInput">Mobile Number</label>
			<div class="controls">
				<input class="input-xlarge focused" value="{{$info->phone}}" type="text"  name="phone">
			</div>
		</div>

		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Edit Contact</button>
			
		</div>
	</fieldset>
</form>

@endsection