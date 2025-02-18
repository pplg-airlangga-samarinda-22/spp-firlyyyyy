<?php
$hostname = 'localhost';
$username = 'firly';
$password = 'firly';
$database = 'spp';

$koneksi = new mysqli($hostname, $username, $password, $database);

if ($koneksi -> connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
} else {
    echo('koneksi berhasil');
}