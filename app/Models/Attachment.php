<?php

namespace App\Models;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'type',
        'path',
    ];

	public function applicant() {
	   return $this->belongsToMany(Applicant::class);
	}

    public function getPathUrlAttribute()
    {
        $url = Storage::disk('public')->url($this->path);
        return parse_url($url)['path'];
    }

    protected $appends = [
        'path_url'
    ];


}
