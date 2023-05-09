<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class N_groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_n_groupe',
        'sous_groupe',
        'section_id',
    ];
    protected $table = 'n_groupes';
    public $timestamps = true;



    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
