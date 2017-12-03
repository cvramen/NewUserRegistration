<!-- The page users go to in order to provide email address, username, and password. -->
<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="jquery.validate.js"></script> <!-- Form validation included through plugin available at https://jqueryvalidation.org/ -->
</head>
<body>
<form class="cmxform" id="regiform" action="register.php" method="post">
  <fieldset>
    <legend>Please create a username, password, and provide email address.</legend>
	<table>
	<tr>
		<td><label for="n_emailaddress">E-Mail</label></td>
		<td><input name="n_emailaddress" id="cemail" type="email" required></td>
    </tr>
    <tr>
		<td><label for="n_username">Username (at least 2 characters)</label></td>
		<td><input name="n_username" id="cname" minlength="2" type="text" required></td>
    </tr>
	<tr>
		<td><label for="n_password">Password (at least 8 characters)</label></td>
		<td><input name="n_password" id="cpassword" minlength="8" type="password" required></td>
    </tr>
    <tr>
		<td colspan="2"><input class="submit" type="submit" value="Submit"></td>
    </tr>
	<table>
  </fieldset>
</form>
<script>
$("#regiform").validate();
</script>
</body>
</html>
