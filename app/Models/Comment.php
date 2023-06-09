<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'contact_id'
    ];

    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }

}
