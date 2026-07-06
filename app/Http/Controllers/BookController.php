<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Member;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();

        return view('book', compact('books'));
    }

    public function create() {
        $members = Member::all();

        return view('create', compact('members'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'judul' => 'string|max:255|required',
            'penulis' => 'string|max:255|required',
            'tahun' => 'numeric|required',
            'member_id' => 'required',
        ]);

        Book::create($validated);

        return redirect('book');
    }

    public function edit($id) {
        $books = Book::findOrFail($id);
        $members = Member::all();

        return view('edit', compact('books', 'members'));
    }

    public function update(Request $request, $id) {
        $books = Book::findOrFail($id);
        $validated = $request->validate([
            'judul' => 'string|max:255|required',
            'penulis' => 'string|max:255|required',
            'tahun' => 'numeric|required',
            'member_id' => 'required',
        ]);

        $books->update($validated);

        return redirect('book');
    }

    public function delete($id) {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('book');
    }
}
