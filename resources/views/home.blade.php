<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: 3px solid black">
        <h3>Sign up</h3>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="Username">
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
            <button>Register</button>
        </form>
    </div>
</body>
</html>