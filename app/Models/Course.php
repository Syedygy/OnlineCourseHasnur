<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';
    protected $fillable =['judul','deskripsi','durasi'];

    public function materialrel()
    {
        return $this->hasMany(Material::class,'course_id','id');
    }
}
