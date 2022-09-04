<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture', 'title', 'description', 'assign_to', 'status', 'due_on', 'user_id', 'note_from_engineer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
