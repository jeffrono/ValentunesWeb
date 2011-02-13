<?php
session_start();
?>
<html>
<head>
<title>
	Valentun.es | Send love with music
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/polling.js"></script>
<script src="js/processing.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
</html>
<body>

<?php 
/*
include_once 'connectors/RemoteLogic.php';

// just keep it 
$_SESSION['valentunes']['POST'] = $_POST;

// send info to backend
$remote = new RemoteLogic();
$ticket = $remote->create($_POST['name'], $_POST['interests'], $_POST['description']);

// ** this is throwing error - adding session up top did not fix... what to do?
//$_SESSION['ticket']; // store session

print '<script type="text/javascript">var job_id = ' . $ticket . '</script>';
*/
?>

<div id="header">
  <img src="./imgs/logo.png" alt="logo" />
  <p>Almost there.  Please select some songs to include in your ValenTUNE:</p>
</div>
<form method="POST" action="complete.php">
<div id="content">
	<ul>
		<li>
			<span style="font: MyUnderwoodRegular; font-size: 30px;">
			<input type="checkbox" name="track" value="idnum"> 
			
			<object type="application/x-shockwave-flash" data="../button/musicplayer.swf?&song_url=http://skateboardmag.ru/uploads/music/Fallen_Ride_the_Sky/09-Billy_Marks.mp3&" width="17" height="17">
			<param name="movie" value="../button/musicplayer.swf?&song_url=http://skateboardmag.ru/uploads/music/Fallen_Ride_the_Sky/09-Billy_Marks.mp3&" />
			<img src="noflash.gif" width="17" height="17" alt="" />
			</object>
			
			
			Artist - Track
			<span>searchedterm</span>
		
	</ul>
<input type="submit" name="get_url" value="URL Link" class="btn" />
<input type="submit" name="phone_call" value="Phone Call" class="btn" />
</div>
</form>


</body>
</html>