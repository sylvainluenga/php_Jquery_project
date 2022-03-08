<?php session_start(); 
include"3.php";
include"functions.php";
include "cn.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
<meta charset="utf-8">
<title>PayFees</title>
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
	   <ul class="art-hmenu"><li><a href="changepasst.php" class="active">Change Password</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="payfees.php" class="active">Make Payments</a></li></ul> 
	    <ul class="art-hmenu"><li><a href="vresults.php" class="active">View Results</a></li></ul> 
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
        <img alt="" width="97%" src="images/divorce-fees-who-should-pay-1024x709.jpg" height="196" class="">    </div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
        <form name="form1" method="post" action="">     
		                 
<table width="414" border="0">
  <tr>
    <th colspan="2" scope="row">Pay Fees </th>
    </tr>
  <tr>
    <th width="232" scope="row"><div align="left">Payment Method<span class="style4">(Only Bank Transfer) </span></div></th>
    <th width="172">Bank Transfer </th>
  </tr>
 
  <tr>
    <th scope="row"><div align="left">Amount To Pay </div></th>
    <td><label>
      <input name="amount" type="text" id="amount" size="20" required>
    </label></td>
	<?php $qry=mysql_query("select * from virtualbank where fullname='$_SESSION[fullname]'");
$rw=mysql_fetch_array($qry);
?>       
  </tr>
  <tr>
    <th scope="row"><div align="left">Available Bank Balance </div></th>
    <td> <input name="bnk" type="text"   readonly=""value="<?php echo  $rw['balance'];?>" id="amount" size="20" required></td>
  </tr>
  <tr>
  <?php $qry=mysql_query("select * from  students where fullname='$_SESSION[fullname]'");
$rw=mysql_fetch_array($qry);
?>       
    <th scope="row"><div align="left">Fees Paid So Far </div></th>
    <td><input name="sof" type="text"   readonly=""value="<?php echo  $rw['balance'];?>" id="amount" size="20"></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><label>
      <input name="submit" type="submit" id="submit" value="Pay Fees">
    </label></td>
  </tr>
</table>

        </form>
	 <?php 
$bnk=$_POST['bnk'];
$amount=$_POST['amount'];
$today = date("Y-m-d H:i:s");
$sof=$_POST['sof']; 
$fnl=$sof+$amount;
$bnkltst=$bnk-$amount;
if (isset($_POST['submit']))
{
 $qy=mysql_query("insert into pymnts(fullname,amount,date) values('$_SESSION[fullname]','$amount','$today')") or die(mysql_error());
  if($amount > $bnk)
  {
  message_goto('Sorry ^ - ^ You Cannot Perform a Transaction for amount above your float balance','payfees.php');
  }
mysql_query("update students set balance='$fnl' where fullname='$_SESSION[fullname]'");
$add=mysql_query($done,$conn);// or die(mysql_error() ."<br>$done"); 
mysql_query("update marks set fees='$fnl' where fullname='$_SESSION[fullname]'");
$add=mysql_query($done,$conn);// or die(mysql_error() ."<br>$done"); 
mysql_query("update virtualbank set balance='$bnkltst' where fullname='$_SESSION[fullname]'");
$add=mysql_query($done,$conn);
//$qy=mysql_query("insert into pymnts(fullname,amount,date) values('$_SESSION[fullname]','$amount','$today'") or die(mysql_error());
{
					message_goto('TrAncaction Was Successfull.','viewfees.php');
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