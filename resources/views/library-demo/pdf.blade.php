<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .date {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $title }}</h1>
    </div>
    <div class="date">
        Tanggal: {{ $date }}
    </div>
    <div class="content">
        <p>Ini adalah contoh dokumen PDF yang di-generate menggunakan DomPDF.</p>
    </div>

    <table border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@gmail.com</td>
                <td>Jl. Sudirman No. 123</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Doe</td>
                <td>jane@gmail.com</td>
                <td>Jl. Thamrin No. 456</td>
            </tr>
        </tbody>
</body>
</html>
