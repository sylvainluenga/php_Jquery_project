<?php session_start(); 
include"1.php";
include"functions.php";
include "cn.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
<meta charset="utf-8">
<title>View Owings</title>
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
.style3 {color: #0000FF; font-weight: bold; font-size: 14px; }
.style5 {font-size: 14}
</style></head>
<body>
<div id="art-main">
<nav class="art-nav">
    <div class="art-nav-inner">
	  <ul class="art-hmenu"><li><a href="Logout.php" class="active">Logout</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="changepas.php" class="active">Change Password</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="backup.php" class="active">Backup</a></li></ul> 
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
    <div class="art-layout-cell layout-item-0" style="width: 33%" ></div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
        <form name="form1" method="post" action="">                           
  <table  align="center"width="283%" height="50">
    <caption>
      <span class="style1 style3"><strong></strong>      </span>
    </caption>
    <tr bgcolor="#66FFFF">
      <td  align="center"width="281" height="21"><span class="style14 style5"><strong>Student Name</strong></span></td>
      <td  align="center"width="92"><span class="style14 style5"><strong>Paid Amount </strong></span></td>
	       <td  align="center"width="87"><span class="style14 style5"><strong>Owing</strong></span></td>
    </tr>
    <?php 
	$qry=mysql_query("select * from students order by fullname ") or die(mysql_error());
	 $c=mysql_num_rows($qry);
			if($c<=0){
				die('<div align="center"><font color=red>No Results Available.</font></div>');
				}
				else{
	while($rw=mysql_fetch_array($qry))
	{
	?>
	 <?php 
$bnk=$_POST['bnk'];
$amount=$_POST['amount'];
$full=5600;
$owing= $full-$rw['balance'];
?>

    <tr bgcolor="#CCCCCC">
      <td align="center" height="21"><span class="style8"><strong><?php echo strtoupper ($rw['fullname']); ?></strong></span></td>
	  <td  bgcolor="#99FFFF"align="center"><div align="center"><span class="style8"><strong><?php echo $rw['balance']; ?></strong></span></div></td>
	  <td  bgcolor="#99FFFF"align="center"><div align="center"><span class="style8"><strong><?php echo $owing; ?></strong></span></div></td>
    </tr>
    <?php } }?>
  </table>
        </form>
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
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>   
		 	     </br>
		 </br>
		 </br>
		 </br>
		 </br>
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