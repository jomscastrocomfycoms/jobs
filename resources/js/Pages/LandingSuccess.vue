<template>
    
<div>

<div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-900 bg-opacity-50 md:hidden" v-show="showMenu">
  <div class="bg-white w-full absolute inset-x-0 top-0">
                <div class="flex justify-center px-12 py-4 w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row mt-10 ">
                        <div class="ml-3 mt-2 flex flex-col items-right justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-sky-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Features</a>
                            <a @click="gotoJob" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Jobs</a>
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Pricing</a>
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Contact</a>
                        </div>

                    </div>
  </div>
</div>

    <div class="mx-auto max-w-7xl">
        <nav class="relative z-50 h-24 select-none">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium md:overflow-visible lg:justify-center sm:px-4 md:px-2">
                <div class="flex items-center justify-start w-1/4 h-full pr-4">
                         <!-- <img class="mt-2 h-48 w-32 object-fit md:h-full md:w-32" src="/img/LOGO.jpg" alt="Logo"> -->
                         <img class="mt-2 h-20 w-32 object-fit md:h-32 md:w-32" src="/img/LOGO.jpg" alt="Logo">
                </div>
                <div class="top-0 left-2 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex hidden" >
                    <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row ">
                        <div class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center mt-2 ml-3">
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-sky-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Features</a>
                            <a @click="gotoJob" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Jobs</a>
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Pricing</a>
                            <a @click="backToSite" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Contact</a>
                        </div>

                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" v-show="showMenu == false" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700" v-show="showMenu == true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </nav>
    </div>


<!-- Section 3 -->
<section class="px-2 py-32 bg-white md:px-0">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Thanks for </span>
            <span class="block text-sky-600 xl:inline">reaching us out!</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">You are one step closer to having your business served. Please wait at least 24hrs, our representatives will contact you soon!</p>
          <div class="relative flex flex-col sm:flex-row sm:space-x-4">
            <button @click="backToSite" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-sky-600 rounded-md sm:mb-0 hover:bg-sky-700 sm:w-auto">
              Back To Site
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
            <img src="/img/section2-bg.png">
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 7 -->
<section class="text-gray-700 bg-white body-font">
    <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
        <img class="mt-2 h-48 w-32 object-fit md:h-full md:w-32" src="/img/LOGO.jpg" alt="Logo">
        <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">© 2022 Comfy Communications
        </p>
        <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">

            
        </span>
    </div>
</section>

</div>

</template>


<script>
    export default {
        methods:{
            backToSite()
            {
                this.$inertia.replace(route('main.landing'));
            },
            gotoJob()
            {
                this.$inertia.replace(route('applicants.form'));
            }

        }
    };
</script>

