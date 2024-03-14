
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Pokemon</title>
</head>
<body>
    <div class="welcome">
        <h1>Welcome Pokemon Trainer</h1>
    </div>
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
        <a href="../client/login.php"><button class="submitLogin" >Check In</button></a> 
    </div>
</body>
</html>