@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Donation page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Page Content-->
        <div class="container py-0 px-4 px-lg-5">
            <div class="container">
                <form class="well form-horizontal" action="{{ route('donation.store') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- Add the CSRF token -->
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <!-- Form Name -->
                    <h1 class="font-weight-light">Dermaan Masjid Tanjung Malim</h1>
    
                    <!-- QR Code Image -->
                    <div class="col-md-7">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('storage/QR code.png') }}" alt="QR Code" width="300" height="300" />
                    </div>

                    <div class="navbar-brand"><strong>Sila Scan QR untuk membuat dermaan</strong></div><br>
    
                    <!-- Amount input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"><strong>Jumlah</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input name="amount" placeholder="RM 0.00" class="form-control" type="number" required>
                            </div>
                        </div>
                    </div>
    
                    <!-- Receipt input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"><strong>Resit</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                <input name="receipt" class="form-control" type="file" accept="image/*" required>
                            </div>
                        </div>
                    </div>
    
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning"><strong>Hantar</strong><span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div><br><br><br><!-- /.container -->
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Masjid Jamek Tanjung Malim Website 2024</p></div>
        </footer>
    </body>
</html>
@endsection
