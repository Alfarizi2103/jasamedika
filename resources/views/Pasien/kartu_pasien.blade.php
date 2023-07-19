<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kartu Pasien - {{ $data->id_pasien }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }

        .patient-info {
            margin: 20px 0;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .patient-info h3 {
            margin: 0;
        }

        .patient-info p,
        .patient-info small {
            margin: 5px 0;
        }

        .address {
            font-size: 14px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            padding: 10px;
            background-color: #f5f5f5;
            border-top: 1px solid #ccc;
        }

        .patient-info {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Kartu Pasien</h1>
        <h3>{{ $data->nama }} - {{ $data->id_pasien }}</h3>
    </div>

    <div class="patient-info">
        <p>{{ $data->no_telp }} | {{ $data->tgl_lahir }} | {{ $data->jenis_kelamin }}</p>
        <div class="address">
            <p>{{ $data->alamat }}, RT {{ $data->rt }}, RW {{ $data->rw }},</p>
            <p>{{ $data->kelurahan->first()->kelurahan }},</p>
            <p>{{ $data->kelurahan->first()->kecamatan }},</p>
            <p>{{ $data->kelurahan->first()->kota }}</p>
        </div>
    </div>

    <div class="footer">
        <small>&copy; {{ date('Y') }} Jasamedika. All rights reserved.</small>
    </div>
</body>

</html>
