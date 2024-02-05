<?php

namespace App\Models;
use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;
    protected $table = 'etiquettes';
    protected $primaryKey = 'id';

    public function plats()
    {
        return$this
        ->belongsToMany(Etiquette::class,'etiquettes_plats', 'plats_id', 'etiquettes_id')
        ->get();
    }
}
