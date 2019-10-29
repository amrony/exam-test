<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Techno System</title>
</head>
<body>

<div class="container-fluid">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <a class="navbar-brand" href="#">
{{--                <img class="rounded-circle" src="{{ asset('/front-end/image/logo.jpg') }}" height="60" width="100">--}}
                <img class="rounded-circle" src="{{ url('storage/company',$company->image) }}" height="60" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-white">School Registration</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('login') }}">Login</a>
                                <a class="dropdown-item" href="{{ url('/register') }}">Sign Up</a>
                            </div>
                        </li>
                    </ul>



                </form>
            </div>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="col-md-12 p-4">
            <div class="row">
                <div class="col-7">
                    <h3 class="bg-success text-center text-white p-2" style="border-radius: 8px;">Add Student</h3><br>
                    <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2><br>
                    <form action="{{ route('student-add') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Blood Group</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="blood_group">
                            </div>
                        </div>

                        <input type="hidden" class="form-control" name="is_approve" value="0">

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="address"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Select School</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="user_id" required="required">
                                    <option>--Select Category--</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->school_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-5">
                    <img src="{{ asset('/front-end/image/home.jpg') }}" width="100%" height="500px">
                </div>
            </div>

{{--       <img src="{{ asset('/front-end/image/home.jpg') }}" width="100%">--}}
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="bg-secondary" style=""></div>
        <div class="col-md-12 bg-success p-4">
{{--            <img class="rounded-circle" src="{{ asset('/front-end/image/logo.jpg') }}" height="60" width="100">--}}
            <img class="rounded-circle" src="{{ url('storage/company',$company->image) }}" height="60" width="100">
            <h3>{{ $company->name }}</h3>
            <p>{{ $company->email }}</p>
            <p>{{ $company->number }}</p>
            <p>{{ $company->address }}</p>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



