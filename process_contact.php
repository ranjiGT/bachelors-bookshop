<?php		if(!empty($_POST))	{		$msg=array();				if(empty($_POST['nm']) || empty($_POST['email']) || empty($_POST['query']))		{			$msg[]="Please  fill all requirement";		}								if(is_numeric($_POST['nm']))		{			$msg[]="Name must be in String Format...";		}				if(is_numeric($_POST['email']))	//See this validation for @,21212 Later		{			$msg[]="Name must be in appropriate Format...";		}						if(!empty($msg))		{			echo '<b>Error:-</b><br>';						foreach($msg as $k)			{				echo '<li>'.$k;			}		}		else		{			$nm=$_POST['nm'];			$email=$_POST['email'];			$question=$_POST['query'];						$link=mysqli_connect("localhost","root","")or die("Can't Connect...");						mysqli_select_db($link, "shop") or die("Can't Connect to Database...");						$query="insert into contact(con_nm,con_email,con_query)			values('$nm','$email','$question')";						mysqli_query($query,$link) or die("Can't Execute Query...");						header("location:contact.php");		}	}	else	{		header("location:index.php");	}?>
