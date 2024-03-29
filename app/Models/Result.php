<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function chapter()
    {
        return $this->hasOne(Paragraph::class, 'id', 'paragraph_id');
    }
}
