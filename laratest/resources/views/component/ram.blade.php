<!DOCTYPE html>
<html>
<head>
	<title>Ram list</title>
</head>
<body>

	<a href="/home">back</a>
    <h2>Different types of Ram</h2>
	<table border=1 cellspacing="0" >
    <tr align="center">
        <th>Component Name</th>
        <th>Manufacturer Review</th>
        <th>Price</th>
        <th>Review</th>
        <th>Add Cart</th>
    </tr>
    @foreach($ram as  $value)
    <tr align="center">
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['manufacturer_review'] }}</td>
        <td>{{ $value['price'] }}</td>
        <td>
            <button><a href="{{ route('home.ram.review', $value['name']) }}">Give Review</a></button>
        </td>
        <td><button><a href="#">Add</a></button></td>
    </tr>
    <tr>
	@endforeach  
	</table>
</body>
</html>