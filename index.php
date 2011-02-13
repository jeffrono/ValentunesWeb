<html>
<head>
<title>
  Valentun.es | Send love with music
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="http://cachedcommons.org/cache/jquery/1.4.2/javascripts/jquery-min.js"></script>
    
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
</html>
<body>

<div id="header">
  <img src="./imgs/logo.png" alt="logo" />
  <p>Create a customized playlist of music your Valentine will love...</p>
</div>

<div id="content">
<form method="POST" action="song_selector.php">
	<div>
		 <label for="name">Recipient's Name</label><br>
		 <input style="content" type="text" name="name" id="name" size="50" value="madeleine" tabindex="1" />
	</div>
	
	<div>
		<label for="name">Your Valentine's Interests</label><br>
		<textarea name="interests" rows="2" cols="50">ski, blueberry, vodka, mac, poodle, roses</textarea>
	</div>
		
	<div>
		<label for="name">Describe your Valentine</label><br>
		<textarea name="description" rows="2" cols="50">beautiful, caring, passionate, adorable</textarea>
	</div>
	
	<div>
		<label for="name">Valentine's Cellphone</label><br>
		<input type="tel" size="50" name="recipient_phone" value="6465551212"/>
	</div>

	<div style = "small">
		<label style = "small">Personalized message</label><br>
		<textarea style = "small" name="note" rows="3" cols="50">Here's a ValenTUNE! Hope you enjoy it!</textarea>
	</div>
	
		<span style = "small">Your Name</span>
		<input type="text" name="sender_name" value="romeo"/>
		
		<span style = "small">Your Cell</span> 
		<input type="tel" name="sender_phone" value="6465551213"/>
	
</div>	
	<input type="submit" name="op" value="Send Your ValenTUNE" class="btn" />
</form>



			<?php /*
<div id="stuff" style="background-image:url('../imgs/heart_border2.png'); background-repeat:no-repeat; width:300; height:500;"></div>
*/ ?>

<div id="images"></div>		
<div id="footer">

</div>

</body>

