<!DOCTYPE html>
<html>
<head>
<title>Currency-converter</title>
</head>

<body>
<h1>WebApp: Currency Converter</h1>

<form action="CurrencyConverter" method="get">

Van Currency:
<select name="beginCurrencyDropdown">
    <option value="EUR">EUR</option>
    <option value="USD">USD</option>
    <option value="GBP">GBP</option>
    <option value="INR">INR</option>
    <option value="JPY">JPY</option>
</select>

<input type="text" name ="valutaInput" />

Naar Currency:
<select name="eindCurrencyDropdown">
    <option value="EUR">EUR</option>
    <option value="USD">USD</option>
    <option value="GBP">GBP</option>
    <option value="INR">INR</option>
    <option value="JPY">JPY</option>
</select>

<input type="submit" name="convert" value="Convert" />
</form>
</body>

</html>