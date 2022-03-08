<?php
session_start();
include"functions.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
<title>SystemLogIn</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>
.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-right: 10px;padding-left: 8px;  }
.art-content .art-postcontent-0 .layout-item-2 { padding: 0px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
</style></head>
<body>
<div id="art-main">
<nav class="art-nav">
    <div class="art-nav-inner">

	 
	   <ul class="art-hmenu"><li><a href="about.php" class="active">About Us</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="login.php" class="active">System Log In</a></li></ul> 
	    <ul class="art-hmenu"><li><a href="main.php" class="active">Main</a></li></ul> 
        </div>
    </nav>
<header class="art-header">


    <div class="art-shapes">
<div class="art-textblock art-object1812261471" data-left="0%">
        <div class="art-object1812261471-text-container">
        <div class="art-object1812261471-text"><p style="color: #263919; font-size:27px;font-family:'Century Gothic', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;font-weight:bold;font-style:normal;text-decoration:none">Baltimore University Of Technology</p></div>
    </div>
    
</div>
            </div>
                  
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p><span style="font-weight: bold;"></span></p>
         
        <p></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 33%" >
        <img alt="" width="74%" src="images/slideshutterstock_159909612.png" height="181" class="">    </div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
      
        <form name="form1" method="post" action="">
          <table width="434" border="0">
            <tr>
              <th colspan="2" scope="row">Staff Log In </th>
              </tr>
            <tr>
              <th width="151" scope="row"><div align="left">Username </div></th>
              <td width="273">	<label>
                <input name="username" type="text" id="username" required size="35">
              </label></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Password</div></th>
              <td><label>
                <input name="password" type="password" id="password"required size="35">
              </label></td>
            </tr>
            <tr bgcolor="#666666">
              <th scope="row">&nbsp;</th>
              <td><input name="Submit" type="submit" id="Submit" value="Staff_LogIn"></td>
            </tr>
          </table>
        </form>
		        		<?php
		include"cn.php";
@$user=$_POST['username'];
@$pass=$_POST['password'];
 if(isset($_POST['Submit']))
 {

			
			$query=mysql_query("select * from staff where email='$user' and password='$pass' and status='1'") or die(mysql_error());
			$count=mysql_num_rows($query);
				if($count==0)
					{
				alert("Either your username or password is incorrect! Please try again");
					}
		
			
			$qr=mysql_query("select * from staff where email='$user' and password='$pass'") or die(mysql_error());
			$fetch=mysql_fetch_array($qr);
			$level=$fetch['level'];
			$_SESSION['username']=$_POST['username'];
			$_SESSION['module1']=$fetch['module1'];
			$_SESSION['fullname']=$fetch['fullname'];
			$_SESSION['logged']=$level;

			switch($level)
			{
			case'Lecturer':
			header('location:dash.php');
			break;
			
			case'Administrator':
			header('location:dash3.php');
			break;
			default:
			alert("Either your username or password is incorrect! Please try again");
			}
	
	}
			
					
?>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%">
        <p>Copyright � 2016</p>
    </div>
    </div>
</div>

</footer>

    </div>
    <p class="art-page-footer">
       .</span>
    </p>
</div>


</body></html>