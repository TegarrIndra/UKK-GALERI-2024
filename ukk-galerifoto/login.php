<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <style>
        .box{
            margin: 200px;
            width: 300px;
            border: 2px solid black;
            border-radius: 30px;
         
           
        }

        .login{
            width: 150px;
            border-radius: 20px;
            background-color:  rgb(0, 152, 253);
          
        }

        input{
            margin: 5px;
            text-align: center;
        }

        
        </style>
</head>
<body>
    <center>
        <div class="box">
            <div class="login">
    <h1>Login</h1>
    </div>

    <form action="proses-login.php" method="post">
    <table>
    
        
        <input type="text" name="Username" placeholder="Username">
    
    
        <input type="password" name="Password" placeholder="Password" required>
   

    <td></td>
    <td><input type="submit" value="Login"></td>

    </table>
    </form>
    

    <p>Belum Punya Akun? <a href="register.php">Register</a></p>
    <p>Kembali ke <a href="index.php">Halaman Utama</a></p>
    </div>
    </center>
</body>
</html>