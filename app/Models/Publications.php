<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    use HasFactory;
    protected $table = 'publications';
    protected  $primaryKey='id_publication' ;

    protected $fillable = [
        'name',
        'file',
        'created_by'
    ];

    public function __toString()
    {
        return $this->name;
    }
}
