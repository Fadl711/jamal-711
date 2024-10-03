<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body >

<div class="container mx-auto">
    @include('includes.header2')
<div class=" relative container p-3 flex justify-between bg-gray-100 border-black border-2 rounded-lg h-40 my-2 text-center font-bold  mx-auto">
    <div class="p-3  bg-gray-100 border-black  h-16 my-1 text-right font-bold space-y-2 ">

        <p >رقم القيد : {{$daily->entrie_id}}</p>
        <p >رقم المرجع : {{$daily->Daily_page_id}}</p>
    </div>
    <div class="p-3 w-52 bg-gray-100 border-black   h-16 my-1 text-center text-2xl font-bold underline underline-offset-8">

        <p >  القيد /نقد</p>
    </div>
    <div class=" w-52 bg-gray-100  my-1 text-center font-bold space-y-2">
        <div>

            <p > تاريخ القيد : {{ \Carbon\Carbon::now()->format('Y/m/d') }}</p>
            <p >  المبلغ </p>
            <p id="maont2" class="bg-white h-10 font-bold text-lg pt-2">{{$daily->Amount_debit ? number_format($daily->Amount_debit) : number_format($daily->Amount_Credit)}} <span class="pb-1  font-normal">ر.ي </span></p>
        </div>
    </div>
</div>

<div class="container p-3 relative space-y-2  text-base bg-gray-200 border-black  rounded-lg  my-2 text-right font-bold mx-auto">
    @php
    $resultDebit=$mainc->where('main_account_id',$daily->account_debit_id)->first();
    $resultDebit1=$suba->where('Main_id',$resultDebit->main_account_id)->first();

    $resultCredit=$mainc->where('main_account_id',$daily->account_Credit_id)->first();
    $resultCredit1=$suba->where('Main_id',$resultCredit->main_account_id)->first();
    @endphp

    <div class="container">
        <table class=" bg-gray-100 container text-center  border-black border-2 ">
            <thead>
                <tr class="bg-gray-300 ">
                    <th class="px-2 py-2  border-black border-2 " >م</th>
                    <th class="  max-w-72 border-black border-2">اسم الحساب </th>
                    <th class="px-2 py-2 min-w-16 max-w-24  border-black border-2">مدين (عليه) </th>
                    <th class="px-2 py-2 min-w-10 max-w-14  border-black border-2">دائن (له) </th>
                    <th class="px-2 py-2 min-w-40 max-w-40  border-black border-2">البيان</th>

                </tr>
            </thead>
            <tbody>
                <tr class="text-right">
                    <td class="py-2 px-2 border-black border-2">1</td>
                    <td class="py-2 px-2 border-black border-2">{{$resultDebit1->sub_name}}</td>
                     <td class="py-2 px-2 border-black border-2">{{number_format($daily->Amount_debit)}}</td>
                    <td class="py-2 px-2 border-black border-2">0</td>
                    <td class="py-2 px-2 ">{{$daily->Statement}}</td>

                </tr>
                <tr class="text-right">
                    <td class="py-2 px-2 border-black border-2">2</td>
                    <td class="py-2 px-2 border-black border-2">{{$resultCredit1->sub_name}}</td>
                    <td class="py-2 px-2 border-black border-2">0</td>
                    <td class="py-2 px-2 border-black border-2">{{number_format($daily->Amount_Credit)}}</td>
                    <td class="py-2 px-2 "> </td>
                </tr>
            </tbody>
        </table>
        <br>
        <hr class="border-t-2 bg-black">
        <br>
        <br>
        <div class="flex justify-between mx-10">


            <p >المحاسب............................ </p>
        </div>
    </div>
</div>
</div>

<Script>
    window.print()
</Script>

</body>

</html>
