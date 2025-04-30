<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'amount_paid',
        'payment_date',
        'payment_method',
        'notes',
        'pdf_path',
    ];

    /**
     * Relationship: Receipt belongs to an Invoice
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
