<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
    <h1>Edit data</h1>

    <form action="{{ route('update.book', $books->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-input">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" value="{{ old('judul', $books->judul) }}" placeholder="Isi judul buku..">
        </div>

        <div class="form-input">
            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" value="{{ old('penulis', $books->penulis) }}" placeholder="Isi penulis buku..">
        </div>

        <div class="form-input">
            <label for="tahun">Tahun</label>
            <input type="number" id="tahun" name="tahun" value="{{ old('tahun', $books->tahun) }}" placeholder="Isi tahun buku..">
        </div>

        <div class="form-input">
            <label for="member_id">Member</label>
            <select name="member_id" id="member_id">
                @foreach ($members as $member)
                    <option value="{{ $member->id }}" {{ old('member_id', $books->member_id) == $member->id ? 'selected' : '' }}>{{ $member->nama }}</option>
                @endforeach
            </select>
        </div>

        <button>Submit</button>
</body>
</html>