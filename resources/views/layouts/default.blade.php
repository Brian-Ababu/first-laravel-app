<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <style>
        .top-nav li{
            display: inline;
            border-radius: 5px;
            background-color: #d2f3c3;
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

        .footer {
        background-color:  #f2f2f2;
        align-content: flex-end;
        text-align: center;
        padding: 10px;

        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="top-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/">About</a></li>
        <li><a href="/">Services</a></li>
        <li><a href="/login">Log In</a></li>
        <li><a href="/signup">Sign Up</a></li>
    </div>

    <!-- Content -->
    @yield('content')

    <!-- footer -->
    <div class="footer">
        <p>Designed by @Ababu. Copyright 2023</p>
        <p></p>
    </div>
    
</body>
</html>