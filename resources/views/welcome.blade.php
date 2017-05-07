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
