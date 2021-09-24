    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
            <nav style="height:60px;" class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid" style="margin-left: 100px">
                <a style="margin-top:0" class="navbar-brand"  href="#"><img width="42" height="42" src="image/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-top: 10px">
                        <li>
                            <div class="input-group mb-3" style="margin-top: 8px;margin-left:10px">
                            <input type="text" class="form-control" style="width:600px" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg></button>
                            </div>
                        </li>
                        <li class="nav-item icon" style="margin-left: 20px">
                            <a class="nav-link" href="#"><img width="28px" height="28px" src="image/bx_bxs-cart.png" alt=""></a>
                        </li>
                        <li class="nav-item icon">
                            <a class="nav-link" href="#"><img width="28px" height="28px" src="image/clarity_notification-solid.png" alt=""></a>
                        </li>
                        <li class="nav-item icon">
                            <a class="nav-link" href="#"><img width="24px" height="24px" src="image/bi_chat-dots-fill.png" alt=""></a>
                        </li>
                    </ul>
                    <h5 style="font-size: 15px;margin-right:20px;margin-top:5px ">Welcome, {{ $model->name }}</h5>
                </div>
                </div>
            </nav>
            @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
    </html>