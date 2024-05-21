<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EcomcontactModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "name","email","subjectid","message"
    ];
    protected $table='contact';
}
