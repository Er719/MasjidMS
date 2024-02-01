@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="storage\Masjid Jamek Tanjung Malim.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Masjid Tanjung Malim</h1>
                    <p>Masjid Jamek Tanjung Malim which was built in the 1900s is a mosque located in Tanjung Malim Perak. The mosque was founded by the Sultan of Perak, Almarhum Sultan Iskandar Shah on 15th June 1932. Additional buildings were constructed and officiated by the son of the former Sultan, Al-Marhum Paduka Seri Sultan Idris al-Mutawakkil Alallahi Shah on 3rd August 1975. The congregation of this mosque had history of connection with Institusi Perguruan Sultan Idris, currently known as Universiti Perguruan Sultan Idris (UPSI). UPSI brings the national image to the mosque whenever the students, who came from different parts of the country, became a member of congregation of the mosque.</p>
                </div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Event Masjid</h2>
                            <p class="card-text">Masjid Jamek Tanjung Malim bekerjasama dengan komuniti Tanjung Malim menjalankan pelbagai. Semua ahli komuniti dipersilakan untuk menyertai event-event kita!</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ url('/event') }}">Maklumat Lanjut</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Jawatankuasa Masjid</h2>
                            <p class="card-text">Masjid Jamek Tanjung Malim dipimpini oleh jawatankuasa yang terdiri daripada ahli komuniti Tanjung Malim sendiri. Jom kenali mereka sekarang!</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ url('/jawatankuasa') }}">Maklumat Lanjut</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Profile Kariah</h2>
                            <p class="card-text">Anak-anak kariah Masjid Jamek Tanjung Malim boleh mendaftar maklumat diri kepada sistem e-masjid kini!</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ url('/profile') }}">Maklumat Lanjut</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->  
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Masjid Jamek Tanjung Malim Website 2024</p></div>
        </footer>
    </body>
</html>
@endsection
