<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loader page Ajax</title>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script> 
$(document).ready(function () {
$(document).on("click","#charger",function() { 
$("#chargement").load("prenom.php", {
prenom : 'John Doe'
});
$.ajaxSetup({
cache: false
})
});
});
</script>
</head>
<body>
<div align="center">
<a href="#" id="charger" name="charger">Charger la page prenom</a>
<div id="attente">en attente ...</div>
<div id="chargement"></div>
</div>
</body>
</html>