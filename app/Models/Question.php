<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    /**
     * Get the post that owns the comment.
     */
    protected $table = 'questions';

    protected $fillable = ['type', 'options', 'content', 'rules', 'survey_id'];

    protected $casts = [
        'rules' => 'array',
        'options' => 'array',
    ];

    public function __construct(array $attributes = [])
    {
        if (! isset($this->table)) {
            $this->setTable($table);
        }

        parent::__construct($attributes);
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
