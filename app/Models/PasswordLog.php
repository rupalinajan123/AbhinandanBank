<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordLog extends Model
{
    protected $table = 'password_logs';

    protected $fillable = [
        'user_id',
        'username',
        'password_logs',
        'created_at',
        'updated_at',
    ];

}
