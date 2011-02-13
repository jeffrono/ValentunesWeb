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
  
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
codebase="http://fpdownload.macromedia.com/pub/
shockwave/cabs/flash/swflash.cab#version=7,0,0,0"
width="400" height="168">
<param name="allowScriptAccess" value="sameDomain"/>
<param name="movie" value=".player/xspf_player.swf"/>
<param name="quality" value="high"/>
<param name="bgcolor" value="#E6E6E6"/>
<embed src=
"./player/xspf_player.swf?
playlist_url=userplaylist.xspf"
quality="high" bgcolor="#E6E6E6"
name="xspf_player" allowscriptaccess="sameDomain"
type="application/x-shockwave-flash"
pluginspage="http://www.macromedia.com/go/getflashplayer"
align="center" height="168" width="400"></embed>
</object>
  
  
  Dearest Jane,
  <p>You've just received a ValenTUNE from John! Your bespoke playlist has been carefully crafted out of the most equisite music on the web and hand selected by your special someone. It was then gently gift-wrapped, delicately placed into this webpage and delivered on the backs of sea turtles to arrive on this screen.  John must really adore you!</p>
  <p>Oooh look - there's a note:</p>
</div>

<blockquote id="message">
I love you baby, you're the best!  Hope you enjoy this awesome playlist.
</blockquote>

</body>
</html>