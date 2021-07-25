<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="5">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indodax API</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            overflow: auto;
            max-width: 600px;
            margin: 0 auto;
            padding: 10px;
        }

        th {
            text-align: left;
            font-weight: bold;
        }

        th,
        td {
            width: 100%;
            padding: 10px;
            border: 1px solid gray;
        }

        td {
            font-weight: lighter;
            font-size: 0.8rem;
        }

        .market {
            display: flex;
            align-items: center;
        }

        .market img {
            margin-right: 6px;
        }

        .info {
            margin-bottom: 2em;
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="info">
            <p>Halaman akan di refresh setiap 5 detik.</p>
        </div>
        <table>
            <thead>
                <th>Market</th>
                <th>Harga Terakhir</th>
                <th>Terendah</th>
                <th>Tertinggi</th>
                <th>Vol 24h</th>
            </thead>
            <tbody>
                <div class="currency">
                    @foreach ($data_crypto as $coin)
                    @foreach ($ticker as $price)
                    <tr>
                        <td>
                            <div class="market">
                                <img src="{{ $coin['url_logo_png'] }}" alt="logo" width="30px">
                                <p>
                                    {{ $coin['description'] }}
                                </p>
                            </div>
                        </td>
                        <td>{{ number_format($price[$coin['ticker_id']]['last']) }}</td>
                        <td>{{ number_format($price[$coin['ticker_id']]['low']) }}</td>
                        <td>{{ number_format($price[$coin['ticker_id']]['high']) }}</td>

                    </tr>
                    @endforeach
                    @endforeach
                </div>
            </tbody>
        </table>
    </div>
</body>

</html>