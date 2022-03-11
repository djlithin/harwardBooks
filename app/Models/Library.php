<?php

/**
 * @Author: predator
 * @Date:   2022-03-11 18:40:28
 * @Last Modified by:   predator
 * @Last Modified time: 2022-03-11 18:48:56
 */
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $table = 'library';
    protected $fillable = [
        'created',
        'modified',
        'baseUrl',
        'collectionUrn',
    ];
}