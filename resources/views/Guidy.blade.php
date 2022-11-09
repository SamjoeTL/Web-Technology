<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guidy') }}
        </h2>
    </x-slot>
    
    <body>
        <header class="w-4/5 mx-auto py-6 flex justify-between items-center">
            <!-- Brand name -->
            <div>
              <h1 class="text-2xl text-Tale-500 font-bold"><a href="Guidy.html">Guidy</a></h1>
            </div>
          
            <!-- Navbar -->
            <div>
              <nav>
                <ul class="flex items-center">
                    <li class="mx-4 hover:bg-teal-200">
                      <a href="Guidy.html" class="font-bold text-gray-800">Home</a>
                    </li>
                    <li class="mx-4 hover:bg-teal-200">
                      <a href="Guide.html" class="font-medium text-slate-800">Plan Trip</a>
                    </li>
                    <li class="mx-4 hover:bg-teal-200">
                      <a  href="About Us.html" class="font-medium text-slate-800">About us</a>
                    </li>
                    <li class="mx-4 hover:bg-teal-200">
                      <a href="" class="font-medium text-slate-800">Costumer Services</a>
                    </li>
                      <li class="mx-4">
                      <button class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-6  rounded-full "><a href="Log In.html">log in</a></button>
                    </li>
                  </ul>
              </nav>
            </div>
          </header>
          

          <!-- Image using Polygon so can add text -->

          <div class="relative h-96 m-10 overflow-hidden bg-teal-500 rounded-lg">
            <div class="absolute z-30 flex w-full h-full">
              <div class="relative z-30 w-5/6 px-6 py-8 text-white md:py-10 md:w-1/2">
                <h2 class="text-4xl">Find next place to travel <br /> 
                  <br />
                  Discover Amazing place in Bali
                </h2>
                
                <button class="bg-black hover:bg-slate-900 text-white font-bold py-5 px-20 my-16 rounded-full "><a href="Guide.html">Plan Your Trip</a></button>
                
              </div>
              <div class="absolute top-0 right-0 flex w-full h-full">
                <div class="w-1/3 h-full bg-teal-500"></div>
                <div class="relative w-1/3">
                  <svg
                    fill="currentColor"
                    viewBox="0 0 100 100"
                    class="absolute inset-y-0 z-20 h-full text-teal-500"
                  >
                    <polygon id="diagonal" points="0,0 100,0 50,100 0,100"></polygon>
                  </svg>
                  <svg
                    fill="currentColor"
                    viewBox="0 0 100 100"
                    class="absolute inset-y-0 z-10 h-full ml-6 text-white opacity-50"
                  >
                    <polygon points="0,0 100,0 50,100 0,100"></polygon>
                  </svg>
                </div>
              </div>
            </div>
            <div class="absolute top-0 right-0 block w-9/12 h-full">
              <img
                class="object-cover h-full min-w-full"
                src="Kuta.jpg" 
                alt="kuta"
              />
            </div>
          </div>
    </body>   

    </x-app-layout>