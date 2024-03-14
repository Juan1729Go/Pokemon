
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Pokemon</title>

    <link rel="stylesheet" href="style/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>
<body>
    <div class="welcome">
        <h1>Welcome Pokemon Trainer</h1>
    </div>
    <div class="box">

        <div class="boxLog">
            <div class="logTitle">
                <h2>Enter your Credentials</h2>
            </div>
            <form class="logForm" action="../services/login.php" method="post">
                <div class="formDate">
                    <input class="dateReceive" type="text" name="email" placeholder="Email" ></input>
                    <input class="dateReceive" type="password" name="password" placeholder="Password" ></input>
                </div>
                <div class="formSumit">
                    <input class="sumitLogin" type="submit" value="Login">
                    
                </div>
                
            </form>
            <div class="boton">
               <a href="../client/login.php" class="bo"><input class="sumitLogin" type="submit" value="Check in"></a>  
            </div>
            
        </div>
    </div>
</body>
</html>