<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';
    protected $fillable =['name'];

    public $timestamps = true;

    public function groupe()
    {
        return $this->hasMany(N_groupe::class);
    }
}
