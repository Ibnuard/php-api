<html>
<head>
    <title>Input Data</title>
</head>
<body>
  <form method="POST" action="post.php">
    Id : <input type="text" name="id" /><br />
    Nama : <input type="text" name="username" /><br />
    Password : <input type="text" name="pass" /><br />
    <tr><td>Level</td><td>
                        <input type="radio" name="level" value="admin">Admin
                        <input type="radio" name="level" value="user">User
                        <input type="radio" name="level" value="guest">Guest
                    </td></tr><br/>
    Full Name : <input type="text" name="fullname" /><br />
    <input type="submit" value="Daftar" name="daftar" />
  </form>
</body>
</html>