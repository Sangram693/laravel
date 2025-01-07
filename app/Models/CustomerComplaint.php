<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerComplaint extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_email',
        'address',
        'device',
        'problem',
        'description',
        'invoice',
        'purchase_date',
        'ticket_id', 
    ];

    /**
     * Boot function to add custom logic when creating a new complaint.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $problemPrefix = $model->device == 'CCTV' ? 'CCTV' : 'PUMP';
            $model->ticket_id = $problemPrefix . '-' . now()->format('Y-m') . '-' . uniqid();
        });
    }
}
