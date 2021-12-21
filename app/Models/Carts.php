<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drugs;
class Carts extends Model
{
    use HasFactory;
    public $table = 'carts';
    protected $fillable = [
        'drug_id',
        'jumlah',
        'harga',
        'user_id',
        'created_at',
        'update_at',        
    ];

    //Relasi Cart dengan Obat
    public function drug(){
        return $this->hasMany(Drugs::class, 'id', 'drug_id' );
    }
}
