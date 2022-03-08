<?php
session_start();
include"cn.php";
include"2.php";
include"functions.php";
//$id=$_GET['submissionid'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
<title>Capture Marks</title>
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
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body>
<div id="art-main">
<nav class="art-nav">
    <div class="art-nav-inner">

		 <ul class="art-hmenu"><li><a href="Logout.php" class="active">Logout</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="changepass.php" class="active">Change Password</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="view_marks.php" class="active">View Marks</a></li></ul> 
	    <ul class="art-hmenu"><li><a href="dash.php" class="active">Home</a></li></ul> 
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
        <img alt="" width="74%" src="images/shutterstock_26254903.jpg" height="181" class="">    </div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
               
      
        <form name="form1" method="post" action="">
          <table width="402" border="0">
            <tr>
              <th colspan="2" scope="row">Capture Student Marks </th>
              </tr>
            <td width="158"><tr>
              <th width="145" scope="row"><div align="left">Student Name</div></th>
              <td width="247">	<label>
               <select name="fullname" id="fullname">
			  <?php
			  $rs3=mysql_query("select * from students order by fullname") or die(mysql_error());
			  while($row3=mysql_fetch_array($rs3))
			  
			  {
			  ?>
                <option value="<?php echo ucwords ($row3["fullname"]); ?>"><?php echo ucwords ($row3["fullname"]); ?></option>
				<?php
				}
				?>
              </select>
            </tr>
            <tr>
            <tr>
              <th scope="row"><div align="left">CA Test </div></th>
              <td width="234"><input name="ca" type="text" id="ca" onBlur="MM_validateForm('ca','','RinRange0:100');return document.MM_returnValue" size="20" required></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Assignment</div></th>
              <td><input name="ass" type="text" id="ass" onBlur="MM_validateForm('ass','','NinRange0:100');return document.MM_returnValue" size="20" required></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Final Exam </div></th>
              <td><input name="ex" type="text" id="ex" onBlur="MM_validateForm('ex','','NinRange0:100');return document.MM_returnValue" size="20" required></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>By Clicking Here You Accept That You Have Verified The Correctness of Your Data </td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td><label>
              <input name="Submit" type="submit" id="Submit" value="Capture Marks">
              </label></td>
            </tr>
          </table>
        </form>
				<?php
$fullname=$_POST['fullname'];
$ass=$_POST['ass'];
$ca=$_POST['ca'];
$ex=$_POST['ex'];
//$decision=$_POST['decision'];
 $today = date("Y-m-d H:i:s");
$cont1 = $ca+$ass;
$cont = ($cont1/2)*0.4;
$exe= $ex* 0.70;
$final = $exe + $cont;
if(isset($_POST['Submit']))
{
 $query=mysql_query("SELECT * FROM marks WHERE fullname='$fullname' and module = '$_SESSION[module1]'") or die(mysql_error());
  $count_rows=mysql_num_rows($query);
  if($count_rows==1)
  {
 message_goto ('Sorry Module Marks For This Student Have Been Captured Already..Consult System Admin !!','captureresults.php');
  }				
									
	$qy=mysql_query("insert into marks(fullname,module,date,assignment,catest,final,capturer,mark) values('$fullname','$_SESSION[module1]','$today','$ass','$ca','$ex','$_SESSION[fullname]','$final')") or die(mysql_error());
	     
				if($qy)
				{
				message_goto('Marks Captured Successfully','view_marks.php');
				}
			else
			{
			alert("Oops something went wrong re-try");
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