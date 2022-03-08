<?php session_start(); 
include"functions.php";
include "cn.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
<meta charset="utf-8">
<title>Change Password</title>
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
.style4 {
	font-size: 9px;
	color: #FF0000;
}
</style></head>
<body>
<div id="art-main">
<nav class="art-nav">
    <div class="art-nav-inner">

	 <ul class="art-hmenu"><li><a href="Logout.php" class="active">Logout</a></li></ul> 
	  <ul class="art-hmenu"><li><a href="backup.php" class="active">Backup</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="owings.php" class="active">Owing Students</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="acceptpayment.php" class="active">Payments</a></li></ul> 
	    <ul class="art-hmenu"><li><a href="newlecturer.php" class="active">Lecturer</a></li></ul> 
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
        <p><span style="font-weight: bold;"></span>You Are Logged In As:</strong>     <strong><?php echo ucwords ($_SESSION['fullname']); ?></p>
         
        <p></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 33%" >
        <img alt="" width="90%" src="images/change_password.png" height="181" class="">    
        
    </div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
        <form name="form1" method="post" action="">                           
<table width="414" border="0">
  <tr>
    <th colspan="2" scope="row">Change Password </th>
    </tr>
  <tr>
    <th width="232" scope="row"><div align="left">Current Password <span class="style4"></span></div></th>
    <th width="172"><input name="current" type="text" id="current" size="35" required></th>
  </tr>
  <tr>
    <th scope="row"><div align="left">New Password </div></th>
    <td><label>
      <input name="password" type="text" id="password" size="35" required>
    </label></td>
  </tr>
  <tr>
    <th scope="row"><div align="left">Confirm New </div></th>
    <td><input name="cpassword" type="text" id="cpassword" size="35" required ></td>
  </tr>
  <tr>
    <th scope="row"><div align="left"></div></th>
    <td><label>
      <input type="submit" name="Submit" value="Update Password">
    </label></td>
  </tr>
</table>

        </form>
		<?php
$oldpass=$_POST['current'];
$newpass=$_POST['password'];
$confirm=$_POST['cpassword'];
if(isset($_POST['Submit']))
{
			
			if(strlen($newpass)<6)
					{
					alert("Password too short");
					}
					
					if(strcmp($newpass,$confirm)!=0)
						{
						alert("Passwords did not match");
						}		
///checking if the old password is valid
$qry=mysql_query("select * from staff where fullname='$_SESSION[fullname]' and password='$oldpass'") or die(mysql_error());
$count=mysql_num_rows($qry);
			if($count==0)
				{
				alert("Password did not match with username");
				}
				
	///if everything is fine
	$qy=mysql_query("update staff set password='$newpass' where fullname='$_SESSION[fullname]'") or die(mysql_error());
			if($qy)					
					{
					message_goto('Password successfully changed','dash3.php');
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
                                
   </br>
    </br>
	 </br>
	  </br>
	   </br>             

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%">
        <p>Copyright ? 2016</p>
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