<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        "full_name",
        "email",
        "gender",
        "brith_of_day",
        "contact_no",
        "address",
        "Marital_status",
        "Allegics_mediciine",
        "Allegics_mediciine_details"

    ] ;
}
