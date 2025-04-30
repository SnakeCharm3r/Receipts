<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'client_id',
        'invoice_number',
        'date',
        'due_date',
        'total',
        'currency',
        'tax',
        'subtotal',
        'discount',
        'notes',
        'pdf_path',
        'status',
    ];

    /**
     * Relationships
     */
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function items()
    {
        return $this->hasMany(Items::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
}
