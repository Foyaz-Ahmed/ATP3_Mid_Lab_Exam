<!DOCTYPE html>
<html>
<head>
	<title>Storage list</title>
</head>
<body>

	<a href="/home">back</a>
    <h2>Different types of Storage</h2>
	<table border=1 cellspacing="0" >
    <tr align="center">
        <th>Component Name</th>
        <th>Manufacturer Review</th>
        <th>Price</th>
        <th>Review</th>
        <th>Add cart</th>
    </tr>
    @foreach($storage as  $value)
    <tr align="center">
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['manufacturer_review'] }}</td>
        <td>{{ $value['price'] }}</td>

        <td>
            <button><a href="{{ route('home.storage.review', $value['name']) }}">Give Review</a></button>
        </td>
        <td>
            <button><a href="#">Add</a></button>
        </td>
    </tr>
    <tr>
	@endforeach  
	</table>
</body>
</html>