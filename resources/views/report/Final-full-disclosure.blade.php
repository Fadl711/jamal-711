<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> كشف حساب {{$Myanalysis}}</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <style>
        /* تخصيص للطباعة */
        @media print {
            body {
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .print-container {
                @apply w-full max-w-full mx-auto p-4;
            }

            .no-print {
                display: none;
            }
        }

        /* تحسين مظهر الجدول */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
        }

        .header-section, .totals-section {
            margin-top: 16px;
            border: 2px solid #000;
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-white">
    <div class="container mx-auto print-container">
        <!-- العنوان -->
        @isset($buss)
        <div class="header-section border-2 border-black bg-[#1749fd15]  rounded-lg my-2">
            <div class="rounded-lg grid grid-cols-3 gap-6 px-2 w-full">
                <!-- القسم الأيمن - Arabic content -->
                <div class="text-right space-y-2">
                    <h2 class="font-extrabold  ">{{ $buss->Company_Name }}</h2>
                    <div class="text-sm text-gray-700">{{ $buss->Services }}</div>
                    <div class="text-sm text-gray-700">العنوان: {{ $buss->Company_Address }}</div>
                    <div class="text-sm text-gray-700">التلفون: {{ $buss->Phone_Number }}</div>
                </div>

                <!-- القسم الأوسط - تحليل الحسابات -->
                <div class="flex items-center justify-center px-2">
                    <div class="w-24 h-20   flex items-center justify-center translate-x-10">
                        <img class=" bg-[#1749fd15] rounded-3xl" src="{{ url($buss->Company_Logo ? 'images/' . $buss->Company_Logo : '') }}" alt="">
                    </div>
                </div>

                <!-- القسم الأيسر - English content -->
                <div class="text-left space-y-2">
                    <h2 class="font-extrabold  ">{{ $buss->Company_NameE }}</h2>
                    <div class="text-sm text-gray-700">{{ $buss->ServicesE }}</div>
                    <div class="text-sm text-gray-700">Address: {{ $buss->Company_AddressE }}</div>
                    <div class="text-sm text-gray-700">Phone: {{ $buss->Phone_Number }}</div>
                </div>
            </div>
            <div class="text-center space-y-4">
                <p class="font-extrabold ">
                    كشف حساب {{ $Myanalysis ??' '}}
                </p>

                <div class="grid grid-cols-2 w-full gap-2 text-sm text-gray-700">
                    <div> تاريخ:
                        {{ $startDate }}
                    </div>
                    <div>{{ __('الى التاريخ  ') }}:
                        {{ $endDate }}
                    </div>
                </div>
            </div>

        </div>
    @endisset

        <header class="flex justify-between items-center border-b-2 border-gray-800 pb-1 mb-1">
            <div>
                <div class="flex">
                    <div class="flex mt-2 gap-5">
                        <div class="font-extrabold">{{ __('رقم ') }}  {{ $AccountClassName  ?? __(' ') }}:</div>
                        <div>{{ $customerMainAccount->sub_account_id ?? $customerMainAccount->main_account_id ?? __(' ') }}</div>
                        <div>{{ $customerMainAccount->sub_name ??$customerMainAccount->account_name?? __(' ') }}/{{ $customer->name_The_known ?? __(' ') }}</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex mt-2">
                    <div class="font-extrabold">{{ __('العملة') }} :</div>
                    <div>{{ $currencysettings ?? __('YR') }}</div>
                </div>
            </div>

        </header>
        <!-- جدول المنتجات -->
            <div class="w-full overflow-y-auto max-h-[80vh] container mx-auto print-container  bg-white">

                <table class="w-full text-sm overflow-y-auto max-h-[80vh]">
                    <tr class="bg-blue-100">
                        <th class="px-4 text-center">#</th>
                    <th class="px-4 text-right">اسم العميل</th>
                    <th class="px-4 text-center">رقم العميل</th>
                    <th class="px-4 text-center">الهاتف</th>
                    <th class="px-4 text-center"> المدين</th>
                    <th class="px-4 text-center"> الدائن</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @isset($balances)

                @foreach ($balances as $index => $balance)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 text-center ">{{ $index + 1 }}</td>
                        <td class="px-4 text-right">{{ $balance->sub_name }}</td>
                        <td class="px-4 text-center">{{ $balance->sub_account_id }}</td>
                        <td class="px-4 text-center">{{ $balance->Phone }}</td>
                        @php
                            $SumDebtoramount=0;
                            $SumCreditamount=0;
                            $SumAmount=$balance->total_debit-$balance->total_credit;
                                if($SumAmount>0)
                                {
                                    $SumDebtoramount=$SumAmount;
                                }
                                if($SumAmount<0)
                                {
                                    $SumCreditamount=$SumAmount;
                                }
                                @endphp
                                <td class="px-4 text-center">{{ number_format($SumDebtoramount, 2) }}</td>
                                <td class="px-4 text-center">{{ number_format(abs($SumCreditamount), 2) }}</td>
                    </tr>
                @endforeach
                <tr class="bg-blue-100">
                    <th colspan="4" class=" text-right">اجمالي الرصيد</th>
                    <th colspan="" class="text-center">    الإجمالي</th> {{-- TotalCostQuantityAvailable --}}
                    <th colspan="" class="text-center">الإجمالي    </th> {{-- TotalCostQuantityAvailable --}}


                </tr>
                 <tr class="">
                    <td colspan="4" class=" text-right"> </th>
                    <td class=" text-center ">{{ number_format($SumDebtor_amount) ?? 0 }}</td>
                    <td class=" text-center ">{{ number_format($SumCredit_amount) ?? 0 }}</td>
                </tr>
            </tbody>
                @endisset

        </table>
        <table class="w-[60%] text-sm ">
            <thead>
                <tr class="bg-blue-100">
                    <th >
                        @php
                        $sum=$SumDebtor_amount-$SumCredit_amount;
                        if ($sum>=0) {
                            $commintString  = "عليكم/ رصيد"   ;

                                         }
                                         if ($sum<0) {
                                            $commintString  = "لكم/ رصيد"   ;
                                         }
                        @endphp
                        <p class="">{{ $commintString }}</p>
                    </th>
                    <th class="px-2 text-right">
                        {{ number_format(abs($Sale_priceSum)) ?? 0 }}

                        <p class="text-sm">{{ $priceInWords }}</p>
                    </th>
                </tr>

            </thead>


</table>
        <!-- الإجماليات -->
        <div class="totals-section  p-4">
            <div class="flex justify-between">


                    <div>
                        <p class="text-sm" dir="ltr">المستخدم : {{ $UserName ?? 0 }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- زر الطباعة -->
        <div class="mt-4 no-print">
            <button onclick="printAndClose()" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">طباعة</button>

            <script>
                function printAndClose() {
                    window.print(); // أمر الطباعة
                    setTimeout(() => {
                        window.close(); // الإغلاق بعد بدء الطباعة
                    }, 500); // فترة الانتظار نصف ثانية فقط
                }
            </script>

            <button onclick="closeWindow()" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">إلغاء الطباعة</button>

            <script>
                function closeWindow() {
                    if (window.history.length > 1) {
                        window.history.back(); // العودة للصفحة السابقة
                    } else {
                        window.close(); // الإغلاق إذا كانت الصفحة مفتوحة في نافذة جديدة
                    }
                }
            </script>
        </div>
    </div>
</body>
</html>
