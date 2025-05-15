<?php

namespace App\Models;

use App\Enum\Priority;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => Status::class,
            'priority' => Priority::class,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
