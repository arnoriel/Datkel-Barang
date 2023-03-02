<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $visible = ['nama', 'telepon', 'alamat'];
    protected $fillable = ['nama', 'telepon', 'alamat'];
    public $timestamps = true;

    public function barangmasuk()
    {
        $this->hasMany('App\Models\Barangmasuk', 'supplier_id');
    }
}
