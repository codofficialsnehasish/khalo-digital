<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CFPGPayment extends Model
{
    use HasFactory;
    protected $table = "cfpgpayments";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'mobile',
        'amount'
    ];
}
