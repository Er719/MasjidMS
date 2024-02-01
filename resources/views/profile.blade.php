@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Page Content-->
        <div class="container py-0 px-4 px-lg-5">
            <div class="container">
                <form class="well form-horizontal" action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- Add the CSRF token -->
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <!-- Form Name -->
                    <h1 class="font-weight-light">Profile</h1>
                    <!-- Kad Pengenalan input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Nombor Kad Pengenalan</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input name="no_kad_pengenalan" placeholder="000000000000" class="form-control" type="string" required>
                            </div>
                        </div>
                    </div>
                    <!-- Kewarganegaraan input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Kewarganegaraan</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                <select id="kewarganegaraan" name="kewarganegaraan">
                                    <option value="Warganegara">Warganegara</option>
                                    <option value="Bukan Warganegara">Bukan Warganegara</option>
                                    <option value="Penduduk Tetap">Penduduk Tetap</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Alamat dalam Kad Pengenalan input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Alamat Dalam Kad Pengenalan</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input name="alamat_dalam_kad_pengenalan" placeholder="......" class="form-control" type="string" required>
                            </div>
                        </div>
                    </div>
                    <!-- Alamat Tempat Tinggal Sekarang input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Alamat Tempat Tinggal Sekarang</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input name="alamat_tempat_tinggal_sekarang" placeholder="......" class="form-control" type="string" required>
                            </div>
                        </div>
                    </div>
                    <!-- No. Telefon input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Nombor Telefon</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input name="no_telefon" placeholder="......" class="form-control" type="string" required>
                            </div>
                        </div>
                    </div>
                    <!-- Status Perkahwinan input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Status Perkahwinan</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                <select id="status_perkahwinan" name="status_perkahwinan">
                                    <option value="Bujang">Bujang</option>
                                    <option value="Sudah Berkahwin">Sudah Berkahwin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Jenis Pemilikan Kediaman input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Jenis Pemilikan Kediaman</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                <select id="jenis_pemilikan_kediaman" name="jenis_pemilikan_kediaman">
                                    <option value="Menyewa">Menyewa</option>
                                    <option value="Rumah Sendiri">Rumah Sendiri</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Kategori Pekerjaan input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Kategori Pekerjaan</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                <select id="kategori_pekerjaan" name="kategori_pekerjaan">
                                    <option value="Pengurus">Pengurus</option>
                                    <option value="Profesional">Profesional</option>
                                    <option value="Juruteknik dan Profesional Bersekutu">Juruteknik dan Profesional Bersekutu</option>
                                    <option value="Pekerja Sokongan Perkeranian">Pekerja Sokongan Perkeranian</option>
                                    <option value="Pekerja Perkhidmatan dan Jualan">Pekerja Perkhidmatan dan Jualan</option>
                                    <option value="Pekerja Kemahiran Pertanian, Perhutanan, Penternakan">Pekerja Kemahiran Pertanian, Perhutanan, Penternakan</option>
                                    <option value="Pekerja Kemahiran dan Pekerja Pertukangan yang Berkaitan">Pekerja Kemahiran dan Pekerja Pertukangan yang Berkaitan</option>
                                    <option value="Operator Mesin, Loji dan Pemasang">Operator Mesin, Loji dan Pemasang</option>
                                    <option value="Pekerja Asas">Pekerja Asas</option>
                                    <option value="Angkatan Tentera">Angkatan Tentera</option>
                                    <option value="Pesara">Pesara</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Surau Kariah input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Surau Kariah</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                <select id="surau_kariah" name="surau_kariah">
                                    <option value="Surau Kg Simpang Empat">Surau Kg Simpang Empat</option>
                                    <option value="Surau Kg Lubuk Salak">Surau Kg Lubuk Salak</option>
                                    <option value="Surau Kg Ketoyong">Surau Kg Ketoyong</option>
                                    <option value="Surau Kg Berop">Surau Kg</option>
                                    <option value="Surau Kg Kubu">Surau Kg Kubu</option>
                                    <option value="Surau Kg Mogah">Surau Kg Mogah</option>
                                    <option value="Surau Khairiah, Taman Hijau">Surau Khairiah, Taman Hijau</option>
                                    <option value="Surau Hidayah, Jalan Mustafa Raja Kamala">Surau Hidayah, Jalan Mustafa Raja Kamala</option>
                                    <option value="Surau Annur, Taman Wangsa">Surau Annur, Taman Wangsa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Bilangan Isi Rumah input -->
                    <div class="form-group">
                        <label class="col-md-4 control-label py-2"><strong>Bilangan Isi Rumah</strong></label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <select id="bilangan_isi_rumah" name="bilangan_isi_rumah">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
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
