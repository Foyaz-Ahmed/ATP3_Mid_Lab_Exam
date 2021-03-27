<!DOCTYPE html>
<html>
<head>
	<title>Casing Product</title>
</head>
<body>
	<h2>Different type of Casing</h2>
	<a href="/home">back</a>
	<table border=1 cellspacing="0" >
    <tr align="center">
        <th>Component Name</th>
        <th>Manufacturer Review</th>
        <th>Price</th>
    </tr>
    @foreach($casing as $value)
    <tr align="center">
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['manufacturer_review'] }}</td>
        <td>{{ $value['price'] }}</td>
    </tr>
    <tr>
	@endforeach  
	</table>
</body>
</html>