<!DOCTYPE html>
<html>
	<head>
		<title>Formulir Pendaftaran</title>
	</head>
	<body>
		<h1>Buat Account Baru!</h1>
		<h2>Sign Up Form</h2>
		<form action="{{route('register')}}" method = "POST"> @csrf
			<label for="first_name">First name:</label> <br><br>
			<input type="text" name="first_name"> <br>
			<br>
			<label for="last_name">Last name:</label> <br><br>
			<input type="text" name="last_name"> <br>
			<br>
			<label for="gender">Gender:</label> <br><br>
			<input type="radio" name="gender" values="0"> Male <br>
			<input type="radio" name="gender" values="1"> Female <br>
			<input type="radio" name="gender" values="2"> Other	<br>
			<br>
			<label>Nationality:</label><br><br>
			<select name="kebangsaan">
				<option values="indonesia">Indonesian</option>
				<option values="malaysia">Malaysian</option>
				<option values="singapore">Singapore</option>
				<option values="vietnam">Vietnam</option>
			</select> <br>
			<br>
			<label for="language_spoken">Language Spoken:</label> <br><br>
			<input type="checkbox" name="language_spoken" values="0"> Bahasa Indonesia <br>
			<input type="checkbox" name="language_spoken" values="1"> English <br>
			<input type="checkbox" name="language_spoken" values="2"> Other <br>
			<br>
			<label for="biografi">Bio:</label> <br><br>
			<textarea name="bio" cols="50" rows="10" ></textarea> 
			<br>
			<input type="submit" values="Sign Up">
		</form>
	</body>
</html>