<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>FORMULARI PEL CÀLCUL DEL CAPITAL FINAL UTILITZANT L'INTERÈS COMPOST</title>	
	</head>  
	<body>
		<b>FORMULARI PEL CÀLCUL DEL CAPITAL FINAL UTILITZANT L'INTERÈS COMPOST</b><br><br>
		<form name=frm_combo action="index.php" method="POST">
                    <table>
                        <tr><td>Capital inicial(€):</td><td><input type="text" name="ci"></td></tr>
                        <tr><td>Interès en %:</td> <td><input type="text" name="int"></td></tr>
                        <tr><td>Temps en anys:</td><td><input type="text" name="temps"></td></tr>
                    </table>       
                    <input type="submit" value="Envia"/><input type="reset" value="Esborra"/>
		</form>		
	</body>
</html>
<?php
	function calc_int_comp($ci,$int,$temps) {
        $cf=$ci*pow((1+($int/100)),$temps);
		return  $cf;
    }
    if (!empty($_POST["ci"]) && !empty($_POST["int"]) && !empty($_POST["temps"])) {
		$cf=calc_int_comp($_POST["ci"],$_POST["int"],$_POST["temps"]);
		echo "VALOR DEL CAPITAL FINAL EN €:<br>";
		echo "Capital incial en €: ".$_POST["ci"]."<br>";
		echo "Interès en %: ".$_POST["int"]."<br>";
		echo "Temps en anys: ".$_POST["temps"]."<br>";
		echo "Capital final en €: ".$cf."<br>";
		echo "<br>";
		echo "Desenvolupador: el meu nom complet";
	}
?>
