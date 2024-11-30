<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Daftar Buku</title>
</head>

<body>
    <table class="table">
        <a class ="btn btn-primary mt-2" href= "{{ route('book.form') }}">Tambah Buku</a>

        <table class="table table-striped table-bordered border-dark mt-3">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Page_Count</th>
                <th>Author_Name</th>
                <th>Author_Email</th>
                <th>Published_Date</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->page_count }}</td>
                    <td>{{ $book->author_name }}</td>
                    <td>{{ $book->author_email }}</td>
                    <td>{{ $book->published_date }}</td>
                </tr>
            @endforeach
        </table>
        @vite(['resources/js/app.js'])
</body>

</html>
