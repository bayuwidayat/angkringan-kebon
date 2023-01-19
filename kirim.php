<?php
//------ silahkan ubah nilai nomor wa owner di baris ke-3 -------
$wa_owner = '6282225227865';

// ---------jangan udah kode berikut ini ------------

if (isset($_POST['submit'])) {
    $nama = urlencode('Nama : ' . $_POST['nama']);
    $email = urlencode('Email : ' . $_POST['email']);
    $pesan = urlencode('Pesan : ' . $_POST['pesan']);

    $no_wa_a = substr($_POST['no_wa'], 0, 2);
    if ($no_wa_a == '08') {
        $no_wa = substr_replace($_POST['no_wa'], '628', 0, 2);
    } else {
        $no_wa = $_POST['no_wa'];
    }

    $nowa = urlencode('No WA : ' . $no_wa);

    $msg = $nama . '%0A' . $email . '%0A' . $nowa . '%0A' . $pesan;
    header('location: https://wa.me/' . $wa_owner . '?text=' . $msg, true, 301);
    exit();
} else {
    header('location:index.html');
}
