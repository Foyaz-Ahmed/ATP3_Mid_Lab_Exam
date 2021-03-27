<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
</head>
<body>
    <a href="{{ route('home') }}">Back |</a>
    <table border=1 cellspacing="0" >
    <tr align="center">
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Type</th>
        <th>Status</th>
        <th>Phone No</th>
        <th>Salary</th>
        <th>DOB</th>
        <th>Action</th>
    </tr>
    @foreach($customer as  $value)
    <tr align="center">
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['Name'] }}</td>
        <td>{{ $value['Email'] }}</td>
        <td>{{ $value['Gender'] }}</td>
        <td>{{ $value['Type'] }}</td>
        <td>{{ $value['Status'] }}</td>
        <td>{{ $value['PhoneNo'] }}</td>
        <td>{{ $value['Salary'] }}</td>
        <td>{{ $value['DOB'] }}</td>
        <td>
            <a href="{{ route('home.delete', $value['id']) }}">Remove Customer</a>
        </td>
    </tr>
    <tr>
    @endforeach  
</table>
</body>
</html>







