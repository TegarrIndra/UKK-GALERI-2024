<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        .box{
            margin: 200px;
            width: 350px;
            
            border: 2px solid black;
            border-radius: 30px;
            background-color: g;
         
        }

        .register{
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
    
    <div class="register">
    <h1>Register</h1>
    </div>

    <form action="proses-register.php" method="post">
    <table>
    
        
        <input type="text" name="Username" placeholder="Username" required>
    <br>
     

        <input type="password" name="Password" placeholder="Password" required>
    
    <br>
   
       
        <input type="email" name="Email" placeholder="Email" required>
    
    
    <br>
        
        <input type="text" name="NamaLengkap" placeholder="Nama Lengkap" required>
    
    
    <br>
        
        <input type="text" name="Alamat" placeholder="Alamat" required>
    

    <td></td>
    <td><input type="submit" value="Register"></td>
    </table>
    </form>
    <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
   



    
</div>
    </center>
</body>
</html>