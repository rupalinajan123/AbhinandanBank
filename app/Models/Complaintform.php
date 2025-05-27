<?php
namespace App;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaintform extends Model
{
    use HasFactory;
    protected $fillable = [
        //'id','first_name', 'last_name', 'email', 'comment','is_delete'
           'id',
           'subject',
           'category',
           'cdetails',
           'customer_name',
           'branch',
           'address',
           'email',
           'mobile',
           'acc_head',
           'acc_number',
           'attachment',
           'is_delete'
      ];
}
