{{$text}}
<form action="">
    <input type="text" name="text">
    <input type="submit">
</form>
{{$num}}
<form action="">
    <input type="number" name="num">
    <input type="submit">
</form>

@if($sum)
    {{$sum}}
@else
<form action="">
    <input type="number" name="sum">
    <input type="number" name="hum">
    <input type="submit">
</form>
@endif

<form action="/test/result">
    <input type="number" name="1">
    <input type="number" name="2">
    <input type="number" name="3">
    <input type="submit">
</form>
