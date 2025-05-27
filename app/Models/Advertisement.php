<?php
// added by usha
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    // use HasFactory;
    
   protected $table = 'advertisement';
    
    protected $fillable = [
      'eng_title', 'marathi_title', 'advt_doc', 'status','updated_at'
      ];
}
