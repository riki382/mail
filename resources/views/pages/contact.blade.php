<!DOCTYPE html>
<html>
<head>
	<title>Mail Testing</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr>
				<form method="post" action="{{ url('/') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label name="email">Email: </label>
						<input id="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label name="subject">Subject: </label>
						<input id="subject" name="subject" class="form-control">
					</div>

					<div class="form-group">
						<label name="message">Message: </label>
						<textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
					</div>

					<input type="submit" value="Send Message" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
</body>
</html>