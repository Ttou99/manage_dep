<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class N_groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_n_groupe',
        'section_id',
        'groupe_id',
        'sous_groupe',
    ];
    protected $table = 'groupes';
    public $timestamps = true;

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
