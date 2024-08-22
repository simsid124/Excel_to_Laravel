<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Excel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 mt-5">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="p-5 border-2 border border-secondary rounded">
                    <h2>Import Excel into Laravel</h2>

                    <form action="{{ url('study_scheme/import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label>Select File</label>
                        <input class="form-control" type="file" name="import_file" />
                        <div class="mt-5 text-center">
                            <button type="submit" class="btn btn-primary">IMPORT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
