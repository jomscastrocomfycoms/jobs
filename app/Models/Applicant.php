<?php

namespace App\Models;

use App\Models\{Attachment};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'nameOfMother',
        'email',
        'mobile_number',
        'sex',
        'birthdate',
        'placeOfBirth',
        'country',
        'complete_address',
        'barangay',
        'city',
        'province',
        'postal_code',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7',
        'question_8',
        'question_9',
        'question_10',
        'status',
    ];

    public function attachments() {
        return $this->hasMany(Attachment::class);
    }



}
