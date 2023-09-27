<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .top-nav li{
            display: inline;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        a:link {
            text-decoration: none;
        }


        input[type=text], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=password], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 50% ;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
    </style>
</head>
<body>
    <div class="top-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/">About</a></li>
        <li><a href="/">Services</a></li>
        <li><a href="/login">Log In</a></li>
        <li><a href="/signup">Sign Up</a></li>
    </div>
    
    <div>
        <form action=""> 
            <div>
                <h2>Log In here!</h2>

                <label for="email">Email</label><br>         
                <input type="text" name='email' placeholder="please enter your email address"><br> 

                <label for="password">Password</label><br>    
                <input type="password" name='password' placeholder="please enter your password"> <br> 
                
                <input type="submit" name='login'> 
            </div>
        </form>
        <span><a href="signup.blade.php">Don't have an account? Signup here!</a></span>
    </div>

    
</body>
</html>