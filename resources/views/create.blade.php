<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <h1>Tambah data buku/peminjam</h1>

    <form action="{{ route('store.book') }}" method="POST">
        @csrf

        <div class="form-input">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" placeholder="Isi judul buku..">
        </div>

        <div class="form-input">
            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" placeholder="Isi penulis buku..">
        </div>

        <div class="form-input">
            <label for="tahun">tahun</label>
            <input type="number" id="tahun" name="tahun" placeholder="Isi tahun buku..">
        </div>

        <div class="form-input">
            <label for="member_id">Member</label>
            <select name="member_id" id="member_id">
                @foreach ($members as $member)
                    <option value="{{ $member->id }}">{{ $member->nama }}</option>
                @endforeach
            </select>
        </div>

        <button>Submit</button>
        <a href="{{ route('book.index') }}">Kembali ke halaman utama</a>
    </form>
</body>
</html>