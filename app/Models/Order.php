<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $fillable = [
        "id",
        "user_id",
        "date",
        "status",
        "payment_method",
        "total_quantity",
        "total_ammount",
        "created_at",
        "updated_at",
    ];
}
