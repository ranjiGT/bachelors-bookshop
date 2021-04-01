<?php
session_start();
if(!isset($_SESSION['name']))
{
header("location: index.php");
}
$name=$_SESSION['name'];
?>
<html>
<head>
<title>Profile of <?php echo $name;?></title>
</head>
<link rel="shortcut icon" href="icon.png" type="image/x-icon"><link rel="alternate" type="application/atom+xml" title="Gmail Atom Feed" href="feed/atom">
<h1>Hello <?php echo $name;?></h1>
<script>

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 10);
       }
    }
}

</script>
<h3><a href="logout.php">Click here to log out</a></h3>
<body onload="checkCookie()">
</body>
</html>