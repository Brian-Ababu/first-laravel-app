<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        <form action="/signup" method="post"> 
            @csrf
            <div>
                <h2>Sign up here!</h2>
                <label for="username">Username</label><br>
                <input type="text" name='name' placeholder="please enter a username"><br>   

                <label for="email">Email</label><br>         
                <input type="text" name='email' placeholder="please enter a valid email address"><br> 

                <label for="phone_no">Phone Number</label><br>         
                <input type="text" name='phone_no' placeholder="please enter a valid phone no"><br> 

                <label for="password">Password</label><br>    
                <input type="password" name='password' placeholder="please enter a strong password"> <br> 

                <label for="country">Country</label><br>
                <select id="country" name="country">
                <option value="default">Choose Country</option>    
                <option value="kenya">Kenya</option>
                <option value="uganda">Uganda</option>
                <option value="nigeria">Nigeria</option>
                </select>
                
                <input type="submit" name="signup" value="Signup"> 
            </div> 
        </form>
        <span><a href="/login">Already have an account? Login here!</a></span>
    </div>

    
</body>
</html>