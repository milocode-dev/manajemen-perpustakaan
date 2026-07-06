<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1>Tabel peminjaman buku perpustakaan sekolah.</h1>

    <table border="1">
        <tr>
            <td>Judul</td>
            <td>Penulis</td>
            <td>Tahun</td>
            <td>Dipinjam Oleh</td>
            <td>Aksi</td>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->tahun }}</td>
                <td>{{ $book->members->nama }}</td>
                <td>
                    <a href="{{ route('edit.book', $book->id) }}">Edit</a>

                    <form action="{{ route('delete.book', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        <a href="{{ route('create.book') }}">Add new data +</a>
    </table>
</body>
</html>