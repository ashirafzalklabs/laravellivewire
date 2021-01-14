<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithPagination;

class Comment extends Model
{
    use HasFactory,WithPagination;

    protected $guarded = [];

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function getImagePathAttribute()
    // {
    //     return Storage::disk('public')->url($this->image);
    // }

}
