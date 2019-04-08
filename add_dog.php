<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Professional Dog Mom</title>
    <meta name="description" content="Dog Mom">
    <meta name="author" content="IS495 Group One">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <style>
        body,
        html {
            height: 100%;
        }

        .page-border {
            border-width: 6px !important;
            border-color: #ADADAD !important;
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 30px;
            font-size: 10px;
            color: #CECCCC;
        }
    </style>
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-2 border-right page-border" style="background-color:#474646">
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="prodogmomlogoonly.jpg" alt="ProDogMom Logo" width="30" height="30"
                            class="d-inline-block align-top">
                        Pro Dog Mom
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Client List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dog List</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>

                <div class="row">
                    <div>
                        <h1 class="pl-5">Add New</h1>
                        <a href="<?php echo ROOT_URL; ?> " class="pl-5">Back</a>
                    </div>
                    <div class="ml-5 d-block pr-5 mt-5">
                        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?> ">

                            <div class="form-group">
                                <label class="font-weight-bold">Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="font-weight-bold pt-1">Fixed:</label> <br>
                                <input type="radio" name="fixstatus" value="yes" class="form-check-input ml-2" checked> Yes
                                <br>
                                <input type="radio" name="fixstatus" value="no" class="form-check-input ml-2"> No
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Age:</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="pt-1 font-weight-bold">Chip Status:</label><br>
                                <input type="radio" name="chipstatus" value="1" class="form-check-input ml-2 align-middle">1<br>
                                <input type="radio" name="chipstatus" value="2" class="form-check-input ml-2 align-middle">2
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="pt-1 font-weight-bold">Client First Name:</label>
                                        <input type="text" name="firstname" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="pt-1 font-weight-bold">Client Last Name:</label>
                                        <input type="text" name="lastname" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="pt-1 font-weight-bold">State:</label>
                                <input type="text" name="state" class="form-control">
                            </div>
                            <input type="submit" name="submit" value="Submit" class="btn-submit mx-auto d-block">
                        </form>
                    </div>
                </div>
                <div id="footer" class="mx-auto d-block text-center border-top pt-1">
                    Developed by IS495 Students
                </div>
            </div>
            <div class="col-md-2 border-left page-border" style="background-color:#464747">
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>