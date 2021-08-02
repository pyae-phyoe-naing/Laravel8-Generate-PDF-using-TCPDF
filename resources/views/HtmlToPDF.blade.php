<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <div class="container my-5">
        <div class='row justify-content-center'>
            <div class='col-md-8'>
                <h1>Generate a PDF using TCPDF in laravel </h1>
                <h4>by<br />Learn Infinity</h4>

                <table border="1" width="100%" cellpadding="10">
                    <tr>
                        <th width="10%">SNo.</th>
                        <th width="40%">Name</th>
                        <th width="50%">Email</th>
                    </tr>

                    @for ($i = 1; $i <= 15; $i++)

                        <tr>
                            <td align="center">{{ $i }}</td>
                            <td>User {{ $i }}</td>
                            <td>useremail{{ $i }}@li.com</td>
                        </tr>

                    @endfor
                </table>
            </div>
        </div>

    </div>
</body>

</html>
