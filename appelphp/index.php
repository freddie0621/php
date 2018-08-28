<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loader page Ajax</title>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script> 
function charger_page() {
document.getElementById('attente').innerHTML = 'Merci de patienter ...';
$('#chargement').load('rand.php');
}
</script>
</head>
<body>
<div align="center">
<a href="#" onClick="charger_page();">Charger la page</a>
<div id="attente">en attente ...</div>
<div id="chargement"></div>
</div>
</body>
</html>