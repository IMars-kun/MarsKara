<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class picture extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumbnail', 'date'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)){
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}
