<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border=1 cellspacing="0"  cellpadding="0">
    	<tr>
    		<td colspan="2">
    			<h1>Welcome {{ session('name') }}!</h1>
    		</td>
    	</tr>
    	<tr height="400px">
    		<td colspan="">
    			<h2>Componenets</h2>
                <ul>
                    <li><a href="{{ route('home.customerlist') }}">CustomerList</a></li>
			        <li><a href="{{ route('home.ram') }}">Ram</a><br></li>
    			    <li><a href="{{ route('home.casing') }}">Casing|</a><br></li>
    			    <li><a href="{{ route('home.storage') }}">Storage</a></br>

                        <ul>
                            <li><a href="{{ route('home.storage.hard_disk') }}">Hard Disk</a></li>
                            <li><a href="{{ route('home.storage.ssd') }} ">SSD</a></li>
                            <li><a href="{{ route('home.storage.portable_storage') }}">Portable Storage</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('home.graphics_card') }}">Graphics Card</a></br></li>
                    <li><a href="{{ route('home.monitors') }}">Monitors</a></br></li>
                    </ul>
                    <a href="/logout">Logout</a></br>
    		</td>
    		<td width="600px"></td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			@copyright from computerbazar.com
    		</td>

    	</tr>
    </table>
</body>
</html>