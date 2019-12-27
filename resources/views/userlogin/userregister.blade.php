@extends('layouts.app')

@section('content')

<div class="card offset-md-3 col-md-6">
	<div class="card-header bg-white">
		<h5>User Register Form</h5>
	</div>

	<div class="card-body">
		<div class="form-group">
			<form action="{{route('userregister.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Email</label>
					<input type="email" name="email" id="name" class="form-control">
				</div>

				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" name="phone" id="phone" class="form-control">
				</div>

				<div class="form-group">
					<label for="dob">DOB</label>
					<input type="date" name="dob" id="dob" class="form-control">
				</div>

				<div class="form-group">
					<label for="gender">Gender</label>
					
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1" checked>
						<label class="form-check-label" for="gridRadios1">
							Male
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="0">
						<label class="form-check-label" for="gridRadios2">
							Female
						</label>
					</div>
				</div>

				<div class="form-group">
					<label for="photo">Photo</label>
					<input type="file" name="photo" id="photo">
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<textarea rows="3" id="address" name="address" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<label for="cpassword">Confirm Password</label>
					<input type="password" name="cpassword" class="form-control">
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Register</button>
				</div>
	</form>
</div>
	</div>
</div>


@endsection