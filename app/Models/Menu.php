<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PesananDetails;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $primaryKey = 'id';

    protected $fillable = [
        'gambar',
        'nama_menu',
        'harga',
        'stok',
    ];

    public function pesanan_detail() 
	{
	     return $this->hasMany(PesananDetails::class,'menu_id', 'id');
	}
}