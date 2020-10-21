<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title><?= $judul; ?></title>
    <link rel='stylesheet' type='text/css' href='<?= base_url('assets/mycss/stylebuku.css'); ?>'>
</head>

<body>
    <div id='wrapper' class="coba">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan
                    CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href='<?= base_url() . 'index.php/web' ?> '>Home</a></li>
                    <li><a href='<?= base_url() . 'index.php/web/about' ?> '>About</a></li>
                </ul>
            </nav>
            <div class='clear'></div>
        </header>