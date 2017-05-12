<!DOCTYPE html>
<html>
<head>
<title>Currency-converter</title>
</head>

<body>
<h1>WebApp: Currency Converter</h1>

<form action="CurrencyConverter" method="get">

Typ het bedrag (in EURO): <input type="text" name ="valutaInput" />

Naar Currency:
<select name="currencyDropdown">
    <option value="EUR">EUR</option>
    <option value="USD">USD</option>
    <option value="GBP">GBP</option>
</select>

<input type="submit" name="convert" value="Convert" />
</form>
</body>

</html>

