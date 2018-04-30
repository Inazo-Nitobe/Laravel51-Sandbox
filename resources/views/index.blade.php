<html>
<head>
    <title> test </title>
</head>
<body>
<form action="{{ url('/') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="param1"></input>
    <input type="submit" value="send"></input>
</form>
{{ $param1 }}
</body>
</html>
