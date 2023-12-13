<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $fillable = ['name', 'manufacturer', 'price', 'manufacturing_date'];

    public function manufacturer()
    {
        return $this->belongsTo(ManufacturerModel::class, 'manufacturer');
    }
}
