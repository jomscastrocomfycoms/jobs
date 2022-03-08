<?php

namespace App\Services;

use App\Models\{Attachment};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


/**
    This services handles all the attachments that the app will have
    Ideal future usage would be to store attachments on a separate file so having this in a service class would make it easily maintainable
**/


class AttachmentUploaderService
{

    private $type;
    private $applicant;


    public function setApplicant($applicant) : AttachmentUploaderService
    {
        $this->applicant = $applicant;
        return $this;
    }

    public function setType($type) : AttachmentUploaderService
    {
        $this->type = $type;
        return $this;
    }

    public function upload_attachment($request,$file)
    {
        Log::info($file);

        $request->validate([
            '{$file}' => ['mimes:jpg,jpeg,png,pdf', 'max:2048'],
        ]);

        // try catch
        try {
            // DB Transaction
            return DB::transaction(function () use ($request,$file) {

                if(is_array($request->{$file}) || $request->{$file} == null)
                {

                    return redirect('/form')->with('error', 'There seems to be an error. Please try again.');
                }

                else
                {
                    $attachment_path = $request->{$file}->store('', 'public');
                    return Attachment::create([
                        'applicant_id' => $this->applicant->id,
                        'type' => $this->type,
                        'path' => $attachment_path,
                    ]);  
                }

            });
            // End of DB Transaction

        } catch (\Exception $exception) {
            Log::error('AttachmentUploader Error');
            Log::error($exception->getMessage());
        }
        // End of try catch
    }

}
