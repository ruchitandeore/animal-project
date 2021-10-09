<!doctype html>
<html>
<head>
<title></title>
</head>
<body>
<div class="aniinfo"><h1>Animal Information</h1></div>
<div class="mane">
	<form>
	<div id="name">
	<h2 class="name">Animal Name</h2>
	<input class="aniname" type="text" name="animal_name"><br>
	</div>
	
	<h2 class="name">category</h2>
	
	<label class="radio">
	<input class="radio-one" type="radio" checked="checked" name="">
	<span class="checkmark"></span>
	Herbivores
	</label>
	
	<label class="radio">
	<input class="radio-two" type="radio" checked="checked" name="">
	<span class="checkmark"></span>
	omnivores
	</label>
	

	<label class="radio">
	<input class="radio-three" type="radio" checked="checked" name="">
	<span class="checkmark"></span>
	carnivores
	</label>
	
	<h2 class="name">Image</h2>
	<img  src="image1.jpg" alt="elephant image"></img>
	
	<h2 class="name">Image</h2>
	<img  src="image2.jpg" alt="elephant image"></img>
	
	<h2 class="name">Image</h2>
	<img  src="image3.jpg" alt="elephant image"></img>
	
	
	<h2 class="name">Description</h2>
	<input class="desc" type="textarea" name="desc"><br>
	
	<h2 class="name">Life</h2>
	<select class="option" name="life">
	<option disabled="disabled" selected="selected">choose option---</option>
	<option>0-1 year</option>
	<option>1-5 year</option>
	<option>5-10 year</option>
	<option>10+ year</option>
	</select><br>
	
	<h2 class="name">captcha</h2>
	<input class="captcha" type="text" name="captcha"><br><br>
	
	<button type="submit" >Submit</button>
	
	
	
	
	</form>


</div>


</body>



</html>