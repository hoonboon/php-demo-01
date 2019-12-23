<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * Table for this Model.
     * 
     * @var string
     */
    protected $table = 'my_todos';

    /**
     * Disable created_at and updated_at timestamp
     * columns.
     * 
     * @var boolean
     */
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
