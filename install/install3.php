 <html>
<title>Welcome</title>
<script type="text/javascript">
    var counter = 10;
    function countDown()
    {
        if(counter>=0)
        {
            document.getElementById("timer").innerHTML = counter;
        }
        counter -= 1; 

        var counter2 = setTimeout("countDown()",1000);
        return;
    }
   </script>
<style>
#form_login{
background-image:url('images/debut_light/debut_light.png');
margin-top:50px;
margin-left:400px;
padding:20px;
width:300px;
border:2px solid;
border-radius:10px; 
border-color:#dedede;
}

#warning {
background-image:url('images/debut_light/debut_light.png');
color:green;

margin-top:50px;
margin-left:20px;
padding:20px;
width:700px;
border:2px solid;
border-radius:10px; 
border-color:green;
}
</style>
<body onload="countDown()">
<center><div id="warning" align="center"></h5>CONGRATULATION ! <br/>Instalasi telah berhasil! Silahkan Login Untuk Mengakses Aplikasi!</h5><br/><img src="images/progress.gif"><br/>

<span id="timer"> detik </span></div></center>";
<meta http-equiv="refresh" content="10;../index.php">
