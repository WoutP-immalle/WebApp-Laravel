<!DOCTYPE html>
<html>
<head>
<title>Currency-converter</title>
</head>

<body>
<h1>WebApp: Currency Converter</h1>

<form action="CurrencyConverter" method="get">

Kies het bedrag:
<select name="currencyDropdownVan">
    <option value="EUR">EUR</option>
    <option value="USD">USD</option>
    <option value="GBP">GBP</option>
</select>

<input type="text" name ="valutaInput" />

Naar Currency:
<select name="currencyDropdownNaar">
    <option value="EUR">EUR</option>
    <option value="USD">USD</option>
    <option value="GBP">GBP</option>
</select>

<input type="submit" name="convert" value="Convert" />
</form>
</body>

</html>

