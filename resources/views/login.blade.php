<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
 @extends('layouts.default')

 @section('content')

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
    <span><a href="/signup">Don't have an account? Signup here!</a></span>
</div>

 @endsection
    
</body>
</html>