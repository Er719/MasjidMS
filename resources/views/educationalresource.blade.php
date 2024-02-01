@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Your head content here -->
    </head>
    <body>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                @foreach($educationalresources as $educationalresource)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">{{ $educationalresource->name }}</h2>
                            <img class="card-img-top" src="{{ asset('storage/' . $educationalresource->image) }}" alt="{{ $educationalresource->name }}">
                            <p class="card-text">{{ $educationalresource->description }}</p>
                            <p class="card-text"><a href="{{ asset('storage/' . $educationalresource->file) }}" target="_blank">Muat Turun File</a></p>                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5">
                <p class="m-0 text-center text-white">Copyright &copy; Masjid Jamek Tanjung Malim Website 2024</p>
            </div>
        </footer>
    </body>
</html>
@endsection
