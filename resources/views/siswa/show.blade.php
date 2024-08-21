<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3>Detail Siswa</h3>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th>NISN</th>
                            <td>{{ $siswa->nisn }}</td>
                        </tr>
                        <tr>
                            <th>NIS</th>
                            <td>{{ $siswa->nis }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $siswa->nama }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>{{ $siswa->SiswaKelas->nama_kelas }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $siswa->alamat }}</td>
                        </tr>
                        <tr>
                            <th>No Telepon</th>
                            <td>{{ $siswa->no_telpon }}</td>
                        </tr>
                        <tr>
                            <th>SPP</th>
                            <td>Rp {{ number_format($siswa->SppSiswa->nominal, 2, ',', '.') }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('siswa.index') }}" class="btn btn-md btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
