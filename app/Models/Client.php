<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'business_id',
        'name',
        'email',
        'phone',
        'company_name',
        'address',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship: Client belongs to a Business
     */
    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    /**
     * Relationship: Client has many invoices
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
