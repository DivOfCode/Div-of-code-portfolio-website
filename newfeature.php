<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body{
		font-family: "fantasy;" sans-serif;
		display: flex;
		text-align: center;
		justify-content: center;
		align-items: center;
		height: 100vh;
		background-color: #000;
		color: #fff;
	}
	#text{
		position: relative;
		color: #fff;
		font-weight: 700;
		font-size: 10em;
		outline: none;
		width: 100%;
		text-align: center;
		text-shadow: -1px -1px 0px #c5f404;
	}
</style>
<body>
	<div id="text" contenteditable="">Text</div>

<script type="text/javascript">
var shadtext = document.getElementById('text');
var shadow = '';

for (var i = 1; i <= 500; i++) {
    shadow += (shadow ? ',' : '') + i * 1'px ' + i * 1 'px 0px #0a0a0a';
}

shadtext.style.textShadow = shadow;
</script>
</body>
</html>