<!DOCTYPE html>

<html>
<head>
	<title>Login Page</title>
</head>
<body>

<table width="80%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td valign="middle" height="70">  
			<table width="100%">
				<tr>					
					<td>
						<img height="48" src="image/logo.png">
					</td>
					<td align="right">
						<a href="/home" target="iFrame">Home</a>&nbsp;|
						<a href="/login" target="iFrame">Login</a>&nbsp;|
						<a href="/registration" target="iFrame">Registration</a>
					</td>
				</tr>
			</table>
        </td>
    </tr>
    <tr>
        <td align="center">


<fieldset>
    <legend><b>LOGIN</b></legend>
	<div>{{session('msg')}}</div>
    <form method="POST">
		{{@csrf_field()}}
        <table>
            <tr>
                <td>ID</td>
				<td>:</td>
                <td><input type="text" name="uid"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <hr />
        <input type="submit" name="submit" value="Submit">
    </form>
</fieldset>
	</td>
    </tr>
    <tr>
        <td align="center">
            Copyright &copy; 2019 (Nazmul | Raju | Mustafijur)
        </td>
    </tr>
</table>
</body>
</html>