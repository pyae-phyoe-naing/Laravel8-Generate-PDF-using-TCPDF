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
    <h3 class="text-center">Generate a PDF using TCPDF in laravel - Learn Infinity</h3>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <table class="table">
                    <tr>
                        <td>
                            <div class="form-group">
                                <a href="{{ url('/sample-pdf') }}" class="btn btn-primary">Generate Simple PDF</a>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <a href="{{ url('/save-pdf') }}" class="btn btn-primary">Save Sample PDF</a>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <a href="{{ url('/download-pdf') }}" class="btn btn-danger">Download Sample PDF</a>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <a href="{{ url('/html-to-pdf') }}" class="btn btn-success">HTML To PDF</a>
                            </div>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
  </div>
</body>
</html>
