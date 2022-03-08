<?php session_start(); 
include "cn.php";
include"functions.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
<meta charset="utf-8">
<title>Bnk</title>
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
        </div>
    </nav>
<header class="art-header">


    <div class="art-shapes">
<div class="art-textblock art-object1812261471" data-left="0%">
        <div class="art-object1812261471-text-container">
        <div class="art-object1812261471-text"><p style="color: #263919; font-size:27px;font-family:'Century Gothic', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;font-weight:bold;font-style:normal;text-decoration:none">ATM</p></div>
		
    </div>
    
</div>
  </div>
                  
</header>
<form name="form1" method="post" action="">                           
<table  align="center"width="414" border="0">
  <tr>
    <th colspan="2" scope="row"></th>
    </tr>
  <tr>
    <th width="232" scope="row"><div align="left">Account Number </div></th>
    <td width="172"><input name="account" type="password" id="account" size="20" required></td>
  </tr>
  <tr>
    <th scope="row"><div align="left">Pin</div></th>
    <td><label>
      <input name="pin" type="password" id="pin" size="20" required>
    </label></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="Submit" value="Allow Me">
    </label></td>
  </tr>
</table>

        </form>
		<?php
@$user=$_POST['account'];
@$pass=$_POST['pin'];
 if(isset($_POST['Submit']))
 {

			
			$query=mysql_query("select * from virtualbank where accountno='$user' and pin='$pass'") or die(mysql_error());
			$count=mysql_num_rows($query);
				if($count==0)
					{
				alert("Incorrect! Please Try Again");
					}
		$qr=mysql_query("select * from virtualbank where accountno='$user' and pin='$pass'") or die(mysql_error());
			$fetch=mysql_fetch_array($qr);
			$level=$fetch['level'];
		$_SESSION['accountno']=$_POST['accountno'];
			//$_SESSION['Speciality']=$fetch['Speciality'];
			$_SESSION['fullname']=$fetch['fullname'];
			$_SESSION['logged']=$level;

			switch($level)
			{
			case'1':
			header('location:bankdeposit.php');
			break;
			alert("Either your username or password is incorrect! Please try again");
			}
			

	}
			
					
?>

<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
      <p>&nbsp;</p>
         
        <p></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 33%" ></div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
        
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
                   
</body></html>