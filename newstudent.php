<?php
session_start();
include"cn.php";
include"functions.php";
require_once('no.php');
$rand = get_rand_id(4);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>New Student</title>
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

	 
	   <ul class="art-hmenu"><li><a href="about.php" class="active">About Us</a></li></ul> 
	      <ul class="art-hmenu"><li><a href="login1.php" class="active">Student System Log In</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="login.php" class="active">Staff System Log In</a></li></ul> 
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
        <img alt="" width="74%" src="images/Students.jpg" height="181" class="">    </div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
      
        <form name="form1" method="post" action="">
          <table width="371" border="0">
            <tr>
              <th colspan="2" scope="row">New Student Account </th>
              </tr>
            <tr>
              <th width="114" scope="row"><div align="left">Full Name</div></th>
              <td width="247">	<label>
                <input name="fullname" type="text" id="fullname" size="35" required>
              </label></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Student#</div></th>
              <td><input name="idnum" type="text"  readonly=""id="idnum" size="35" value="16<?php echo strtoupper($rand); ?>" required></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Password</div></th>
              <td><label>
                <input name="password" type="password" id="password" size="35" required>
              </label></td>
            </tr>
			<tr>
              <th scope="row"><div align="left">Confirm</div></th>
              <td><label>
                <input name="cpassword" type="password" id="cpassword" size="35" required>
              </label></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Sex</div></th>
              <td><select name="sex" id="sex">
                <option>Male</option>
                <option>Female</option>
                            </select></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Email</div></th>
              <td><input name="email" type="text" id="email" onBlur="MM_validateForm('email','','NisEmail');return document.MM_returnValue" size="35" required onsubmit="MM_validateForm('email','','RisEmail');return document.MM_returnValue"></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Department</div></th>
              <td><select name="department" id="department">
                <option>MICT</option>
                            </select></td>
            </tr>
            <tr>
              <th scope="row">Program</th>
              <td><select name="program" id="program">
                <option>BSc Computer Science</option>
              </select></td>
            </tr>
            <tr>
              <th scope="row">Bank Account #</th>
              <td><input name="bank" type="text" id="bank" size="35" required></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Pin</div></th>
              <td><input name="pin" type="password" id="pin" size="35" required></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td><label>
                <input name="Submit" type="submit" id="Submit" value="Register">
              </label></td>
            </tr>
          </table>
        </form>
		<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$bank=$_POST['bank'];
$program=$_POST['program'];
$department=$_POST['department'];
$password=$_POST['password'];
$pin=$_POST['pin'];
$id=$_POST['idnum'];
//$City=$_POST['City'];
//$Client=$_POST['Client'];
$kpassword=$_POST['cpassword'];
$date=date("d/m/Y");
if(isset($_POST['Submit']))
{
if(strlen($password)<6)
					{
					alert("Password too short");
					}
								if(strcmp($password,$kpassword)!=0)
									{
									message("OoOoOpPss Passwords did not match");
									}	
			 $query=mysql_query("SELECT * FROM students WHERE studentid='$id'") or die(mysql_error());
  $count_rows=mysql_num_rows($query);
  if($count_rows==1)
  {
 alert ("Sorry User Already Exists!!");
  }						
									
	$qy=mysql_query("insert into students(fullname,studentid,sex,email,program,department,level,cdate,password,status,bankaccount) values('$fullname','$id','$sex','$email','$program','$department','Student','$date','$password','1','$bank')") or die(mysql_error());
	     $qy=mysql_query("insert into virtualbank(fullname,accountno,level,date,pin) values('$fullname','$bank','1','$date','$pin')") or die(mysql_error());
				if($qy)
				{
				message_goto('Thank You For Registering With Baltimore University Of Technology','login1.php');
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