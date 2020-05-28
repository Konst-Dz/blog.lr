<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
<p>{{$name}}</p>
<p class="{{$class}}">{{$surname}}</p>

<input type="text" value="{{$value1}}">
<input type="text" value="{{$value2}}">
<input type="text" value="{{$value3}}">

<p style="{{$red}}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Cupiditate deserunt doloribus eaque et fugit similique sint veniam.
    Architecto consequuntur deleniti doloribus,
    eligendi est ipsam quam tenetur veritatis voluptas, voluptatem voluptatibus!</p>

<a href="{{$href}}">{{$text}}</a>

<p>Текущая дата - {{ date('Y-m-d h:i:s',time()) }}</p>
<p>{{$worker['name']}}</p>
<p>{{$worker['surname']}}</p>
<p>{{$worker['salary']}}</p>
<p>В массиве {{'$worker'}} - {{count($worker)}} элементов.</p>
{{isset($city) ? $city : 'moscow'}}

</body>
</html>
