<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased ">
        {{-- @include('layouts.navigation') --}}
        <div class=" md:flex  ">
        <div class=" max-sm:hidden   ">

            <div class="w-2/2 h-screen text-white sticky top-0 p-4 bg-[#6A64F1]  border-b border-gray-100 ">
                <ul class="list-none ">
                    <li class="mb-2">
                        <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{route('home.indxe')}}">
                            <svg class="w-6 h-6 stroke-current " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="ml-2 text-sm font-medium"> الرئسية</span>
                      </a>
                      </li>
                    <li class="mb-2">
                        <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{route('sales.index')}}">
      
                        <svg class="w-6 h-6  text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17.345a4.76 4.76 0 0 0 2.558 1.618c2.274.589 4.512-.446 4.999-2.31.487-1.866-1.273-3.9-3.546-4.49-2.273-.59-4.034-2.623-3.547-4.488.486-1.865 2.724-2.899 4.998-2.31.982.236 1.87.793 2.538 1.592m-3.879 12.171V21m0-18v2.2"/>
                        </svg>
                        <span class="ml-2 text-sm font-medium">المبيعات</span>
          
                        </a></li>
                   
                        <li class="mb-2"><a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{route('Purchases.index')}}">
      
                            <svg class="w-6 h-6  text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                              </svg>
                            <span class="ml-2 text-sm font-medium">المشتريات</span>
              
                            </a></li>
                        <li class="mb-2"><a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{route('products.index')}}">
                            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">المنتجات</span>
                          </a></li>
                        <li class="mb-2">
                            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
                                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">تحليل البيانات</span>
                          </a></li>
                        <li class="mb-2">  <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
                            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">التقارير</span>
                          </a></li>
                        <li class="mb-2"> <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
                            <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">الرسائل</span>
                            <span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>
                          </a></li>
                        <li class="mb-2"> <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{route('customers.index')}}">
      
                            <svg class="w-6 h-6  text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                      </svg>
                      <span class="ml-2 text-sm font-medium">العملاء</span>
                              </a></li>
                        <li class="mb-2">
                            <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="{{route('suppliers.index')}}">
              
                              <svg class="w-6 h-6  text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                        </svg>
                        <span class="ml-2 text-sm font-medium">الموردين</span>
                                </a></li>
                        <li class="mb-2">  <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
                            <svg class="w-6 h-6  text-white stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            <span class="ml-2 text-sm font-medium">الإعدادات</span>
                          </a></li>
                    
                </ul>
            </div>
          </div>
           
            
              <div class=" bg-white p-2  ">
                @yield('conm')
        </div>
      </div>
               
    </body>
</html>
