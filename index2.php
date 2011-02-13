<html>
<head>
<title>
  Valentun.es | Send love with music (passionate hackers?)
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="http://cachedcommons.org/cache/jquery/1.4.2/javascripts/jquery-min.js"></script>
    <script src="http://cachedcommons.org/cache/jquery-ui/1.8.4/javascripts/jquery-ui-min.js"></script>
    <script>
      function ri(min, max){
        return Math.floor(Math.random()* (max - min) + min)
      }

      function insertPhotosFrom(tags, position){
        var tag = tags[ri(0, tags.length)];
        $("#images").attr("class", tag);
        $.getJSON("http://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=79d25c376a49d0d16eb0b25bb8c23dd5&tags="+tag+"&tag_mode=all&sort=interestingness-desc&license=1%2C2%2C3%2C4%2C5%2C6%2C7&content_type=1&extras=url_m%2Cdescription%2Cowner_name%2Clicense&format=json&jsoncallback=?", function(data){
          var photos = data.photos.photo;
          insertRandom(photos,tag, position);
        });
      }

      function insertRandom(photos, tag, position){

          var max = photos.length;
          
            var item = photos.splice(ri(0,max),1)[0];
          //$.each(data.photos.photo, function(i,item){
            var photoUrl = item.url_m;
            //photo page urls = http://www.flickr.com/photos/{user-id}/{photo-id}
            var photohref = 'http://www.flickr.com/photos/'+item.owner+'/'+item.id;
            var degree = ri(-10,10);
            
            $('<img/>').attr("src", photoUrl).attr("id", "img"+position).appendTo("#images")
            .wrap("<div class='photo d"+ degree + "d "+tag+"' id='pic"+position+"'></div>").wrap("<a target='_blank' href='" + photohref + "'></a>");
      }
      
      $(document).ready(function(){
        //var tags = ["love","happy","valentine"];
        //insertPhotosFrom(["valentine"],1);
        //insertPhotosFrom(["passion"],1);
        //insertPhotosFrom(["beautiful"],2);
        //insertPhotosFrom(["son", "surveillance", "camera"],3);
        //insertPhotosFrom(["repetition","recursion"],4);
        $("#license").draggable({helper: "clone"});
      });
    </script>


<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
</html>
<body>

<div id="header">
  <img src="./imgs/logo.png" alt="logo" />
  <p>Create a customized playlist of music your Valentine will love...</p>
</div>


<div id="content">
<form method="POST" action="process_request.php">
	<div>
		 <label for="name">Recipient's Name</label><br>
		 <input style="content" type="text" name="name" id="name" size="28" value="madeleine" tabindex="1" />
	</div>
	
	<div>
		<label for="name">Your Valentine's Interests</label><br>
		<textarea name="interests" rows="2" cols="25">ski, blueberry, vodka, mac, poodle, roses</textarea>
	</div>
		
	<div>
		<label for="name">Describe your Valentine</label><br>
		<textarea name="description" rows="2" cols="25">beautiful, caring, passionate, adorable</textarea>
	</div>
	
	<div>
		<label for="name">Valentine's Cellphone</label><br>
		<input type="tel" size="28" name="recipient_phone" value="6465551212"/>
	</div>

	<div style = "small">
		<label style = "small">Personalized message</label><br>
		<textarea style = "small" name="note" rows="3" cols="25">Here's a ValenTUNE! Hope you enjoy it!</textarea>
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

