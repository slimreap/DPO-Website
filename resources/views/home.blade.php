@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Document</title>
</head>
<body>
    @if (Auth::user())
    {{Auth::user()->name}}
    <br>

    @endif


<a href="{{route('logout')}}">logout</a>

</form>
</body>
</html>