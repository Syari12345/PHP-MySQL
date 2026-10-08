<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital School</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="form-signin">
        <form action="register.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Emri" name="emri" id="emri">
                <label for="emri"></label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                <label for="username"></label>
            </div>


            <div class="form-floating">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                <label for="email"></label>
            </div>


               <div class="form-floating">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                <label for="password"></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Roli" name="roli" id="roli">

                <label for="roli"></label>
            </div>


            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me">Remember Me
            </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Signup</button>
            <span>Already have an Account: <a href="login.php" style="color:red"></a></span>
            
        </form>
    </main>
</body>



