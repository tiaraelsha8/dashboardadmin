<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }
        .judul {
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .isi {
            margin: 0 30px;
        }
        .foto {
            float: left;
            margin-right: 20px;
        }
        .ttd {
            text-align: right;
            margin-top: 100px;
            margin-right: 30px;
        }
        .kop-container {
        text-align: center;
        position: relative;
    }

    .kop-logo {
        position: absolute;
        left: 0;
        top: 0;
    }

    .kop-logo img {
        height: 90px;
    }

    .kop-text {
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        line-height: 1.2;
    }

    .kop-subtext {
        font-size: 12px;
        font-weight: normal;
    }

    .garis1 {
        border-top: 3px solid black;
        margin: 5px 0 1px 0;
    }

    .garis2 {
        border-top: 1px solid black;
        margin: 0 0 20px 0;
    }
    </style>
</head>
<body>

    <!-- Data -->
    <table width="100%" style="margin-bottom: 0px;">
        <tr>
            <!-- Logo kiri -->
            <td style="width: 80px;" align="center">
                <img src="{{ public_path('image/logo/logodiskominfo.png') }}" style="height: 75px;">
            </td>
    
            <!-- Teks kanan, agak ke kiri -->
            <td style="text-align: center; padding-right: 37px;">
                <div style="font-size: 25px; font-weight: bold; text-transform: uppercase; line-height: 1.2;">
                    PEMERINTAH KABUPATEN MURA<br>
                    DINAS KOMUNIKASI DAN INFORMATIKA
                </div>
                <div style="font-size: 12px;">
                    Jl. Contoh No.1, Kota Contoh, Provinsi Contoh - Telp. (0711) 1234567 - Kode Pos 12345
                </div>
            </td>
        </tr>
    </table>
    
    <!-- Garis bawah ganda -->
    <hr style="border: 1px solid black; margin: 0;">
    <hr style="border: 2px solid black; margin-top: 1px; margin-bottom: 10px;">
<!-- NOMOR SURAT (Letakkan setelah kop & garis, bukan di dalam <table> logo) -->
    <table width="100%" style="margin-bottom: 10px;">
        <tr>
            <td width="33%"></td> <!-- kiri kosong -->
            <td width="34%" style="text-align: center;">
                <strong>Nomor</strong> : {{ $nomorSurat }}
            </td>
            <td width="33%"></td> <!-- kanan kosong -->
        </tr>
    </table>

    <div class="judul">DATA PEGAWAI</div><br>

    <p style="text-align: right; margin-right: 30px; font-size: 12px;">
        Puruk Cahu, {{ $tanggal }}
    </p><br>

    <div class="isi" style="overflow: auto; margin: 0 30px;">
        <div style="float: right; margin-left: 20px;">
            <img src="{{ public_path('storage/pegawai/' . $pegawai->foto) }}" width="100" style="max-height: 130px; object-fit: cover;">
        </div>
    
        <table style="font-size: 12px;">
            <tr>
                <td><strong>Nama</strong></td>
                <td style="padding: 0 5px;">:</td>
                <td>{{ $pegawai->nama }}</td>
            </tr>
            <tr>
                <td><strong>NIP</strong></td>
                <td style="padding: 0 5px;">:</td>
                <td>{{ $pegawai->nip }}</td>
            </tr>
            <tr>
                <td><strong>Jabatan</strong></td>
                <td style="padding: 0 5px;">:</td>
                <td>{{ $pegawai->jabatan }}</td>
            </tr>
            <tr>
                <td><strong>Bidang</strong></td>
                <td style="padding: 0 5px;">:</td>
                <td>{{ $pegawai->bidang->nama_bidang }}</td>
            </tr>
        </table>
    </div>

    <div class="ttd" style="margin-top: 100px; font-size: 12px;">
        <div style="width: 250px; float: right; text-align: center;">
            <p>Mengetahui,</p>
            <p>Plt. Kepala Dinas Komunikasi, Informatika,</p>
            <p>Statistik dan Persandian</p>
            <p>Kabupaten Murung Raya,</p>
            <br><br><br><br>
            <p><strong><u>{{ $kadis->nama }}</u></strong></p>
            <p>NIP. {{ $kadis->nip }}</p>
        </div>
    </div>
</body>
</html>
