<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | DataTables</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Siswa - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="/siswa/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>NIS</label>
                            <input type="number" name="nis" class="form-control" placeholder="Masukan NIS Siswa">

                            @if($errors->has('nis'))
                                <div class="text-danger">
                                    {{ $errors->first('nis')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Siswa">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Rombel</label>
                            <select class="form-control" name="rombel" placeholder="Masukan Rombel Siswa">
                            <option>RPL 2</option>
                            <option>APK 2</option>
                            <option>BDP 2</option>
                            <option>HTL 2</option>
                            <option>TKJ 2</option>
                            </select>

                            @if($errors->has('rombel'))
                                <div class="text-danger">
                                    {{ $errors->first('rombel')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Rayon</label>
                            <select class="form-control" name="rayon" placeholder="Masukan Rayon Siswa">
                            <option>Cibedug 2</option>
                            <option>Ciawi 2</option>
                            <option>Cisarua 2</option>
                            <option>Cicurug 2</option>
                            <option>Tajur 2</option>
                            </select>

                            @if($errors->has('rayon'))
                                <div class="text-danger">
                                    {{ $errors->first('rayon')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/siswa" class="btn btn-primary">Kembali</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>