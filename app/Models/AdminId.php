<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminId extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'paragraph',
        'logo',
        'alamat',
        'instagram',
        'tiktok',
        'youtube',
        'facebook',
        'kontak',

    ];
}
