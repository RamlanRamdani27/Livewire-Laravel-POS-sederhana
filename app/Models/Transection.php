<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoice_number';
    protected $increment = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function product(){
        return $this->hasMany(ProductTransection::class, 'invoice_number', 'invoice_number');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
