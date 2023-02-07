<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Wmsu DPO</title>
    <style>
        .crimson {
            background-color: #DC143C; 
        }

        .links:hover {
            color: white;
            opacity: 0.5;
        }

        .logo {
            max-width: 10%;
        }

    </style>
</head>

<body>
    
    <header class="navbar navbar-expand-lg crimson">

<nav class="d-flex flex-column container-xxl" >

    <span class="">
        <img src="storage/images/WMSU.png" class="logo" alt="" srcset="">
            </span>

        <div class="">

            <a href="" class="navbar-brand fs-6 p-1 links">Privacy Policies</a>
            <a href="" class="navbar-brand fs-6 hover: p-1 links">Contact DPO</a>
            <a href="" class="navbar-brand fs-6 hover: p-1 links">Info</a>
            <a href="" class="navbar-brand fs-6 hover: p-1 links">Advisory Opinions</a>
        </div>

</nav>
    </header>
 
    
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
</body>
</html>