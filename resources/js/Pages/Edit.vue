<template>
<div>
    <app-layout>

        <template #header>
            <h2 class="font-light text-2xl text-gray-800 leading-tight">
                Applicant
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                <jet-form-section @submitted="updateApplicant">
                    <template #title>
                       Applicant
                    </template>
                    <template #description>
                        <!-- <img :src="applicant.applicant_attachment.local_image_url" alt=""> -->
                    </template>

                    <template #form>

                        <h1>Applicant Details</h1>

                        <!-- Status -->
                        <div class="col-span-6">
                            <jet-label for="status" value="Status"/>
                                <select 
                                  v-model="form.status"
                                  class="form-select appearance-none
                                  block
                                  w-full
                                  px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-red bg-clip-padding bg-no-repeat
                                  border-4 border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                                  :class = "{'border-yellow-300': form.status == '1',  'border-green-400': form.status == '2',  'border-orange-500': form.status == '3',  'border-blue-500': form.status == '4','border-sky-300': form.status == '5','border-red-300': form.status == '6'}"
                                  aria-label="Default select example">
                                    <option value="1" class="bg-yellow-300">Pending</option>
                                    <option value="2" class="bg-green-500">Message Sent</option>
                                    <option value="3" class="bg-orange-500">Interviewed</option>
                                    <option value="4" class="bg-blue-500">Passed Document</option>
                                    <option value="5" class="bg-sky-300">Created Accounts</option>
                                    <option value="6" class="bg-red-500">Failed</option>
                                </select>


                            <jet-input-error :message="form.errors.type" class="mt-2"/>
                        </div>
                        <!-- Status -->

                        <div class="col-span-6">


                      <div class="my-3">
                        <span class="text-lg font-bold">Personal Details</span>
                        <br>
                        <p>First Name: {{applicant.first_name}}</p>
                        <p>Middle Name: {{applicant.middle_name}}</p>
                        <p>Last Name: {{applicant.last_name}}</p>
                        <br>
                        <p>Mother's Maiden Name: {{applicant.nameOfMother}}</p>
                        <br>
                        <p>Email: {{applicant.email}}</p>
                        <p>Mobile Number: {{applicant.mobile_number}}</p>
                        <br>
                        <p>Sex: {{applicant.sex}}</p>
                        <p>Birthdate: {{applicant.birthdate}}</p>
                        <p>Place of birth: {{applicant.placeOfBirth}}</p>
                        <br>
                        <p>Country: {{applicant.country}}</p>
                        <p>Complete Address: {{applicant.complete_address}}</p>
                        <p>Barangay: {{applicant.barangay}}</p>
                        <p>City: {{applicant.city}}</p>
                        <p>Province: {{applicant.province}}</p>
                        <p>Postal Code: {{applicant.postal_code}}</p>
                      </div>

                      <div class="my-3">
                        <span class="text-lg font-bold">Questions</span>
                        <p>Question 1: {{applicant.question_1}}</p>
                        <p>Question 2: {{applicant.question_2}}</p>
                        <p>Question 3: {{applicant.question_3}}</p>
                        <p>Question 4: {{applicant.question_4}}</p>
                        <p>Question 5: {{applicant.question_5}}</p>
                        <p>Question 6: {{applicant.question_6}}</p>
                        <p>Question 7: {{applicant.question_7}}</p>
                        <p>Question 8: {{applicant.question_8}}</p>
                        <p>Question 9: {{applicant.question_9}}</p>
                        <p>Question 10: {{applicant.question_10}}</p>
                      </div>

                        </div>


                    </template>

                    <template #actions >
                        <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                            Saved.
                        </jet-action-message>


                        <inertia-link
                            :disabled="form.processing"
                            :class="{ 'opacity-25 cursor-not-allowed': form.processing }"
                            class="inline-flex items-center px-4 py-2 mr-2 bg-white border border-gray-800 rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest "
                            :href="route('admin.applicants.index')">
                            Cancel
                        </inertia-link>

                        <jet-button :class="{ 'opacity-25 cursor-not-allowed': form.processing }" :disabled="form.processing">
                            <svg v-if="form.processing" class="animate-spin inline-block mr-3 h-4 w-4 text-white"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Save
                        </jet-button>
                    </template>
                </jet-form-section>
            </div>

            <notifications position="top right"/>

        </div>
    </app-layout>
</div>
</template>

<script>
import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import JetButton from '@/Jetstream/Button'
import JetActionMessage from '@/Jetstream/ActionMessage'
import JetFormSection from '@/Jetstream/FormSection'
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetValidationErrors from '@/Jetstream/ValidationErrors';
import JetLabel from '@/Jetstream/Label'
import JetInput from '@/Jetstream/Input'
import JetInputError from '@/Jetstream/InputError'
// import helpers from "@/Mixins/helpers";
// import text from "@/Mixins/text";
import { Link } from '@inertiajs/inertia-vue3'

export default {
    name: "View Applicant",
    // mixins:[helpers,text],
    props:['applicant'],
    components: {
        AppLayout,
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetSecondaryButton,
        JetValidationErrors,
        JetInput,
        JetInputError,
        JetLabel,
        Link
    },
    data() {
        return {
            first_name:this.applicant.first_name,
            middle_name:this.applicant.middle_name,
            last_name:this.applicant.last_name,
            nameOfMother:this.applicant.nameOfMother,
            email:this.applicant.email,
            mobile_number:this.applicant.mobile_number,
            sex:this.applicant.sex,
            birthdate:this.applicant.birthdate,
            placeOfBirth:this.applicant.placeOfBirth,
            country:this.applicant.country,
            complete_address:this.applicant.complete_address,
            barangay:this.applicant.barangay,
            city:this.applicant.city,
            province:this.applicant.province,
            postal_code:this.applicant.postal_code,
            question_1:this.applicant.question_1,
            question_2:this.applicant.question_2,
            question_3:this.applicant.question_3,
            question_4:this.applicant.question_4,
            question_5:this.applicant.question_5,
            question_6:this.applicant.question_6,
            question_7:this.applicant.question_7,
            question_8:this.applicant.question_8,
            question_9:this.applicant.question_9,
            question_10:this.applicant.question_10,
            form: this.$inertia.form({
                  status:String(this.applicant.status),
            }, {
                resetOnSuccess: false,
            }),
        }
    },

    methods: {
        updateApplicant(){
            this.form.put(this.route('admin.applicants.update', this.applicant, {
                preserveScroll: true
            }), {
                onSuccess: success => {
                    this.$notify({
                        title: "Successful",
                        text: this.$attrs.flash.message,
                    });
                },
                onError: errors => {
                    this.$notify({
                        title: "Error",
                        type: 'error',
                        text: Object.values(errors).join('<br/>'),
                    });
                }
            })
        }
    }

}
</script>

<style scoped>

</style>
