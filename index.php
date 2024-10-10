<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Front</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script> 
</head>
<body>
    <h1>Laravel API frontend</h1>

    <div class="container">
        <h2>Get user</h2>
        <form action="/api/user" method="get" id="get-user-form">
            <label for="token">Token</label>
            <br>
            <input type="text" name="token" id="token">
            <br>
            <input type="submit" value="Get">
        </form>
        <div id="user-data"></div>
    </div>
    <br>
    <div class="container">
        <h2>Create post</h2>
        <form action="/api/posts" method="post" id="create-post-form">
            <label for="token">Token</label>
            <br>
            <input type="text" name="token" id="token">
            <br>

            <label for="title">Title</label>
            <br>
            <input type="text" name="title" id="title">
            <br>

            <label for="body">Body</label>
            <br>
            <textarea name="body" id="body"></textarea>
            <br>

            <input type="submit" value="Create">
        </form>
    </div>
    <br>
    <div class="container">
        <h2>Posts</h2>
        <div id="post-data"></div>
    </div>
</body>
</html>