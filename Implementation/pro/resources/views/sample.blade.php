<form method="POST" action="{{ url('sample') }}">
	@csrf
<input type="text" name="name" placeholder="Enter your naem">
<input type="text" name="education" placeholder="Enter education">
<input type="text" name="age" placeholder="Enter age">
<input type="submit" name="Register" value="register" class="form-submit" />
</form>