<?PHP
	
	//NEW WAY OF CONNECTING TO DATABASE
	
	// Include ezSQL core
	include_once "ez_sql_core.php";
	
	// Include ezSQL database specific component (in this case mySQL)
	include_once "ez_sql_mysqli.php";
	
	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host
	$db = new ezSQL_mysqli('ancac','','ancac','localhost');
	// JM
?>

<html>
      <head>
            <title><?PHP echo $page_title; ?></title>
            <?php echo'<SCRIPT language="JavaScript" SRC="'.$webroot.'javaScriptFunctions.js"></SCRIPT>
             			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
						<script src="'.$webroot.'dropit.js"></script>
						<link rel="stylesheet" href="'.$webroot.'dropit.css" type="text/css" />';
           ?>
           <script>
           		$(document).ready(function() {
        	    	$('.menu').dropit({ action: 'hover' });;
        		}); 
           </script>
      		<link rel='stylesheet' href='<?php echo $webroot?>login.css' type='text/css' media='screen'>
      		<link rel='stylesheet' href='<?php echo $webroot?>print.css' type='text/css' media='print'>
      </head>

<div class=nav>
	<div class='loginInfo'> 
		<div class=login-header>
			<div class='userInfo'>Logged in as: <?PHP echo $_SESSION['name']." (".$_SESSION['CenterName'].")"; ?></div>
			<div class='userInfo'> | ANCAC | </div>
			<div class='userInfo pageTitle'><?PHP echo $page_title;?></div>
			<div class='userInfo returnToMain'><a href=<?php echo $webroot?>index.php> | Return to Main Menu</a></div>
			<div class='userInfo help'><a href=<?php echo $webroot?>help.php> | Help</a></div>
			<div class='userInfo logoutButton'><a href=<?php echo $webroot?>logout.php> | Logout</a></div>
		</div>
	</div>
	
	<div class='dropdownMenus'>
		<ul class="menu">
		    <li>
	        
		         <a href="#">Reports</a>
		        <ul>
		           
		           <?PHP 
		            //makes the links unavailable to the centers if not in the date.
		            //added webroots to the links
						//if($_SESSION['admin'] == 2)
						//{
						//	echo <li><a href= echo .$webroot."qreportAdmin.php">Enter/Update Quaterly Numbers</a></li>;
						//}
						//else
						//{
					               // $center = $_SESSION['center'];
					               // $sql = "SELECT completed".
					                       // " FROM actualExpenditures ".
					                       // "WHERE center = ".$center." AND fiscalyear = ".$fiscalYear.
					                       // " AND quarter = ".$currentQuarter;
					
					               // $result= @mysql_query($sql) or mysql_error();
					               // $row = mysql_fetch_object($result);
					
					                //echo '<td>';
					                //if (isset($row->completed)){
					                     //   if ($row->completed == "INC"){
					                         //       if ($Available == 1){
					                         //             echo   <li><a href= echo .$webroot."editQuarter.php">Start Quaterly Numbers</a></li>;
					                           //           echo  <li><a href= echo .$webroot."submitCQ.php">Enter/Update Quaterly Numbers</a></li>;
					                         //       }
					                             //   else{
					                               // 	echo 	<li><a href="#">Start Quaterly Numbers (Unavailable)</a></li>;
					                                 //   echo   <li><a href="#">Submitt Quaterly Numbers (Unavailables)</a></li>;
					                         //       }
					                       // }
					 //	}
					?>
		            <li><a href=<?php echo $webroot?>"qreports.php">Enter/Update Quaterly Numbers</a></li>
		            <li><a href=<?php echo $webroot?>"eoyreports.php">Enter Annual Budget Numbers</a></li>
		            <li><a href=<?php echo $webroot?>"selectYear.php">Print Year To Date Reports</a></li>
		        </ul>
		    </li>
		</ul>
		
		<ul class="menu">
		    <li>
		        <a href="#">Special Functions</a>
		        <ul>
		            <li><a href=<?php echo $webroot?>"ancacdocs/">View/Update Shared Docs</a></li>
		        </ul>
		    </li>
		</ul>
		
		<?PHP
		if($_SESSION['admin'] > 1){
			echo '<ul class="menu">
			    <li>
			        <a href="#">Admin</a>
			        <ul>
			            <li><a href="'.$webroot.'AcctAdmin.php">Center Administration</a></li>
			            <li><a href="' .$webroot.'LastLogin.php">View Last Login for Ctrs</a></li>
			            <li><a href="'.$webroot.'email.php">E-mail Entire Network</a></li>
			            <li><a href= "'.$webroot.'qreportAdmin.php?from=8">Received Snail Mail Docs</a></li>
			        </ul>
			    </li>
			</ul>
			
			<ul class="menu">
			    <li>
			        <a href="#">Reporting</a>
			        <ul>
			            <li><a href="'.$webroot.'haveSubmit.php">View Current Qtr Unsumitted Centers</a></li>
			            <li><a href="'.$webroot.'selectYearGT.php?from=2">Veiw/Print ANCAC Grant Total Report</a></li>
			            <li><a href="'.$webroot.'selectYearGT.php?from=3">Veiw/Print Estimated Budget Total Report</a></li>
			            <li><a href="'.$webroot.'qreportAdmin.php?from=9">Veiw/Print ANCAC Board of Directors</a></li>
						<li><a href="'.$webroot.'eoyProgress.php">Check End Of Year Status</a></li>
			        </ul>
			    </li>
			</ul>';
		}?>
	
	</div>
</div>
