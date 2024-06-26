<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laporan Data Pasien</title>

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-12">




                <center>

                    <h2>{{ $judul1 }}</h2>

                </center>




                <table class="table table-bordered">

                    <thead>

                        <tr>

                            <td>ID</td>

                            <td>Kode Pasien</td>

                            <td>Nama Pasien</td>

                            <td>Jenis Kelamin</td>

                            <td>Status</td>

                            <td>Alamat</td>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($pasien as $b)

                            <tr>

                                <td>{{ $b->id }}</td>

                                <td>{{ $b->kode_pasien }}</td>

                                <td>{{ $b->nama_pasien }}</td>

                                <td>{{ $b->jenis_kelamin }}</td>

                                <td>{{ $b->status }}</td>

                                <td>{{ $b->alamat }}</td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

                <h5>Mengetahui</h5>

                <br>

                <br>

                <br>

                <h5>Jessie Anggasta</h5>




            </div>

        </div>

    </div>

</body>

</html>