<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <p>Fill in to create an account.</p>
        <form action="" method="post">
            <div class="row">
                <label for="name">Name</label>
                <div>
                    <input type="text" name="name" id="name" placeholder="Enter your name"><span id="name_error"></span>
                </div>
            </div>
            <div class="row">
                <label for="email">Email</label>
                <div>
                    <input type="text" name="email" id="email" placeholder="Enter your email"><span id="email_error"></span>
                </div>
            </div>
            <div class="row">
                <label for="email">Email</label>
                <div>
                    <input type="text" name="email" id="email" placeholder="Enter your email"><span id="email_error"></span>
                </div>
            </div>
            <div class="row">
                <label for="password">Password</label>
                <div>
                    <input type="password" name="password" id="password" placeholder="Enter your password"><span id="pw_error"></span>
                </div>
            </div>
            <div class="row">
                <label for="reenter_password">Re-Enter Password</label>
                <div>
                    <input type="password" name="reenter_password" id="reenter_password" placeholder="Re-enter your password"><span id="repw_error"></span>
                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit" class="btn signup">Sign Up</button>
                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit" class="btn login">Login</button>
                </div>
            </div>
        </form>
    </div>
    
    <?php
    //$reset = $('input[type=text]').val('');

    //echo $_SERVER['SCRIPT_NAME'];
    //echo $_SERVER['HTTP_HOST'];
    ?>
    <script src="main.js"></script>
</body>
</html>