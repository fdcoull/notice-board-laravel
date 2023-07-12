<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <h3>You are logged in.</h3>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>
    <div style="border: 3px solid black">
        <h3>Create new post</h3>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title">
            <textarea placeholder="Type post here..." name="body"></textarea>
            <button>Post</button>
        </form>
    </div>
    @else
    <div style="border: 3px solid black">
        <h3>Sign up</h3>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="Username" name="name">
            <input type="text" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black">
        <h3>Login</h3>
        <form action="/login" method="POST">
            @csrf
            <input type="text" placeholder="Username" name="loginName">
            <input type="password" placeholder="Password" name="loginPassword">
            <button>Login</button>
        </form>
    </div>
    @endauth


</body>
</html>