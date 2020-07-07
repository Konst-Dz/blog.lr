<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My form</title>
</head>
<body>

<form action="result" method="post"> {{ csrf_field() }}
    <input type="text" name="res"><br>
    <input type="submit"><br>
</form>

</body>
</html>
