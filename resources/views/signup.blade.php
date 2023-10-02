<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    @extends('layouts.default')
    @section('content')
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
    @endsection
  
</body>
</html>