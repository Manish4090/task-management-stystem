<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'description', 'status', 'deadline'];

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function getdeadlineAttribute($value)
    {
        return Carbon::parse($value)->format('M d, Y');
    }

}
