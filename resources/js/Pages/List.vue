<template>
    <app-layout title="List of Applicants">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Applicants
            </h2>
        </template>

        <div class="py-12">
            <div class="w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg">
                    <div class="w-full rounded-lg shadow-lg">

                        <div class="w-full ">
                            <table class="w-full">
                                <thead>
                                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th class="px-4 py-3">Date Submitted</th>
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Contact</th>
                                    <th class="px-4 py-3">Sex</th>
                                    <th class="px-4 py-3">Birthdate</th>
                                    <th class="px-4 py-3">Address</th>
                                    <th class="px-4 py-3">Status</th>
                                </tr>
                                </thead>

                                <tbody class="bg-white">

                                <tr v-for="(applicant, index) in applicants" :key="applicant.id" class="text-gray-700" >

                                  <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm" @click="">
                                            <div>
                                                <Link class="font-semibold text-black cursor-pointer hover:text-blue-500" :href="route('admin.applicants.view', applicant.id)"> 
                                                    {{formatDate(applicant.created_at)}}
                                                </Link>
                                            </div>
                                        </div>
                                  </td>

                                  <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm" @click="">
                                            <div>
                                                <Link class="font-semibold text-black cursor-pointer hover:text-blue-500" :href="route('admin.applicants.view', applicant.id)"> 
                                                    {{applicant.first_name}}
                                                    {{applicant.middle_name}}
                                                    {{applicant.last_name}}
                                                </Link>
                                            </div>
                                        </div>
                                  </td>
  

                                  <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <!-- <Link class="font-semibold text-black cursor-pointer hover:text-blue-500" :href="route('admin.applicants.view', applicant.id)">  -->
                                                    {{applicant.email}}
                                                    / 0{{applicant.mobile_number}}
                                                <!-- </Link> -->
                                            </div>
                                        </div>
                                  </td>

                                  <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <!-- <Link class="font-semibold text-black cursor-pointer hover:text-blue-500" :href="route('admin.applicants.view', applicant.id)">  -->
                                                    {{applicant.sex}}
                                                <!-- </Link> -->
                                            </div>
                                        </div>
                                  </td>

                                  <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <!-- <Link class="font-semibold text-black cursor-pointer hover:text-blue-500" :href="route('admin.applicants.view', applicant.id)">  -->
                                                    {{applicant.birthdate}}
                                                <!-- </Link> -->
                                            </div>
                                        </div>
                                  </td>

                                  <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <!-- <Link class="font-semibold text-black cursor-pointer hover:text-blue-500" :href="route('admin.applicants.view', applicant.id)">  -->
                                                    {{applicant.country}}
                                                    {{applicant.complete_address}}
                                                    <br>
                                                    {{applicant.barangay}}
                                                    {{applicant.city}}
                                                    {{applicant.province}}
                                                    {{applicant.postal_code}}
                                                <!-- </Link> -->
                                            </div>
                                        </div>
                                  </td>

                                  <td class="px-4 py-3 border" :class = "{'bg-yellow-300': applicant.status == '1',  'bg-green-400': applicant.status === '2',  'bg-orange-500': applicant.status == '3',  'bg-blue-500': applicant.status == '4','bg-sky-300': applicant.status == '5','bg-red-300': applicant.status == '6'}">
                                        <div class="flex items-center text-sm" 

                                        >
                                            <div>
                                                <!-- <Link class="font-semibold text-black cursor-pointer hover:text-blue-500" :href="route('admin.applicants.view', applicant.id)">  -->
                                                    {{getStatus(applicant.status)}}
                                                <!-- </Link> -->
                                            </div>
                                        </div>
                                  </td>

                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetDangerButton from "@/Jetstream/DangerButton";
    import JetSecondaryButton from "@/Jetstream/SecondaryButton";
    import JetConfirmationModal from '@/Jetstream/ConfirmationModal'
    import { Link } from '@inertiajs/inertia-vue3'


    export default {
        name: "Applicants",
        props:['applicants'],
        components: {
            AppLayout,
            Welcome,
            JetButton,
            JetConfirmationModal,
            JetDangerButton,
            JetSecondaryButton,
            Link,
        },
        methods :{
            getStatus(statusId) {
                let status = 'Pending';

                if (statusId == 1) {
                    status = 'Pending'
                }
                if (statusId == 2) {
                    status = 'Message Sent'
                }
                if (statusId == 3) {
                    status = 'Interviewed'
                }
                if (statusId == 4) {
                    status = 'Passed Document'
                }
                if (statusId == 5) {
                    status = 'Created Accounts'
                }
                if (statusId == 6) {
                    status = 'Failed'
                }

                return status;
            },

            formatDate(timeStamp) {
                let date = new Date(timeStamp);
                return date.toLocaleString('default', {month: 'long'}) + ' ' + date.getDate() + ', ' + date.getFullYear()
            },
        },
    };


</script>
