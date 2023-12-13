<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturerModel extends Model
{
    protected $table = 'manifecturers';
    protected $fillable = ['brand', 'country', 'contact_phone', 'email'];

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'manufacturer');
    }
}
