<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangmasuk extends Model
{
    use HasFactory;

    protected $visible = ['tanggal', 'supplier_id', 'barang_id', 'qty'];
    protected $fillable = ['tanggal', 'supplier_id', 'barang_id', 'qty'];
    public $timestamps = true;

    public function Supplier()
    {
        return $this->belongsTo('App\Models\Supplier', 'supplier_id');
    }

    public function Barang()
    {
        return $this->belongsTo('App\Models\Barang', 'barang_id');
    }
}
