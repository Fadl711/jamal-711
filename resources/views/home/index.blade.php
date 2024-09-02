@extends('layout')

@section('conm')
<div class=" ">

{{-- ________________________________jamal__________fjj_____________________ --}}

{{-- ________________________________jamal__________fjj______________________ --}}

    <div class="mt-2 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-6 gap-2 p-2">
        <div class="bg-white shadow rounded-lg px-2 ">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class=" leading-none font-bold text-gray-900">2,340</span>
                    <h3 class="text-base font-normald text-gray-500">New products  </h3>
                </div>
                <div class="ml-10 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                    <svg class="w-5 h-" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
      
                  </div>
    </div>



    <div class="flex-grow bg-white rounded-xl shadow-md px-6 py-4 flex flex-col items-end">
        <div class="text-xs font-semibold tracking-wide uppercase py-1 px-3 rounded-full"
            style="background-color: rgb(123, 255, 253); color: rgb(0, 119, 117);">New</div>
        <div class="grid grid-cols-7 gap-1 flex-grow self-stretch">
            <div class="flex flex-col justify-end items-center">
                <div class="w-4 h-4 mx-auto rounded-full" style="background-color: rgb(123, 255, 253);"></div>
                <div class="text-center text-xs text-gray-400 font-semibold mt-2">M</div>
            </div>
            <div class="flex flex-col justify-end items-center">
                <div class="w-4 h-16 mx-auto rounded-full" style="background-color: rgb(0, 255, 244);"></div>
                <div class="text-center text-xs text-gray-400 font-semibold mt-2">T</div>
            </div>
            <div class="flex flex-col justify-end items-center">
                <div class="w-4 h-24 mx-auto rounded-full" style="background-color: rgb(0, 255, 244);"></div>
                <div class="text-center text-xs text-gray-400 font-semibold mt-2">W</div>
            </div>
            <div class="flex flex-col justify-end items-center">
                <div class="w-4 h-32 mx-auto rounded-full" style="background-color: rgb(0, 237, 219);"></div>
                <div class="text-center text-xs text-gray-400 font-semibold mt-2">T</div>
            </div>
            <div class="flex flex-col justify-end items-center">
                <div class="w-4 h-20 mx-auto rounded-full" style="background-color: rgb(0, 255, 244);"></div>
                <div class="text-center text-xs text-gray-400 font-semibold mt-2">F</div>
            </div>
            <div class="flex flex-col justify-end items-center">
                <div class="w-4 h-10 mx-auto rounded-full" style="background-color: rgb(123, 255, 253);"></div>
                <div class="text-center text-xs text-gray-400 font-semibold mt-2">S</div>
            </div>
            <div class="flex flex-col justify-end items-center">
                <div class="w-4 h-10 mx-auto rounded-full" style="background-color: rgb(123, 255, 253);"></div>
                <div class="text-center text-xs text-gray-400 font-semibold mt-2">S</div>
            </div>
        </div>
    </div>

    {{-- ______________________________________________________________________ --}}
 {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container mx-auto px-4 py-8 mt-16">
    <canvas id="myChart"></canvas>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
            label: 'Sales',
            data: [12, 19, 3, 5, 2, 3, 14],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
</script>
</div>
{{-- ______________________________________________________________ --}}
@endsection




