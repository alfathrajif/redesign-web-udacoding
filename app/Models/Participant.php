<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['program'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('school', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['program'] ?? false, function ($query, $program) {
            $query->whereHas('program', function ($query) use ($program) {
                $query->where('id', $program);
            });
        });
    }
}
