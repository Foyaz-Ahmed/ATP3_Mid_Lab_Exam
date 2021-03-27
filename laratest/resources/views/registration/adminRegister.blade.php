<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <legend>Registration form</legend>
            <table>
                <tr>   
                    <td> User Id:</td>
                    <td><input type="int" name="id"></td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="text" name="cpassword"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Female">Others
                    </td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type="text" name="status"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type="text" name="salary" value=""></td>
                </tr>
                <tr>
                    <td>Profile Image:</td>
                    <td><input type="file" name="myfile"></td>
                </tr>
                <tr>
                    <td>DOB:</td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td><br><input type="submit" name="submit" value="Register"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>



    
