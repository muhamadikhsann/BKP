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
                    CRUD Data Pelanggaran - <strong>UPDATE DATA</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="/pelanggaran/update/{{ $pelanggaran->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Kode Pelanggaran</label>
                            <input type="text" name="kode_pelanggaran" class="form-control" placeholder="Masukan Kode Pelanggaran" value="{{ $pelanggaran->kode_pelanggaran }}">

                            @if($errors->has('kode_pelanggaran'))
                                <div class="text-danger">
                                    {{ $errors->first('kode_pelanggaran')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="Masukan Keterangan" value="{{ $pelanggaran->keterangan }}">

                            @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Poin</label>
                            <input type="number" name="poin" class="form-control" placeholder="Masukan Poin" value="{{ $pelanggaran->poin }}">

                            @if($errors->has('poin'))
                                <div class="text-danger">
                                    {{ $errors->first('poin')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/pelanggaran" class="btn btn-primary">Kembali</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>