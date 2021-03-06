<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penilaian Ujian</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- MetisMenu CSS -->
    <link href="assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="styleshe et">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('includes.header')

            @include ('includes.sidebar')
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lihat Nilai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Nomor Peserta</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Ranting</th>
        <th>Kyu Lama</th>
        <th>Kyu Baru</th>
        <th>Sabuk</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($karate as $karate)
        <tr>
            <th>{{ $karate->id }}</th>
            <th scope="row">{{ $karate->no_urut }}</th>
            <td>{{ $karate->nama }}</td>
            <td>{{ $karate->ttl }}</td>
            <td>{{ $karate->ranting }}</td>
            <td>{{ $karate->kyu_lama }}</td>
            <td>{{ $karate->kyu_baru }}</td>
            <td>@if (($karate->kyu_baru) === 10)
                    Putih
                @elseif (($karate->kyu_baru) >= 7)
                    Kuning
                @elseif (($karate->kyu_baru) === 6 )
                    Hijau
                @elseif (($karate->kyu_baru) >= 4 )
                    Biru
                @else
                    Cokelat
                @endif

            </td>
            <td><a href="#"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-trash-o"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<a class="btn btn-info" href="{{ URL::to('/download') }}" role="button">Download</a>
</div> 
</div>
<!-- jQuery -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

</body>

</html>