<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="{{asset('/admin/img/favicon-2.png')}}" rel="icon">
        <link href="{{asset('/admin/img/favicon-2.png')}}" rel="apple-touch-icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('/admin/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .fetched_users_div .active {
                background-color: green;
                color: white;
            }

            .fetched_users_div .inactive {
                background-color: red;
                color: white;
            }

            .fetched_users_div button {
                padding: 5px 10px;
                border: none;
                cursor: pointer;
                margin-right: 10px;
            }
        </style>

    </head>
    <body class="sb-nav-fixed">
        
    
    <main id="main">
            @yield('content')
        </main>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/admin/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('/admin/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('/admin/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
