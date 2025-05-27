<?php
namespace App;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_master extends Model
{
    use HasFactory;
    protected $fillable = [
        'pageid', 'meta_desc', 'meta_keyword', 'title_marathi', 'title_english', 'desc_marathi', 'desc_english', 'url_word', 'page_type', 'status', 'updated_at'
      ];
}


