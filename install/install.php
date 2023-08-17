<html>
<title>Welcome</title>
<style>
#form_login{
background-image:url('images/debut_light/debut_light.png');
margin-top:50px;
padding:20px;
width:170px;
border:2px solid;
border-radius:10px; 
border-color:#dedede;
}
</style>

<body>
	<center>
		
<div id="form_login">
<h3 align="center">Instalasi ...</h1>
<form method="POST" action="install2.php">
Host <br/><input type="text" name="host" value="localhost" readonly/><br/>
Username  <br/><input type="text" name="user" value="root" /><br/>
Password  <br/><input type="password" name="pass"/><br/>
database name <br/> <input type="text" name="db"/><br/>
<br>
<input type="submit" name="step1" value="Lakukan Instalasi"/>
</form>
</div>
	</center>
</body>
</html>