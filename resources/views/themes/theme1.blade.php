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
            max-height: 15%
        }
        .logo-w {
            max-width: 10%;
        }

    </style>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-md crimson">
        <div class="container-fluid">

            <span class="d-inline-flex">
                <img src="storage/images/WMSU.png" class="logo" alt="">
                
                <div class="flex-column align-baseline">
                    <p class="">Western Mindanao State University</p>
                
                    <p class="">Data Protection Office</p>
                </div>


                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target='#navmenu'>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </span>



        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Privacy Policies</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Info Section</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Contact DPO</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Advisory Opinions</a>
                </li>
            </ul>
        </div>

        </div>
    </nav>
 
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>