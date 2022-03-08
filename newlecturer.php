<?php
session_start();
include"1.php";
include"cn.php";
include"functions.php";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
<title>Add Lecturer</title>
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
 <ul class="art-hmenu"><li><a href="Logout.php" class="active">Logout</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="changepas.php" class="active">Change Password</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="backup.php" class="active">Backup</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="owings.php" class="active">Owing Students</a></li></ul> 
	   <ul class="art-hmenu"><li><a href="acceptpayment.php" class="active">Payments</a></li></ul> 
	    <ul class="art-hmenu"><li><a href="dash3.php" class="active">Home</a></li></ul> 
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
        <img alt="" width="63%" src="images/Alpha Dista Icon 81.png" height="151" class="">    </div>
    <div class="art-layout-cell layout-item-1" style="width: 34%" >
      
        <form name="form1" method="post" action="">
          <table width="402" border="0">
            <tr>
              <th colspan="2" scope="row">New Lecturer Account </th>
              </tr>
            <tr>
              <th width="145" scope="row"><div align="left">Name</div></th>
              <td width="247">	<label>
                <input name="fullname" type="text" id="fullname" size="35" required>
              </label></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Employee#</div></th>
              <td><input name="empid" type="text" id="empid" size="35" required></td>
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
              <td><input name="email" type="text" id="email" size="35" required></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Password</div></th>
              <td><input name="password" type="text" id="password" size="35" required></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Confirm Password </div></th>
              <td><input name="cpassword" type="text" id="cpassword" size="35" required></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Department</div></th>
              <td><select name="department" id="department">
                <option>MICT</option>
                            </select></td>
            </tr>
            <tr>
              <th scope="row"><div align="left">Module Taught </div></th>
              <td><select name="module" id="module">
                <?php
			  $rs3=mysql_query("select * from modules order by Modules") or die(mysql_error());
			  while($row3=mysql_fetch_array($rs3))
			  
			  {
			  ?>
                <option value="<?php echo ucwords ($row3["Modules"]); ?>"><?php echo ucwords ($row3["Modules"]); ?></option>
                <?php
				}
				?>
              </select></td>
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
//$program=$_POST['program'];
$department=$_POST['department'];
$password=$_POST['password'];
//$level=$_POST['level'];
$id=$_POST['empid'];
//$City=$_POST['City'];
$module=$_POST['module'];
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
			 $query=mysql_query("SELECT * FROM staff WHERE email='$email'") or die(mysql_error());
  $count_rows=mysql_num_rows($query);
  if($count_rows==1)
  {
 alert ("Sorry User Already Exists!!");
  }						
									
	$qy=mysql_query("insert into staff(fullname,department,empid,sex,email,level,password,cdate,status,module1) values('$fullname','$department','$id','$sex','$email','Lecturer','$password','$date','1','$module')") or die(mysql_error());
	     
				if($qy)
				{
				message_goto('Lecturer Enrolmant Was Successful','v_lecturers.php');
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