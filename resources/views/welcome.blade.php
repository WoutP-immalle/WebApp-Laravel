<!DOCTYPE html>
<html>
<head>
<title>Currency-convertert</title>
</head>

<body>
<h1>WebApp: Currency Converter</h1>

<form action="CurrencyConverter.php" method="get">

Typ het bedrag (in EURO): <input type="text" name ="input" />

Naar Currency:
<select name="dropdown">
    <option value="EUR">EUR</option>
    <option value="USD">USD</option>
</select>

<input type="submit" name="submit" value="Convert" />
</form>
</body>

</html>

<?php

if(isset($_GET['submit']))
{
	$cc_input = $_GET['input'];
	$cc_dropdown = $_GET['dropdown'];
	
	if($cc_dropdown == 'EUR')
	{
		$output = $cc_input * $bedragEuro[0]->bedrag;
		echo "<h1>" . number_format($output,2) . " EURO" . "</h1>";
	}

    else if($cc_dropdown == 'USD')
	{
		$output = $cc_input * $bedragDollar[0]->bedrag;
		echo "<h1>" . number_format($output,2) . " DOLLAR" . "</h1>";
	}

    else if($cc_dropdown == 'GBP')
	{
		$output = $cc_input * 0.847069244;
		echo "<h1>" . number_format($output,2) . " POND" . "</h1>";
	}
}

?>