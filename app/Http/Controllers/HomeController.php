<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Applicant;
use App\Services\AttachmentUploaderService;
use Illuminate\Support\Facades\{DB,Log};
use Redirect;
class HomeController extends Controller
{
    public function index()
    {
    	return Inertia::render('Landing');
    }

    public function form()
    {
    	return Inertia::render('Forms/Form');
    }

    public function submit(Request $request, AttachmentUploaderService $attachment_uploader_service)
    {   
        // try catch
        try {
            // DB Transaction
            return DB::transaction(function () use ($request,$attachment_uploader_service) {
                $applicant = Applicant::create([
                    'first_name' => $request->first_name,
                    'middle_name' => $request->middle_name,
                    'last_name' => $request->last_name,
                    'nameOfMother' => $request->nameOfMother,
                    'email' => $request->email,
                    'mobile_number' => $request->mobile_number,
                    'sex' => $request->sex,
                    'birthdate' => $request->birthdate,
                    'placeOfBirth' => $request->placeOfBirth,
                    'country' => $request->country,
                    'complete_address' => $request->complete_address,
                    'barangay' => $request->barangay,
                    'city' => $request->city,
                    'province' => $request->province,
                    'postal_code' => $request->postal_code,
                    'question_1' => $request->question_1,
                    'question_2' => $request->question_2,
                    'question_3' => $request->question_3,
                    'question_4' => $request->question_4,
                    'question_5' => $request->question_5,
                    'question_6' => $request->question_6,
                    'question_7' => $request->question_7,
                    'question_8' => $request->question_8,
                    'question_9' => $request->question_9,
                    'question_10' => $request->question_10,
                    'status' => 1,
                ]);

                // if($request->attachment_resume != null) $resume_attachment = $attachment_uploader_service->setApplicant($applicant)->setType('resume')->upload_attachment($request,'attachment_resume');
                
                // $front_image_attachment = $attachment_uploader_service->setApplicant($applicant)->setType('front_image')->upload_attachment($request,'attachment_front_image');
                // $back_image_attachment = $attachment_uploader_service->setApplicant($applicant)->setType('back_image')->upload_attachment($request,'attachment_back_image');
                // $selfie_image_attachment = $attachment_uploader_service->setApplicant($applicant)->setType('selfie_image')->upload_attachment($request,'attachment_selfie_image');

                // return back();
                return Redirect::route('applicants.form.success');
            });
            // End of DB Transaction

        } catch (\Exception $exception) {
            Log::error('HomeController Error');
            Log::error($exception->getMessage());
        }
        // End of try catch

    }

    public function success()
    {
        return Inertia::render('Forms/Success');
    }

    public function landingSuccess()
    {
        return Inertia::render('LandingSuccess');
    }

    public function adminList()
    {
        $applicants = Applicant::all();
        return Inertia::render('List',[
            'applicants' => $applicants,
        ]);
    }

    public function view($id)
    {
        $applicant = Applicant::where('id',$id)->first();

        return Inertia::render('Edit',[
            'applicant' => $applicant   
        ]);
    }

    public function update(Request $request, $id)
    {
        $applicant = Applicant::find($id);
        $applicant->fill($request->input())->save();
        return redirect()->back()->withMessage('Applicant has been updated!');
    }

}
