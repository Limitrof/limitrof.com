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
input:checked + label>div.darkmark{
	display:none;
}
#RadioStyle>input[type="radio"]:checked + label>img{
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
<div id="RadioStyle">
<input type="radio" id="by" name="country" checked/><label  for="by"><div class="whitemark"></div><img src="http://git/public_html/check-mark.png"/>BY</label><br>
<input type="radio" id="ua" name="country"/><label for="ua"><div class="whitemark"></div><img src="http://git/public_html/check-mark.png"/>UA</label><br>
<a id="popupbutton" href="ya.ru"><button>GO</button></a>
</div>
<hr>
<a href="max.html">Max file</a>
<a href="Ardzhuna.html">Ardzhuna file</a>
<div>Limitrof block</div>
</body>
</html>

