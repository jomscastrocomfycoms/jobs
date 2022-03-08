<template>
  
<div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-5 ">
  <div class="md:flex">
    <div class="p-8">


    <!-- Document Uplaod -->
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" >
      <div class="md:flex">
        <div class="md:shrink-0">
          <img class="h-48 w-full object-fill md:h-full md:w-48" src="/img/LOGO.jpg" alt="Logo">
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-sm text-slate-900 font-semibold">Application successful</div>
          <a href="#" class="block mt-1 text-lg leading-tight font-medium text-blue-600 hover:underline">You have submitted your application!</a>
          <p class="mt-2 text-gray-500 text-justify">Thanks for taking your time to submit your application. Please make sure that your contact details are correct as one of our recruiters will reach out to you soon!</p>
        </div>
      </div>
    </div>
    <!-- Document Uplaod -->

    <!-- Review -->
    <div class="mt-10 sm:mt-0" >
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-3">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-1 gap-6">
                      <div class="my-3">
                        <img src="/img/success.jpg">
                      </div>
                    </div>
                  </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Review -->

<!--       <div class="mt-10 sm:mt-0" >
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="mt-5 md:mt-0 md:col-span-3">
              <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                      <div class="grid grid-cols-1 gap-6">
                        <div class="my-3">
                          <button class="inline-flex text-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition w-full">
                            Visit Our Site
                          </button>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
        </div>
      </div> -->

    </div>
  </div>
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
  };
</script>