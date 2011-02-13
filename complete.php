<?php
session_start();
?>
<html>
<head>
<title>
	Valentun.es | Send love with music
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
</html>
<body>

<div id="header">
  <img src="./imgs/logo.png" alt="logo" />
  <p>Your bespoke ValenTUNE has been carefully crafted out of the most equisite music on the web.  It was then gently gift-wrapped, 
  <?php if(isset($_POST['get_url'])) { ?> delicately placed into a webpage and delivered on the backs of sea turtles to arrive at the URL below.  Copy and email it to your Valentine.<?php } ?>

  <?php if(isset($_POST['phone_call'])) { ?> sent across time and space and surmounted the cell towers of AT&T to warm the heart of your special someone.  After a little while, be sure to call your Valentine and bask in the love.<?php } ?>
  
  </p>
</div>

<div id="content">
		<span style="font: MyUnderwoodRegular; font-size: 30px;">
		URL HERE
		</span>
</div>

</body>
</html>