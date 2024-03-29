<?php

namespace App\Models;
use App\Models\Etiquette;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $table = 'plats';
    protected $primaryKey = 'id';
    
    public function categories()
    {
        return $this->belongsTo(Categorie::class,'categorie_id','id')->get();
    }
    public function etiquettes()
    {
        return$this
        ->belongsToMany(Etiquette::class,'etiquettes_plats', 'plats_id', 'etiquettes_id')
        ->get();
    }
}
