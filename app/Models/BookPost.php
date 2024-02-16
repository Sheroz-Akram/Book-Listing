<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPost extends Model
{
    use HasFactory;

    protected $fillable = [
        "bookTitle",
        "bookAuthor",
        "bookPublisher",
        "bookPublishDate",
        "bookLanguage",
        "bookPageCount",
        "bookPrice",
        "bookCondition",
        "userEmail",
        "userPhone",
        "userCity",
        "userState",
        "userZip",
        "coverImage"
    ];
}
