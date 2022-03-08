<template>
  
<div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-5 ">
  <div class="md:flex">
    <div class="p-8">
      
    <stepper :steps="steps" :step="step_count"></stepper>

    <!-- Personal Details -->
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" v-show="step === 'personal_details'">
      <div class="md:flex">
        <div class="md:shrink-0">
          <img class="h-48 w-full object-fill md:h-full md:w-48" src="/img/LOGO.jpg" alt="Logo">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-sm text-slate-900 font-semibold">Personal Details</div>
          <a href="#" class="block mt-1 text-lg leading-tight font-medium text-blue-600 hover:underline">Tell us something about yourself</a>
          <p class="mt-2 text-gray-500 text-justify">It is important for us to get to know you, please fill up the details below so that we can add you to our list of candidates! <strong class="text-red-500">Make sure that contact information is correct.</strong></p>
        </div>
      </div>
    </div>
    <!-- Personal Details -->

    <!-- Questions -->
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" v-show="step === 'questions'">
      <div class="md:flex">
        <div class="md:shrink-0">
          <img class="h-48 w-full object-fill md:h-full md:w-48" src="/img/LOGO.jpg" alt="Logo">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-sm text-slate-900 font-semibold">Questions</div>
          <a href="#" class="block mt-1 text-lg leading-tight font-medium text-blue-600 hover:underline">Please answer the questions below</a>
          <p class="mt-2 text-gray-500 text-justify">Answering the questions below will help us assess you as a person, don't worry none of your answers will ever be wrong. Just be you and let us know you more!</p>
        </div>
      </div>
    </div>
    <!-- Questions -->

    <!-- Document Uplaod -->
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" v-show="step === 'document_upload'">
      <div class="md:flex">
        <div class="md:shrink-0">
          <img class="h-48 w-full object-fill md:h-full md:w-48" src="/img/LOGO.jpg" alt="Logo">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-sm text-slate-900 font-semibold">Document Upload</div>
          <a href="#" class="block mt-1 text-lg leading-tight font-medium text-blue-600 hover:underline">A little verification</a>
          <p class="mt-2 text-gray-500 text-justify">To prevent spam applications, please upload any valid id for additional verification. Applicant submissions without valid documents will be marked as <strong class="text-red-500">invalid.</strong></p>
        </div>
      </div>
    </div>
    <!-- Document Uplaod -->

    <!-- Document Uplaod -->
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" v-show="step === 'review'">
      <div class="md:flex">
        <div class="md:shrink-0">
          <img class="h-48 w-full object-fill md:h-full md:w-48" src="/img/LOGO.jpg" alt="Logo">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-sm text-slate-900 font-semibold">Review Application Form</div>
          <a href="#" class="block mt-1 text-lg leading-tight font-medium text-blue-600 hover:underline">You are almost there!</a>
          <p class="mt-2 text-gray-500 text-justify">Please review your application details correctly and make sure that all of the details are correct. Once reviewed, you can hit submit to send out your application form and hopefully be a part of our team!</p>
        </div>
      </div>
    </div>
    <!-- Document Uplaod -->


      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200" />
        </div>
      </div>


      <!-- Personal Details -->
      <div class="mt-10 sm:mt-0" v-show="step === 'personal_details'">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="mt-5 md:mt-0 md:col-span-3">
            
            <form>
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">First name <strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.first_name" v-on:keyup="personalDetailsHasError = false" name="first_name" id="first_name" autocomplete="first_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.first_name == null" class="block text-sm font-medium text-red-500">This field is required</label>

                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="middle-name" class="block text-sm font-medium text-gray-700">Middle name</label>
                      <input type="text" v-model="form.middle_name" v-on:keyup="personalDetailsHasError = false" name="middle_name" id="middle_name" autocomplete="middle_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="last-name" class="block text-sm font-medium text-gray-700">Last name<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.last_name" v-on:keyup="personalDetailsHasError = false" name="last_name" id="last_name" autocomplete="last_name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.last_name == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                    <div class="col-span-6 sm:col-span-4">
                      <label for="nameOfMother" class="block text-sm font-medium text-gray-700">Mother's maiden name<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.nameOfMother" v-on:keyup="personalDetailsHasError = false" name="nameOfMother" id="nameOfMother" autocomplete="nameOfMother" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.nameOfMother == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Email address<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.email" v-on:keyup="personalDetailsHasError = false" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.email == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                      <label for="mobile-number" class="block text-sm font-medium text-gray-700">Mobile Number<strong class="text-red-500">*</strong></label>
                      <input type="number" v-model="form.mobile_number" v-on:keyup="personalDetailsHasError = false" name="mobile_number" id="mobile_number" autocomplete="mobile_number" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.mobile_number == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                    <div class="col-span-6 sm:col-span-3">
                      <label for="sex" class="block text-sm font-medium text-gray-700">Sex<strong class="text-red-500">*</strong></label>
                      <select id="sex" v-model="form.sex" v-on:change="personalDetailsHasError = false" name="sex" autocomplete="sex" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                      <label v-show="personalDetailsHasError == true && form.sex == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                    <div class="col-span-6">
                      <label for="birthdate" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                      <input type="date" v-model="form.birthdate"  v-on:keyup="personalDetailsHasError = false" name="birthdate" id="birthdate" autocomplete="birthdate" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.birthdate == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                    <div class="col-span-6 sm:col-span-6">
                      <label for="placeOfBirth" class="block text-sm font-medium text-gray-700">Place of birth<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.placeOfBirth" v-on:keyup="personalDetailsHasError = false" name="placeOfBirth" id="placeOfBirth" autocomplete="placeOfBirth" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.placeOfBirth == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                    <div class="col-span-6 sm:col-span-3">
                      <label for="country" class="block text-sm font-medium text-gray-700">Country<strong class="text-red-500">*</strong></label>
                      <select id="country" v-model="form.country" v-on:change="personalDetailsHasError = false" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="Philippines">Philippines</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Laos">Laos</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Vietnam">Vietnam</option>
                      </select>
                      <label v-show="personalDetailsHasError == true && form.country == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6">
                      <label for="complete-address" class="block text-sm font-medium text-gray-700">Complete address</label>
                      <input type="text" v-model="form.complete_address" v-on:keyup="personalDetailsHasError = false" name="complete_address" autocomplete="complete_address" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.complete_address == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="barangay" class="block text-sm font-medium text-gray-700">Barangay / Village<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.barangay" v-on:keyup="personalDetailsHasError = false" name="barangay" id="barangay" autocomplete="barangay" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.barangay == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                      <label for="city" class="block text-sm font-medium text-gray-700">City<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.city" v-on:keyup="personalDetailsHasError = false" name="city" id="city" autocomplete="city" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.city == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="region" class="block text-sm font-medium text-gray-700">State / Province<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.province" v-on:keyup="personalDetailsHasError = false" name="province" id="province" autocomplete="province" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.province == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code<strong class="text-red-500">*</strong></label>
                      <input type="text" v-model="form.postal_code" v-on:keyup="personalDetailsHasError = false" name="postal_code" id="postal_code" autocomplete="postal_code" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                      <label v-show="personalDetailsHasError == true && form.postal_code == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" @click="nextStep('next','questions',2)">
                Next Step
              </button>
            </div>

          </div>
        </div>
      </div>
      <!-- Personal Details -->


      <!-- Questions -->
      <div class="mt-10 sm:mt-0" v-show="step === 'questions'">
        <div class="md:grid md:grid-cols-3 md:gap-6">

          <div class="mt-5 md:mt-0 md:col-span-3">
            <form action="#">
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">
                      <label for="question_1" class="block text-sm font-medium text-gray-700">How many years of BPO/Customer Service Experience do you have?</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <select v-model="form.question_1" v-on:change="questionsHasError = false" id="question_1" name="question_1" autocomplete="question_1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="0 to 11 months">0 to 11 months</option>
                        <option value="1 to 2 years">1 to 2 years</option>
                        <option value="3 to 4 years">3 to 4 years</option>
                        <option value="5 years or more">5 years or more</option>
                      </select>
                      <label v-show="questionsHasError == true && form.question_1 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                    <div class="col-span-6 sm:col-span-3">
                      <label for="question_2" class="block text-sm font-medium text-gray-700">Are you comfortable with speaking in english?</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <select v-model="form.question_2" v-on:change="questionsHasError = false" id="question_2" name="question_2" autocomplete="question_2" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                      <label v-show="questionsHasError == true && form.question_2 == null" class="block text-sm font-medium text-red-500">This field is required</label>

                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="question_3" class="block text-sm font-medium text-gray-700">Are you willing to work on a night shift?</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <select v-model="form.question_3" v-on:change="questionsHasError = false" id="question_3" name="question_3" autocomplete="question_3" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                      <label v-show="questionsHasError == true && form.question_3 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="question_4" class="block text-sm font-medium text-gray-700">Are you willing to be trained?</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <select v-model="form.question_4" v-on:change="questionsHasError = false" id="question_4" name="question_4" autocomplete="question_4" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select>
                      <label v-show="questionsHasError == true && form.question_4 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6">
                      <label for="question_5" class="block text-sm font-medium text-gray-700">Do you know what inbound and outbound processes are? If yes, please answer.</label>
                      <textarea v-model="form.question_5" v-on:keyup="questionsHasError = false" type="text" name="question_5" id="question_5" autocomplete="question_5" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                      <label v-show="questionsHasError == true && form.question_5 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6">
                      <label for="question_6" class="block text-sm font-medium text-gray-700">Why do you want this job? or Why do you want to join a BPO?</label>
                      <textarea v-model="form.question_6" v-on:keyup="questionsHasError = false" type="text" name="question_6" id="question_6" autocomplete="question_6" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                      <label v-show="questionsHasError == true && form.question_6 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                  <div class="col-span-6">

                      <label for="question_7" class="block text-sm font-medium text-gray-700">
                        List some of the things that you think 
                        <strong>you will be doing at a BPO</strong>
                      </label>

                      <textarea v-model="form.question_7" v-on:keyup="questionsHasError = false" type="text" name="question_7" id="question_7" autocomplete="question_7" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                      <label v-show="questionsHasError == true && form.question_7 == null" class="block text-sm font-medium text-red-500">This field is required</label>

                    </div>

                    <div class="col-span-6">
                      <label for="question_8" class="block text-sm font-medium text-gray-700">What is your motivation to work?</label>
                      <textarea v-model="form.question_8" v-on:keyup="questionsHasError = false" type="text" name="question_8" id="question_8" autocomplete="question_8" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                      <label v-show="questionsHasError == true && form.question_8 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                    <div class="col-span-6">
                      <label for="question_9" class="block text-sm font-medium text-gray-700">Do you prefer WFH or working in an office environment, why?</label>
                      <textarea v-model="form.question_9" v-on:keyup="questionsHasError = false" type="text" name="question_9" id="question_9" autocomplete="question_9" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" ></textarea>
                      <label v-show="questionsHasError == true && form.question_9 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="question_10" class="block text-sm font-medium text-gray-700">Please select comfortable time to schedule for an interview</label>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <select id="question_10" v-model="form.question_10" v-on:change="questionsHasError = false" name="question_10" autocomplete="question_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="8:00 A.M. to 9:00 A.M.">8:00 A.M. to 9:00 A.M.</option>
                        <option value="10:00 A.M. to 11:00 A.M.">10:00 A.M. to 11:00 A.M.</option>
                        <option value="1:00 P.M. to 2:00 P.M.">1:00 P.M. to 2:00 P.M.</option>
                        <option value="3:00 P.M. to 4:00 P.M.">3:00 P.M. to 4:00 P.M.</option>
                        <option value="5:00 P.M. to 6:00 P.M.">5:00 P.M. to 6:00 P.M.</option>                        
                        <option value="7:00 P.M. to 8:00 P.M.<">7:00 P.M. to 8:00 P.M.</option>                        
                        <option value="9:00 P.M. to 10:00 P.M.">9:00 P.M. to 10:00 P.M.</option>                        
                        <option value="11:00 P.M. to 12:00 A.M">11:00 P.M. to 12:00 A.M</option>                        
                      </select>
                      <label v-show="questionsHasError == true && form.question_10 == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>




                    <div class="col-span-6 sm:col-span-6">
                      <label for="resume" class="block text-sm font-medium text-gray-700">Do you have an existing resume? If so, please attach it below</label>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                    <file-pond
                          name="attachment_resume"
                          ref="pond"
                          label-idle="Upload your resume if you have one<br><span class='filepond--label-action'>Browse</span>"
                          :allow-multiple="false"
                          instant-upload="false"
                          @updatefiles="onUpdateResumeFile"
                          v-bind:files="form.attachment_resume"
                          v-on:change="questionsHasError = false"
                          credits=""
                          accepted-file-types="image/jpeg, image/png, application/pdf"
                      />
                      <label v-show="questionsHasError == true && form.attachment_resume == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                  </div>
                </div>
              </div>
            </form>

            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-slate-900 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2" @click="nextStep('back','personal_details',1)">
                Back
              </button>
              <!-- <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" @click="nextStep('next','document_upload',3)"> -->
              <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" @click="nextStep('next','review',3)">

                Next Step
              </button>
            </div>

          </div>
        </div>
      </div>
      <!-- Questions -->



      <!-- Document Upload -->
 <!--      <div class="mt-10 sm:mt-0" v-show="step === 'document_upload'">
        <div class="md:grid md:grid-cols-3 md:gap-6">

          <div class="mt-5 md:mt-0 md:col-span-3">
            <form action="#">
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-6">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">Front Image <strong class="text-red-500">*</strong></label>
                      <p class="block text-sm font-small text-gray-700 font-semibold">-Make sure that the texts are visible</p>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                     <img class="" src="/img/front_image.jpg" alt="Logo">
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                    <file-pond
                          name="attachment_front_image"
                          ref="pond"
                          label-idle="Upload a front image picture of your id<br><span class='filepond--label-action'>Browse</span>"
                          :allow-multiple="false"
                          instant-upload="false"
                          @updatefiles="onUpdateFrontImage"
                          v-bind:files="form.attachment_front_image"
                          v-on:change="documentsUploadHasError = false"
                          accepted-file-types="image/jpeg, image/png, application/pdf"
                      />
                      <label v-show="documentsUploadHasError == true && form.attachment_front_image == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">Back Image <strong class="text-red-500">*</strong></label>
                      <p class="block text-sm font-small text-gray-700 font-semibold">-IF valid ID has a back portion, upload it like below. If it has none (ex. passport), take a picture of the whole ID .</p>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                     <img class="" src="/img/back_image.jpg" alt="Logo">
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                    <file-pond
                          name="attachment_back_image"
                          ref="pond"
                          label-idle="Upload the back portion of your id<br><span class='filepond--label-action'>Browse</span>"
                          :allow-multiple="false"
                          instant-upload="false"
                          @updatefiles="onUpdateBackImage"
                          v-bind:files="form.attachment_back_image"
                          v-on:change="documentsUploadHasError = false"
                          credits=""
                          accepted-file-types="image/jpeg, image/png, application/pdf"
                      />
                      <label v-show="documentsUploadHasError == true && form.attachment_back_image == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">Selfie Image <strong class="text-red-500">*</strong></label>
                      <p class="block text-sm font-small text-gray-700  font-semibold">-Selfie image must show your face together with your ID</p>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                     <img class="" src="/img/selfie.jpg" alt="Logo">
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                    <file-pond
                          name="attachment_selfie_image"
                          ref="pond"
                          label-idle="Upload a selfie picture holding your valid ID<br><span class='filepond--label-action'>Browse</span>"
                          :allow-multiple="false"
                          instant-upload="false"
                          @updatefiles="onUpdateSelfieImage"
                          v-bind:files="form.attachment_selfie_image"
                          v-on:change="documentsUploadHasError = false"
                          credits=""
                          accepted-file-types="image/jpeg, image/png, application/pdf"
                      />
                      <label v-show="documentsUploadHasError == true && form.attachment_selfie_image == null" class="block text-sm font-medium text-red-500">This field is required</label>
                    </div>


                  </div>
                </div>

              </div>
            </form>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-slate-900 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2" @click="nextStep('back','questions',2)">
                    Back
                  </button>
                  <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" @click="nextStep('next','review',4)">
                    Next
                  </button>
                </div>
          </div>
        </div>
      </div> -->
      <!-- Document Upload -->


      <!-- Review -->
      <div class="mt-10 sm:mt-0" v-show="step === 'review'">
        <div class="md:grid md:grid-cols-3 md:gap-6">

          <div class="mt-5 md:mt-0 md:col-span-3">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-1 gap-6">

                      <div class="my-3">
                        <span class="text-lg font-bold">Personal Details</span>
                        <p>First Name: {{form.first_name}}</p>
                        <p>Middle Name: {{form.middle_name}}</p>
                        <p>Last Name: {{form.last_name}}</p>
                        <p>Last Name: {{form.nameOfMother}}</p>
                        <p>Email: {{form.email}}</p>
                        <p>Mobile Number: {{form.mobile_number}}</p>
                        <p>Sex: {{form.sex}}</p>
                        <p>Birthdate: {{form.birthdate}}</p>
                        <p>Place of birth: {{form.placeOfBirth}}</p>
                        <p>Country: {{form.country}}</p>
                        <p>Complete Address: {{form.complete_address}}</p>
                        <p>Barangay: {{form.barangay}}</p>
                        <p>City: {{form.city}}</p>
                        <p>Province: {{form.province}}</p>
                        <p>Postal Code: {{form.postal_code}}</p>
                      </div>

                      <div class="my-3">
                        <span class="text-lg font-bold">Questions</span>
                        <p>Question 1: {{form.question_1}}</p>
                        <p>Question 2: {{form.question_2}}</p>
                        <p>Question 3: {{form.question_3}}</p>
                        <p>Question 4: {{form.question_4}}</p>
                        <p>Question 5: {{form.question_5}}</p>
                        <p>Question 6: {{form.question_6}}</p>
                        <p>Question 7: {{form.question_7}}</p>
                        <p>Question 8: {{form.question_8}}</p>
                        <p>Question 9: {{form.question_9}}</p>
                        <p>Question 10: {{form.question_10}}</p>
                      </div>

<!--                       <div class="my-3">
                        <span class="text-lg font-bold">Uploaded Documents</span>
                        <div class="my-2" v-show="form.attachment_resume != null">
                          <p>Resume:</p>
                          <img class="h-48 w-full object-fill md:h-full md:w-48" :src="resumeAttachment.url" alt="Resume">
                        </div>
                        <div class="my-2">
                          <p>ID Front Image</p>
                          <img class="h-48 w-full object-fill md:h-full md:w-48" :src="frontImageAttachment.url" alt="Front Image">
                        </div>
                        <div class="my-2">
                          <p>ID Back Image</p>
                          <img class="h-48 w-full object-fill md:h-full md:w-48" :src="backImageAttachment.url" alt="Back Image">
                        </div>
                        <div class="my-2">
                          <p>ID Selfie Image</p>
                          <img class="h-48 w-full object-fill md:h-full md:w-48" :src="selfieImageAttachment.url" alt="Selfie Image">
                        </div>
                      </div> -->




                    </div>
                  </div>

                </div>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-slate-900 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2" @click="nextStep('back','questions',2)">
                    Back
                  </button>
                  <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" @click="createApplicationForm">
                    Submit
                  </button>
                </div>
          </div>

        </div>
      </div>

      <!-- Review -->




      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200" />
        </div>
      </div>
      
    </div>
  </div>

  <notifications position="top right"/>
</div>

</template>

<script>

  import Stepper from '@/Components/Stepper'
  import vueFilePond from "vue-filepond";
  import "filepond/dist/filepond.min.css";
  import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";
  import "filepond-plugin-pdf-preview/dist/filepond-plugin-pdf-preview.min.css";
  import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
  import FilePondPluginImagePreview from "filepond-plugin-image-preview";
  import FilePondPluginPdfPreview from "filepond-plugin-pdf-preview";

  //functions
  import attachmentHandler from '@/scripts/Form/attachmentHandler';
  import fieldChecker from '@/scripts/Form/fieldChecker';
  import stepChecker from '@/scripts/Form/stepChecker';


  // Create component
  const FilePond = vueFilePond(
      FilePondPluginFileValidateType,
      FilePondPluginImagePreview,
      FilePondPluginPdfPreview
  );

  export default {
    mixins:[attachmentHandler,fieldChecker,stepChecker],
    components: {
        Stepper,
        FilePond,
    },
    data () {
      return {
        step: 'personal_details',
        // steps: 4,
        steps: 3,
        step_count: 1,
        // resumeAttachment: {
        //     name: null,
        //     url: null,
        //     mimeType: null,
        //     size:null,
        // },
        // frontImageAttachment: {
        //     name: null,
        //     url: null,
        //     mimeType: null,
        //     size:null,
        // },
        // backImageAttachment: {
        //     name: null,
        //     url: null,
        //     mimeType: null,
        //     size:null,
        // },
        // selfieImageAttachment: {
        //     name: null,
        //     url: null,
        //     mimeType: null,
        //     size:null,
        // },
        // myFiles: [],
        personalDetailsHasError:false,
        questionsHasError:false,
        documentsUploadHasError:false,
        form: this.$inertia.form({
            first_name:null,
            middle_name:null,
            last_name:null,
            nameOfMother:null,
            email:null,
            mobile_number:null,
            sex:"Male",
            birthdate:null,
            placeOfBirth:null,
            country:"Philippines",
            complete_address:null,
            barangay:null,
            city:null,
            province:null,
            postal_code:null,
            question_1:"0 to 11 months",
            question_2:"Yes",
            question_3:"Yes",
            question_4:"Yes",
            question_5:null,
            question_6:null,
            question_7:null,
            question_8:null,
            question_9:null,
            question_10:"8:00 A.M. to 9:00 A.M.",
            // attachment_resume:null,
            // attachment_front_image:null,
            // attachment_back_image:null,
            // attachment_selfie_image:null,
        }, {
            resetOnSuccess: false,
        }),
      }
    },
    methods :{

        createApplicationForm() {

            // this.form.attachment_resume = this.getResumeFile()
            // this.form.attachment_front_image = this.getFrontImageFile()
            // this.form.attachment_back_image = this.getBackImageFile()
            // this.form.attachment_selfie_image = this.getSelfieImageFile()

            this.form.post(this.route('applicants.form.submit', {
                preserveScroll: true
            }), {
                onError: errors => {
                    this.$notify({
                        title: "Error",
                        type: 'error',
                        text: Object.values(errors).join('<br/>'),
                    });
                },
                onSuccess: success => {
                    this.$notify({
                        title: "success",
                        type: 'success',
                        text: 'Form Submitted Successfully',
                    });
                }
            })
        },



    }
  };
</script>