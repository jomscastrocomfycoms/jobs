<template>
    
<div>

<div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-900 bg-opacity-50 md:hidden" v-show="showMenu">
  <div class="bg-white w-full absolute inset-x-0 top-0">
                <div class="flex justify-center px-12 py-4 w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row mt-10 ">
                        <div class="ml-3 mt-2 flex flex-col items-right justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <a href="#main" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-sky-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a href="#features" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Features</a>
                            <a @click="gotoJob" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Jobs</a>
                            <a href="#pricing" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Pricing</a>
                            <a href="#contact" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Contact</a>
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
                            <a href="#main" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-sky-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a href="#features" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Features</a>
                            <a @click="gotoJob" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Jobs</a>
                            <a href="#pricing" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Pricing</a>
                            <a href="#contact" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-sky-600 lg:mx-3 md:text-center">Contact</a>
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


<!-- Section 2 -->
<section class="px-2 pt-32 bg-white md:px-0" id="main" name="main">
    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-left text-gray-900 sm:text-5xl md:text-6xl md:text-center">
            <span class="block">Hire dedicated <span class="block mt-1 text-sky-300 lg:inline lg:mt-0">virtual professionals</span></span>
        </h1>
        <p class="w-full mx-auto text-base text-left text-gray-500 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
            Take your business to the next level with a highly-skilled, professionally trained virtual assistant. Plans start at $6.99/hour.
        </p>
        <div class="relative flex flex-col justify-center md:flex-row md:space-x-4">
            <a href="#contact" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-sky-300 rounded-md md:mb-0 hover:bg-sky-300 md:w-auto">
                Try It Free
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
    <div class="container items-center max-w-4xl px-5 mx-auto mt-16 text-center">
        <img src="/img/section1-bg.jpg">
    </div>
</section>

<!-- Section 3 -->
<section class="px-2 py-32 bg-white md:px-0">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Get ready to </span>
            <span class="block text-sky-600 xl:inline">rocket your business ahead!</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Hiring a virtual assistant is one of the best decisions you can make when growing your company.</p>
          <div class="relative flex flex-col sm:flex-row sm:space-x-4">
            <a href="#contact" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-sky-600 rounded-md sm:mb-0 hover:bg-sky-700 sm:w-auto">
              Try It Free
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
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

<!-- Section 4 -->
<section class="py-20 bg-white" name="features" id="features">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center">Our VAs can help you with</h2>
        <p class="mt-2 text-lg text-center text-gray-600">Increasing business productivity to its highest performance.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-sky-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M16.0948617,8 L11.6679842,12.5480226 L9.93939394,10.7721281 L8,12.7645951 L10.6982872,15.5367232 L11.6679842,16.4896422 L12.6376812,15.5367232 L18.0342556,9.99246704 L16.0948617,8 Z M22.4611331,10.3822976 L22.4611331,13.1544256 L40,13.1544256 L40,10.3822976 L22.4611331,10.3822976 Z M16.0948617,19.0885122 L11.6679842,23.6365348 L9.93939394,21.8606403 L8,23.8531073 L10.6982872,26.6252354 L11.6679842,27.5781544 L12.6376812,26.6252354 L18.0342556,21.0809793 L16.0948617,19.0885122 Z M22.4611331,21.4708098 L22.4611331,24.2429379 L40,24.2429379 L40,21.4708098 L22.4611331,21.4708098 Z M16.0948617,30.1770245 L11.6679842,34.7250471 L9.93939394,32.9491525 L8,34.9416196 L10.6982872,37.7137476 L11.6679842,38.6666667 L12.6376812,37.7137476 L18.0342556,32.1694915 L16.0948617,30.1770245 Z M22.4611331,32.559322 L22.4611331,35.3314501 L40,35.3314501 L40,32.559322 L22.4611331,32.559322 Z"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Virtual Assistance</h4>
                <p class="text-base text-center text-gray-500">To-do list growing out of control? Let a VA from Remote Coworker take that small mountain of routine tasks off your hands  so you can get back to growing your  business.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-sky-500 rounded-full">
<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M24,9 C15.1785714,9 8,16.1785714 8,25 L8,36.4285714 L17.6428571,36.4285714 C19.379464,37.8437497 21.5803577,38.7142857 24,38.7142857 C26.4330354,38.7142857 28.6651783,37.8482149 30.4285714,36.4285714 L40,36.4285714 L40,25 C40,16.1785714 32.8214286,9 24,9 Z M24,11.2857143 C31.5892857,11.2857143 37.7142857,17.4107143 37.7142857,25 L37.7142857,34.1428571 L32.5714286,34.1428571 C33.0714286,33.3928571 33.4553577,32.5491074 33.75,31.6785714 C34.0848217,31.0446434 34.2857143,30.3348217 34.2857143,29.5714286 C35.5491074,29.5714286 36.5714286,28.5491074 36.5714286,27.2857143 L36.5714286,26.1428571 C36.5714286,24.879464 35.5491074,23.8571429 34.2857143,23.8571429 L34.2857143,22.7142857 C34.2857143,21.2142857 33.7232149,20.0401783 32.8214286,19.5 C31.9196434,18.9598217 31.0758926,19.004464 30.4285714,18.9285714 C29.7812503,18.8526789 29.4017863,18.741072 29.1428571,18.4642857 C28.8839291,18.1875006 28.5714286,17.5089291 28.5714286,15.8571429 L26.2857143,15.8571429 C26.2857143,17.616072 25.7901783,18.1875006 24.9285714,18.6428571 C24.0669646,19.0982149 22.6696434,19.2633931 21.1428571,19.2857143 C19.616072,19.3080354 18.0267863,19.2053577 16.6071429,19.5 C15.8973211,19.6473211 15.1785714,19.9151783 14.6071429,20.4642857 C14.0357143,21.0133931 13.7142857,21.8392857 13.7142857,22.7142857 L13.7142857,23.1785714 C12.4464286,23.6830354 11.4285714,24.7053577 11.4285714,26.1428571 C11.4285714,27.6383931 12.5089291,28.7142857 13.8571429,29.1785714 C13.995536,31.004464 14.616072,32.7008926 15.5714286,34.1428571 L10.2857143,34.1428571 L10.2857143,25 C10.2857143,17.4107143 16.4107143,11.2857143 24,11.2857143 Z M27.2142857,19.7142857 C27.2991074,19.8303577 27.4062503,19.9330354 27.5,20.0357143 C28.3125006,20.9151783 29.3616069,21.0848217 30.1428571,21.1785714 C30.9241074,21.2723211 31.5089291,21.3616069 31.6785714,21.4642857 C31.8482149,21.5669646 32,21.6339291 32,22.7142857 L32,28.4285714 C32,29.2589291 31.875,30.0669646 31.6428571,30.8214286 C31.2366069,31.4508926 30.5312503,31.8571429 29.7142857,31.8571429 L26.1785714,31.8571429 C25.9464286,31.1875006 25.3214286,30.7142857 24.5714286,30.7142857 C23.625,30.7142857 22.8571429,31.4821429 22.8571429,32.4285714 C22.8571429,33.375 23.625,34.1428571 24.5714286,34.1428571 L29.6428571,34.1428571 C28.2008926,35.5669646 26.1964286,36.4285714 24,36.4285714 C19.5669646,36.4285714 16,32.8616069 16,28.4285714 L16,27.2857143 L14.8571429,27.2857143 C14.2098217,27.2857143 13.7142857,26.7901783 13.7142857,26.1428571 C13.7142857,25.495536 14.2098217,25 14.8571429,25 L16,25 L16,22.7142857 C16,22.3035714 16.0625006,22.2232149 16.1785714,22.1071429 C16.2946434,21.991072 16.5669646,21.8482149 17.0357143,21.75 C17.9732149,21.5580354 19.5267863,21.5937497 21.1428571,21.5714286 C22.7589291,21.5491074 24.504464,21.4732149 26,20.6785714 C26.4553577,20.4375006 26.8571429,20.1116069 27.2142857,19.7142857 Z M20.5714286,25 C19.9419646,25 19.4285714,25.5133931 19.4285714,26.1428571 C19.4285714,26.7723211 19.9419646,27.2857143 20.5714286,27.2857143 C21.2008926,27.2857143 21.7142857,26.7723211 21.7142857,26.1428571 C21.7142857,25.5133931 21.2008926,25 20.5714286,25 Z M27.4285714,25 C26.7991074,25 26.2857143,25.5133931 26.2857143,26.1428571 C26.2857143,26.7723211 26.7991074,27.2857143 27.4285714,27.2857143 C28.0580354,27.2857143 28.5714286,26.7723211 28.5714286,26.1428571 C28.5714286,25.5133931 28.0580354,25 27.4285714,25 Z"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Customer Support Reps</h4>
                <p class="text-base text-center text-gray-500">Direct customer interactions are a huge factor in making your business successful. With our rigorous corporate training program and selective hiring, you can rest assured that your new VA will put the best possible face on your business.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-sky-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M11.4285714,0 L11.4285714,9.14285714 L14.8571429,9.14285714 L14.8571429,11.4285714 L3.42857143,11.4285714 L3.42857143,16 L0,16 L0,25.1428571 L9.14285714,25.1428571 L9.14285714,16 L5.71428571,16 L5.71428571,13.7142857 L14.8571429,13.7142857 L14.8571429,16 L11.4285714,16 L11.4285714,25.1428571 L20.5714286,25.1428571 L20.5714286,16 L17.1428571,16 L17.1428571,13.7142857 L26.2857143,13.7142857 L26.2857143,16 L22.8571429,16 L22.8571429,25.1428571 L32,25.1428571 L32,16 L28.5714286,16 L28.5714286,11.4285714 L17.1428571,11.4285714 L17.1428571,9.14285714 L20.5714286,9.14285714 L20.5714286,0 L11.4285714,0 Z M13.7142857,2.28571429 L18.2857143,2.28571429 L18.2857143,6.85714286 L13.7142857,6.85714286 L13.7142857,2.28571429 Z M2.28571429,18.2857143 L6.85714286,18.2857143 L6.85714286,22.8571429 L2.28571429,22.8571429 L2.28571429,18.2857143 Z M13.7142857,18.2857143 L18.2857143,18.2857143 L18.2857143,22.8571429 L13.7142857,22.8571429 L13.7142857,18.2857143 Z M25.1428571,18.2857143 L29.7142857,18.2857143 L29.7142857,22.8571429 L25.1428571,22.8571429 L25.1428571,18.2857143 Z" transform="translate(8 11)"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Back Office Support</h4>
                <p class="text-base text-center text-gray-500">As a business owner, you know how much work goes on behind the scenes to keep everything running smoothly. Our VAs can provide whatever kind of back office support you need – whether it’s claims management, data entry, research, or anything else.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-sky-500 rounded-full">
<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M10,0 C7.9296875,0 6.25,1.69429348 6.25,3.7826087 C6.25,5.87092391 7.9296875,7.56521739 10,7.56521739 C12.0703125,7.56521739 13.75,5.87092391 13.75,3.7826087 C13.75,1.69429348 12.0703125,0 10,0 Z M20,0 C17.9296875,0 16.25,1.69429348 16.25,3.7826087 C16.25,5.87092391 17.9296875,7.56521739 20,7.56521739 C22.0703125,7.56521739 23.75,5.87092391 23.75,3.7826087 C23.75,1.69429348 22.0703125,0 20,0 Z M5,7.56521739 C2.9296875,7.56521739 1.25,9.25951087 1.25,11.3478261 C1.25,13.4361413 2.9296875,15.1304348 5,15.1304348 C7.0703125,15.1304348 8.75,13.4361413 8.75,11.3478261 C8.75,9.25951087 7.0703125,7.56521739 5,7.56521739 Z M25,7.56521739 C22.9296875,7.56521739 21.25,9.25951087 21.25,11.3478261 C21.25,13.4361413 22.9296875,15.1304348 25,15.1304348 C27.0703125,15.1304348 28.75,13.4361413 28.75,11.3478261 C28.75,9.25951087 27.0703125,7.56521739 25,7.56521739 Z M15,13.8695652 C12.9296875,13.8695652 11.25,15.5638587 11.25,17.6521739 C11.25,19.7404891 12.9296875,21.4347826 15,21.4347826 C17.0703125,21.4347826 18.75,19.7404891 18.75,17.6521739 C18.75,15.5638587 17.0703125,13.8695652 15,13.8695652 Z M2.6171875,15.7608696 C1.11816375,16.6424935 0,18.2826087 0,20.173913 L0,21.6711957 C0,21.6711957 1.25,22.6956522 5,22.6956522 C8.75,22.6956522 10,21.6711957 10,21.6711957 L10,20.173913 C10,18.2826087 8.88183625,16.6424935 7.3828125,15.7608696 C6.63086,16.1401152 5.87402375,16.3913043 5,16.3913043 C4.12597625,16.3913043 3.36914125,16.1401152 2.6171875,15.7608696 Z M22.6171875,15.7608696 C21.1181638,16.6424935 20,18.2826087 20,20.173913 L20,21.6711957 C20,21.6711957 21.25,22.6956522 25,22.6956522 C28.75,22.6956522 30,21.6711957 30,21.6711957 L30,20.173913 C30,18.2826087 28.8818362,16.6424935 27.3828125,15.7608696 C26.63086,16.1401152 25.8740237,16.3913043 25,16.3913043 C24.1259763,16.3913043 23.3691412,16.1401152 22.6171875,15.7608696 Z M12.6171875,22.0652174 C11.1181638,22.9468413 10,24.5869565 10,26.4782609 L10,27.9755435 C10,27.9755435 11.25,29 15,29 C18.75,29 20,27.9755435 20,27.9755435 L20,26.4782609 C20,24.5869565 18.8818362,22.9468413 17.3828125,22.0652174 C16.63086,22.444463 15.8740237,22.6956522 15,22.6956522 C14.1259763,22.6956522 13.3691413,22.444463 12.6171875,22.0652174 Z" transform="translate(9 10)"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Technical Support</h4>
                <p class="text-base text-center text-gray-500">Downtime means lost money. Protect your business with expert technical support from one of our qualified and 
highly-trained 
VAs.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-sky-500 rounded-full">
<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M0,0 L0,29 L19,29 L19,15.7083333 L16.625,15.7083333 C15.9106451,15.7083333 15.4375,15.2268886 15.4375,14.5 C15.4375,13.7731126 15.9106451,13.2916667 16.625,13.2916667 L19,13.2916667 L19,0 L0,0 Z M2.375,2.41666667 L13.0625,2.41666667 L13.0625,26.5833333 L2.375,26.5833333 L2.375,2.41666667 Z M3.5625,3.625 L3.5625,7.25 L11.875,7.25 L11.875,3.625 L3.5625,3.625 Z M3.5625,9.66666667 L3.5625,13.2916667 L11.875,13.2916667 L11.875,9.66666667 L3.5625,9.66666667 Z M3.5625,15.7083333 L3.5625,19.3333333 L11.875,19.3333333 L11.875,15.7083333 L3.5625,15.7083333 Z M3.5625,21.75 L3.5625,25.375 L11.875,25.375 L11.875,21.75 L3.5625,21.75 Z" transform="translate(15 10)"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Sales & Billing</h4>
                <p class="text-base text-center text-gray-500">Streamlining your sales and billing processes with a dedicated sales and billing assistant means more efficient transactions, a better customer experience, and ultimately more revenue.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                <div class="p-3 text-white bg-sky-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M8.66666667,0 C4.32133333,0 1.91645827,1.58566978 0.869791667,2.53080614 L0,3.31605114 L0,4.47718398 L0,23.7684659 L0,27.8620387 L3.77083333,26.1679681 C4.80816667,25.701333 7.01333333,25.0454545 8.66666667,25.0454545 C10.4900279,25.0454545 12.1642689,25.698147 13.3333333,26.2889732 L13.3333333,26.3636364 C13.3333333,27.8175909 14.5293333,29 16,29 C17.4706667,29 18.6666667,27.8175909 18.6666667,26.3636364 L18.6666667,26.2889732 C19.8357307,25.698147 21.509972,25.0454545 23.3333333,25.0454545 C24.8986667,25.0454545 26.9349787,25.6462976 28.320312,26.2091613 L32,27.6998404 L32,23.7684659 L32,4.47460931 L32,3.31090205 L31.130208,2.5282316 C30.0835413,1.58441342 27.6773333,0 23.3333333,0 C19.5426667,0 17.2212707,1.2191946 16.002604,2.14719454 C14.790604,1.22183097 12.4706667,0 8.66666667,0 Z M8.66666667,2.63636364 C12.3608796,2.63636364 14.1009813,3.95062663 14.6666667,4.48490774 L14.6666667,23.9898796 C13.1736157,23.220826 11.0426436,22.4090909 8.66666667,22.4090909 C6.62533333,22.4090909 4.04133333,23.1515568 2.66666667,23.7684659 L2.66666667,4.47718398 C3.30933333,3.89718398 5.11733333,2.63636364 8.66666667,2.63636364 Z M23.3333333,2.63636364 C26.8933333,2.63636364 28.7,3.90383671 29.3333333,4.47460931 L29.3333333,23.7684659 C27.708,23.109375 25.3333333,22.4090909 23.3333333,22.4090909 C20.957356,22.4090909 18.826384,23.220826 17.3333333,23.9898796 L17.3333333,4.48748228 C17.914012,3.94039583 19.6555707,2.63636364 23.3333333,2.63636364 Z M22.6666667,6.59090909 L22.6666667,7.97088068 C22.0298973,8.08726269 21.498936,8.32577715 21.0885413,8.70205966 C20.5925413,9.15683239 20.3463547,9.73730614 20.3463547,10.4398971 C20.3463547,10.8590789 20.414688,11.2156471 20.554688,11.5109198 C20.6933547,11.8061925 20.892312,12.0643501 21.1536453,12.288441 C21.4149787,12.5125319 21.727208,12.7105476 22.0885413,12.8805931 C22.4485413,13.0506385 22.8415627,13.2191188 23.2682293,13.3852097 C23.6935627,13.5513006 23.9921253,13.7283904 24.1614587,13.9155722 C24.3321253,14.102754 24.4166667,14.3597165 24.4166667,14.6879437 C24.4166667,14.9832165 24.330792,15.2156699 24.1614587,15.383079 C23.990792,15.5504881 23.7595413,15.6353869 23.4635413,15.6353869 C23.0595413,15.6353869 22.7460413,15.5111483 22.5260413,15.2646483 C22.3060413,15.0181483 22.1979173,14.6565552 22.1979173,14.1833279 L20,14.1833279 C20,15.0441006 20.2537493,15.737629 20.760416,16.2635836 C21.2151133,16.7344065 21.8603573,17.0476012 22.6666667,17.115767 L22.6666667,18.4545455 L24,18.4545455 L24,17.1363636 C24.8133333,17.0612273 25.4342493,16.864921 25.9062507,16.4180574 C26.3782507,15.9685574 26.614584,15.3881461 26.614584,14.6776461 C26.614584,14.2584643 26.5412293,13.8981261 26.3932293,13.5988988 C26.2452293,13.2996715 26.0399787,13.037745 25.7786453,12.8136541 C25.517312,12.588245 25.2076253,12.3878402 24.8489587,12.2112039 C24.490292,12.0345675 24.1097293,11.8648927 23.7057293,11.7014382 C23.3017293,11.5366655 23.008188,11.3619652 22.8255213,11.1813743 C22.6428547,11.0007834 22.5494787,10.7573317 22.5494787,10.4501953 C22.5494787,10.1470135 22.630396,9.90972024 22.7890627,9.73703842 C22.946396,9.56435647 23.1703333,9.47700636 23.4583333,9.47700636 C23.7796667,9.47700636 24.027188,9.59125568 24.2005213,9.82457386 C24.3738547,10.057892 24.4609373,10.3911449 24.4609373,10.8235085 L26.6666667,10.8235085 C26.6666667,10.0339176 26.4390413,9.38217965 25.9843747,8.86940693 C25.5310413,8.35531602 24.8346667,7.99872727 24,7.90909091 L24,6.59090909 L22.6666667,6.59090909 Z" transform="translate(8 10)"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Coupons</h4>
                <p class="text-base text-center text-gray-500">Bookkeeping for even the smallest businesses can quickly turn into an energy-draining, time-sucking headache. Our meticulous accounting and bookkeeping services will free up loads of time so you can get back to what really matters.</p>
            </div>

        </div>
    </div>
</section>

<!-- Section 5 -->
<section class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24" name="pricing" id="pricing">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
            <h2 class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
                Simple, Transparent Pricing
            </h2>
            <p class="box-border mt-2 text-xl text-gray-900 border-solid sm:text-2xl">
                Whether you are a company of 1 or 10,000 employees, we can take your business to the next level with a highly-skilled, professionally trained virtual assistant.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-4 leading-7 text-gray-900 border-0 border-gray-200 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3">
            <!-- Price 1 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-mr-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Part Time Starter
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $7.99
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / hour
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    For small teams wanting to try out a Virtual Assistant for the first time
                </p>
                <ul class="flex-1 p-0 mt-4 ml-5 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Background Check
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Dedicated VA
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Weekly Progress Report

                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Onboarding Support

                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Account Manager
                    </li>
                </ul>
                <a href="#contact" class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-sky-600 no-underline bg-transparent border border-sky-600 rounded-md cursor-pointer hover:bg-sky-700 hover:border-sky-700 hover:text-white focus-within:bg-sky-700 focus-within:border-sky-700 focus-within:text-white sm:text-base md:text-lg">
                    Schedule a call
                </a>
            </div>
            <!-- Price 2 -->
            <div class="relative z-20 flex flex-col items-center max-w-md p-4 mx-auto my-0 bg-white border-4 border-sky-600 border-solid rounded-lg sm:p-6 md:px-8 md:py-16">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Full Time Starter
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $6.99
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / hour
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    For established teams wanting to expand operation and lower their overhead cost
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Background Check
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Dedicated VA
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Weekly Progress Report

                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Onboarding Support

                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Account Manager
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        24/7 Account Manager accessibility
                    </li>
                </ul>
                <a href="#contact" class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-white no-underline bg-sky-600 border rounded-md cursor-pointer hover:bg-sky-700 hover:border-sky-700 hover:text-white focus-within:bg-sky-700 focus-within:border-sky-700 focus-within:text-white sm:text-base md:text-lg">
                    Schedule a call
                </a>
            </div>
            <!-- Price 3 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-ml-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Full Time Bilingual
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $9.99
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / hour
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    For teams in need of bilingual Virtual Assistants (English & Spanish)
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Background Check
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Dedicated VA
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Weekly Progress Report

                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Onboarding Support

                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Account Manager
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-sky-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        24/7 Account Manager accessibility
                    </li>
                </ul>
                <a href="#contact" class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-sky-600 no-underline bg-transparent border border-sky-600 rounded-md cursor-pointer hover:bg-sky-700 hover:border-sky-700 hover:text-white focus-within:bg-sky-700 focus-within:border-sky-700 focus-within:text-white sm:text-base md:text-lg">
                    Schedule a call
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section 6 -->
<section class="w-full bg-white" name="contact" id="contact">

    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <p class="mb-2 font-medium text-gray-700 uppercase">Dont'wait for long</p>
                            <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Request a consultation</h2>
                        </div>
                        <p class="text-2xl text-gray-700">Hiring a virtual assistant is one of the best decisions you can make when growing.</p>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Book your appointment</h4>
                    <div class="relative w-full mt-10 space-y-8">
                        <div class="relative">
                            <label class="font-medium text-gray-900">Name:</label>
                            <input type="text" v-on:keyup="clearError" v-model="name" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-sky-600 focus:ring-opacity-50" :class="{'ring-4 ring-red-300' : formError.name}" placeholder="Enter Your Name">
                            <label class="font-medium text-red-500" v-if="formError.name">Name is Required</label>
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Email:</label>
                            <input type="text" v-on:keyup="clearError" v-model="email" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-sky-600 focus:ring-opacity-50" :class="{'ring-4 ring-red-300' : formError.name}" placeholder="Enter Your Email Address">
                            <label class="font-medium text-red-500" v-if="formError.name">Email is Required</label>
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Custom Message:</label>
                            <textarea v-on:keyup="clearError" v-model="message" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-sky-600 focus:ring-opacity-50" :class="{'ring-4 ring-red-300' : formError.name}" placeholder="Your Message*"> </textarea>
                            <label class="font-medium text-red-500" v-if="formError.name">A message is Required</label>
                        </div>
                        <div class="relative">
                            <a @click="bookNow" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-sky-600 rounded-lg hover:bg-sky-700 ease">Book Now</a>
                        </div>
                    </div>
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
        methods :{

        },

        data ()
        {
            return {
                formError:{
                    name:null,
                    email:null,
                    message:null,                  
                },
                name:null,
                email:null,
                message:null,
                showMenu:false,
                showModal:null,
            }
        },
        methods : {
            clearError()
            {
                this.formError.name = null;
                this.formError.email = null;
                this.formError.message = null;
            },
            bookNow()
            {
                if( this.name==null ||this.email==null || this.message==null){
                    if(this.name==null) this.formError.name = true;
                    if(this.email==null) this.formError.email = true;
                    if(this.message==null) this.formError.message = true;
                }
                else
                {
                    this.$inertia.replace(route('landing.success'));
                }
            },
            gotoJob()
            {
                this.$inertia.replace(route('applicants.form'));
            }
        }
    };

</script>