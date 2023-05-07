<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $table = 'groupes';

    public $timestamps = true;

    protected $fillable =['name_groupe','section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
