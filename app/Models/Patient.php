<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = [
        "Full_name",
        "email",
        "Gender",
        "dob",
        "contact_no",
        "address",
        "marital_status",
        "Allegics_medicine",
        "passward"

    ] ;
    public $timestamps = false; // This line will disable the automatic timestamp columns
}
