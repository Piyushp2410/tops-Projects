<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use DB;


class Adminproductmodel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
    "pname","pprice","pimg","pdes"
    ]; 
    protected $table="product";

}
