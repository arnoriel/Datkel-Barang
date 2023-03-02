<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'satuan', 'jenis', 'stok'];
    protected $fillable = ['nama', 'satuan', 'jenis', 'stok'];
    public $timestamps = true;

    public function barangmasuk()
    {
        $this->hasMany('App\Models\Barangmasuk', 'barang_id');
    }
}
