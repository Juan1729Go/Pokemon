<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Pokemon</title>
</head>
<body>
    <div class="welcome">
        <h1>Register as a Pokemon trainer</h1>
    </div>

    <div class="boxLog">
        <div class="logTitle">
            <h2>Enter your details</h2>
        </div>

        <div class="logForm">
            <form action="../services/auth.php" method="post">
                <input class="dateReceive" type="text" name="name" placeholder="Name" autocomplete="off" required>
                <br>
                <input class="dateReceive" type="email" name="email" placeholder="Email" autocomplete="off" required>
                <br>
                <input class="dateReceive" type="number" name="phone" placeholder="Phone" autocomplete="off" required> 
                <br>
                <input class="dateReceive" type="password" name="password" placeholder="Password" autocomplete="off" required>
                <br>
                <button class="sumitLogin" type="submit">Submit</button>
            </form>  
        </div>
    </div>
</body>
</html>
