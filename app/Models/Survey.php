<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'surveys';
// {
public function __construct(array $attributes = [])
{
    if (! isset($this->table)) {
        $this->setTable($table);
    }

    parent::__construct($attributes);
}


/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['name', 'settings'];

/**
 * The attributes that should be casted.
 *
 * @var array
 */
protected $casts = [
    'settings' => 'array',
];

/**
 * The survey questions.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function questions()
{
    return $this->hasMany(Question::class);
}
    

}
