@extends('layout')
@section('conm')

        <ul class="grid grid-cols-4 text-right container relative shadow-md px-2 py-2  bg-white">
            <li class="  rounded "> 
             
                <a href="{{route('create.index')}}"  class="text-sm  py-2   px-2   leading-none rounded-md hover:bg-gray-100" > سند قبض جديد</a>
            </li>
            <li class="   rounded ">
                <a href="{{route('show_all_receipt')}}"  class="text-sm py-2 px-2  leading-none rounded-md hover:bg-gray-100" > المقبوضات</a>

            </li>
            <li class="  rounded "> 
                <a href="{{route('exchange.index')}}"  class="text-sm py-2 px-2  leading-none rounded-md hover:bg-gray-100" > سند صرف جديد </a>

            </li>
            <li class="    rounded ">  
                <a href="{{route('all_exchange_bonds')}}" id="Accountbalancing"  class="text-sm py-2 px-2  rounded-md hover:bg-gray-100" >  المدفوعات</a>
            </li>

        </ul>
    
        <div class=" container relative  ">
            <button onclick="window.history.back()">رجوع</button>
     
    @yield('bonds')
</div>

<script>
  
</script>
@endsection