<!DOCTYPE html>
<html>
<head>
<title>Only git</title>
<style>
.whitemark{
width:20px;
height:20px;
border-radius:10px;
background-color:white;
border: 1px solid black;
}

input + label>img,
input[type="radio"],
input:checked + label>div.whitemark{

	display:none;
}
input[type="radio"]:checked + label>img{
	display:block;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
window.onload=function(){
	$('label').on('click', function(){$('#popupbutton').attr("href", "http://s-oil7.eu/"+$(this).attr('for'));} );

}
	</script>
</head>
<body>
<hr>
Checkbox swith<br>

<div class="geolocation">
	<div style="width:50%;float:left;">
		<input type="radio" name="county" class="changeinpopup" value="�������" id="ru"checked/>
		<label  for="ru">
			<div class="whitemark"></div>
			<img src="http://git/public_html/check-mark.png" style="margin-left:15px;"/>
			<p style="line-height:2;">�������</p>
		</label>
	</div>
	<div style="width:50%;float:left;">
		<input type="radio" name="county" class="changeinpopup" value="�������" id="ru"checked/>
		<label  for="ru">
			<div class="whitemark"></div>
			<img src="http://git/public_html/check-mark.png" style="margin-left:15px;"/>
			<p style="line-height:2;">�������</p>
		</label>
	</div>
</div>

<input type="radio" id="by" name="country" checked/><label  for="by"><div class="whitemark"></div><img src="http://git/public_html/check-mark.png"/>BY</label>


<br>
<input type="radio" id="ua" name="country"/><label for="ua"><div class="whitemark"></div><img src="http://git/public_html/check-mark.png"/>UA</label><br>
<a id="popupbutton" href="ya.ru"><button>GO</button></a>

<hr>
<a href="max.html">Max file</a>
<a href="Ardzhuna.html">Ardzhuna file</a>

<div style="width:300px; border: 1px solid green;height:100px;"></div>
<div>Limitrof block</div>
<h1><span>BHIMA</span></h1>

</body>
</html>
