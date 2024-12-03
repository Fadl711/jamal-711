@extends('layout')
@section('conm')

<x-navbar_accounts/>
<h1>انشأ حساب فرعي</h1>

<script src="{{url('payments.js')}}">   </script>

<script>
    $(document).ready(function() {
        // تهيئة Select2 مع تحديد الحد الأدنى لعدد المدخلات المطلوبة
        $('.select2').select2({
            minimumInputLength: 1 // بدء البحث بعد كتابة حرف واحد
        });

        // التركيز على حقل الاسم عند بدء التشغيل
        $('#sub_name').focus();

        // التعامل مع إرسال النموذج وحفظ البيانات باستخدام jQuery
        $('#SubAccount').on('submit', function(event) {
    event.preventDefault(); // منع تحديث الصفحة

    // إخفاء أي رسائل سابقة
    $('#successMessage').hide();

    // إضافة مؤشر تحميل
    $('#submitButton').prop('disabled', true).text('جارٍ الحفظ...');

    // تجميع بيانات النموذج
    var formData = $(this).serialize();

    // إرسال الطلب باستخدام AJAX
    $.ajax({
        url: '{{ route("Main_Account.storc") }}',
        method: 'POST',
        data: formData,
        success: function(response) {
            if (response.success) {
                // إظهار رسالة النجاح
                $('#successMessage').show().text(response.message);

                // إخفاء الرسالة بعد 3 ثوانٍ
                setTimeout(function() {
                    $('#successMessage').hide();
                }, 3000);

                // إعادة التركيز على حقل معين
                $('#debtor_amount').val($('#debtor_amount').val() || 0); 
$('#creditor_amount').val($('#creditor_amount').val() || 0);

                // تفريغ الحقول المحددة فقط
                $('#sub_name').val('');           // تفريغ حقل الاسم
                $('#debtor_amount').val('');      // تفريغ حقل المبلغ المدين
                $('#creditor_amount').val('');    // تفريغ حقل المبلغ الدائن
                $('#Phone').val('');              // تفريغ حقل الهاتف
                $('#name_The_known').val('');     // تفريغ حقل الاسم المعروف
                $('#sub_name').focus();

                // تفعيل الزر مرة أخرى
                $('#submitButton').prop('disabled', false).text('حفظ');
            } else {
                // إظهار رسالة خطأ عند وجود اسم مكرر
                $('#successMessage').show().text(response.message || 'يوجد نفس هذا الاسم من قبل');
                setTimeout(function() {
                    $('#successMessage').hide();
                }, 8000);

                // إعادة التركيز على الحقل
                $('#sub_name').focus();

                // تفعيل الزر مرة أخرى
                $('#submitButton').prop('disabled', false).text('حفظ');
            }
        },
        error: function(xhr) {
            // التعامل مع الأخطاء
            let errorMessage = 'حدث خطأ ما. حاول مرة أخرى.';
            if (xhr.status === 400 && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            $('#successMessage').show().text(errorMessage);

            // إخفاء الرسالة بعد 8 ثوانٍ
            setTimeout(function() {
                $('#successMessage').hide();
            }, 8000);

            // تفعيل الزر مرة أخرى
            $('#submitButton').prop('disabled', false).text('حفظ');
        }
    });
});


        // وظيفة لإضافة البيانات إلى الجدول
       

        // منع السلوك الافتراضي لزر Enter
        $('#ajaxForm').on('keypress', function(event) {
            if (event.which === 13) { // 13 هو كود زر Enter
                event.preventDefault(); // منع إرسال النموذج
            }
        });


    });
</script>

<br>
<div id="">
    <form id="SubAccount" class="p-4 md:p-5" method="POST">
        @csrf
        <div id="successMessage" class="alert-success" style="display: none;"></div>

        <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="mb-2">
                <label class="labelSale" for="sub_name">اسم الحساب</label>
                <input name="sub_name" class="inputSale input-field" id="sub_name" type="text" placeholder="اسم الحساب الجديد"/>
            </div>
            <div class="mb-2">
                <label class="labelSale" for="Main_id">الحساب الرئيسي</label>
                <select dir="ltr" class="input-field select2 inputSale" id="Main_id" name="Main_id">
                    
                    @forelse($MainAccounts as $MainAccount)
                    <option value="{{$MainAccount['main_account_id']}}">{{$MainAccount['account_name']}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="mb-2">
                <label class="labelSale" for="debtor_amount">رصيد افتتاحي مدين (اخذ)</label>
                <input name="debtor_amount" class="inputSale input-field" id="debtor_amount" type="number" placeholder="0"/>
            </div>
            <div class="mb-2">
                <label class="labelSale" for="creditor_amount">رصيد افتتاحي دائن (عاطي)</label>
                <input name="creditor_amount" class="inputSale input-field" id="creditor_amount" type="number" placeholder="0"/>
            </div>
            <div class="mb-2">
                <label for="Phone" class="labelSale">رقم التلفون</label>
                <input type="number" name="Phone" id="Phone" class="input-field inputSale" />
            </div>
            <div class="mb-2">
                <label for="name_The_known" class="labelSale">العنوان</label>
                <input type="text" name="name_The_known" id="name_The_known" class="input-field inputSale" />
            </div>
           
        </div>
        @auth
        <input type="hidden" name="User_id" required id="User_id" value="{{Auth::user()->id}}">
        @endauth
        <button type="submit" id="submit" class="text-white inline-flex items-center bgcolor hover:bg-stone-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            حفظ البيانات
        </button>
    </form>

   
</div>

<div id="errorMessage" style="display: none; color: red;"></div>

<style>
    .alert-success {
        color: green;
        font-weight: bold;
    }
</style>

@endsection
