<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href='<?= base_url('assets/css/bootstrap.min.css'); ?>'>
    <script src="<?= base_url('assets/bootstrap/js/jquery-3.3.1.min.js') ?>"></script>
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Halaman HTML dengan bootstrap offline</h1>
        <p>Halaman ini responsive untuk semua jenis perangkat</p>
        <div class="btn-group">
            <a class="btn btn-danger" href="<?= base_url('bootstrap'); ?>">Home</a>
            <a class="btn btn-primary" href="<?= base_url('bootstrap'); ?>">Biodata</a>
            <a class="btn btn-primary" href="www.detik.com">News</a>
            <a class="btn btn-info" href="<?= base_url('matakuliah'); ?>">Matakuliah</a>
            <a class="btn btn-warning" href="<?= base_url('Web'); ?>">Web</a>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Kolom pertama</h3>
                <p>Paragraf pertama</p>
                <p>Paragraf kedua</p>
            </div>
            <div class="col-sm-4">
                <h3>Kolom kedua</h3>
                <p>Paragraf pertama</p>
                <p>Paragraf kedua</p>
            </div>
            <div class="col-sm-4">
                <h3>Kolom ketiga</h3>
                <p>Paragraf pertama</p>
                <p>Paragraf kedua</p>
            </div>
        </div>
    </div>

</body>

</html>