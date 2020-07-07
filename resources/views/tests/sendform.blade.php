{{--
<form action="" method="POST">
    {{ csrf_field() }}
    <input type="number" name="one"><br>
    <input type="number" name="two"><br>
    <input type="number" name="three"><br>
    <input type="submit"><br>
</form>
--}}
<form action="" method="post" >
    {{ csrf_field() }}
    <input type="text" name="login"><br>
    <input type="text" name="pass"><br>
    <input type="text" name="name"><br>
    <input type="text" name="email"><br>
    <input type="submit"><br>
</form>
