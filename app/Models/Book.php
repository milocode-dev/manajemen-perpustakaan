<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Book extends Model
{
    protected $fillable = ['judul', 'penulis', 'tahun', 'member_id'];

    public function members() {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
}
