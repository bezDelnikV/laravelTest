<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="addUser1" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    NAME : <input name="name">
    EMAIL : <input  name="email">
    <input type="file" name="fileToUpload" id="fileToUpload">
    PASSWORD : <input  name="password">
    <input type="submit" name="submit"></input>
</form>

</body>
</html>
