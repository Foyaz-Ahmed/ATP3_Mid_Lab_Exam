<!DOCTYPE html>
<html>
<head>
	<title>Hard Disk list</title>
</head>
<body>

	<a href="/home">back</a>
    <h2>Different types of Portable  Storage</h2>
	<table border=1 cellspacing="0" >
    <tr align="center">
        <th>Component Name</th>
        <th>Manufacturer Review</th>
        <th>Price</th>
        <th>Brand</th>
    </tr>
    @foreach($pd as  $value)
    <tr align="center">
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['manufacturer_review'] }}</td>
        <td>{{ $value['price'] }}</td>
        <td>{{ $value['brand'] }}</td>

    </tr>
    <tr>
	@endforeach  
	</table>
</body>
</html>