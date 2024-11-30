<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Form</title>
</head>

<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">
                <label for="form-label">Title</label>
                <input type="form-control" name='title' placeholder="title">
            </div>

            <div class="col-4">
                <label for="form-label">Description</label>
                <input type="form-control" name="description" placeholder="description">
            </div>

            <div class="row g-3">
                <div class="col-4">
                    <label for="form-label">Page Count</label>
                    <input type="form-control" name="page_count" placeholder="Page Count">
                </div>

                <div class="col-4">
                    <label for="form-label">Author Name</label>
                    <input type="form-control" name="author_name" placeholder="Author Name">
                </div>

                <div class="col-4">
                    <label for="form-label">Author Email</label>
                    <input type="form-control" name="author_email" placeholder="Author Email">
                </div>

                <div class="col-4">
                    <label for="form-label">Published Date</label>
                    <input type="form-control" name="published_date" placeholder="Published Date">
                </div>

                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <a class = "btn btn-danger mt-2" href="{{ route('book.store') }}">Kembali</a>
    </form>
    @vite(['resources/js/app.js'])
</body>

</html>
