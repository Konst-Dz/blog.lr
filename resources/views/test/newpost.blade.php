<form action="/result/" method="POST">
    {{ csrf_field() }}
    <input type="text" name="text">
    <input type="submit">
</form>
