<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','summary','description','status','image','added_by'];

    public function getAddRules()
    {
        return [
            'title' => 'required|string',
            'summary' => 'nullable|string',
            'description' => ['nullable','string'],
            'status' => 'required|in:active,inactive',
            'image' => 'sometimes|image|max:4000'
        ];
    }
}
