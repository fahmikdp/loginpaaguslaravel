<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    public $timestamps = false;
    protected $softDelete = false;
    protected $primaryKey = 'id';
    // public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id', 'nama_supplier', 'email', 'password', 'alamat_supplier', 'telp_supplier'];
}
