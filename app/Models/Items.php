<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'description',
        'quantity',
        'unit_price',
        'total',
    ];

    /**
     * Relationship: Item belongs to an Invoice
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
