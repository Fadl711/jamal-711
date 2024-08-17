@extends('layout')
@section('conm')
<div class="border-b mb-5 flex justify-between text-sm">
    <div class="text-bro flex items-center pb-2 pr-2 border-b-2 border-[#6A64F1] uppercase">



{{--     <p href="#" class="font-semibold  ">بيانات المنتاج</p>
    <hr class=" rounded-lg   border border-black rounded-s-lg    bg-bro"> --}}
    <div class="mx-10  w-full max-w-full bg-white">
        <form>

         <div class="mb-4 md:flex md:justify-around  text-right   ">



                <div class=" px-1  ">
                    <div class="mb-1">
                        <label for="name" class="labelSale">
                          اسم الصنف
                        </label>
                        <input type="text" name="name" id="contact_person _name" placeholder="name"
                        class="inputSale"></div>
                </div>

                <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                        <label for="quantity" class="labelSale">
                            الكمية
                        </label>
                        <input type="number" name="quantity" id="address" placeholder="quantity"
                            class="inputSale">
                        </div>
                    </div>

                            <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                        <label for="quantity" class="labelSale">
                            تكلفة الصنف
                        </label>
                        <input type="number" name="quantity" id="address" placeholder="quantity"
                            class="inputSale" />
                    </div>
                </div>

                <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                        <label for="price" class="labelSale">
                            سعر الشراء
                        </label>
                        <input type="number" name="price" id="price" placeholder="price"
                            class="inputSale" />
                    </div>
                </div>
                <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                        <label for="price" class="labelSale">
                            سعر البيع
                        </label>
                        <input type="number" name="price" id="price" placeholder="price"
                            class="inputSale" />
                    </div>
                </div>
                <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                        <label for="price" class="labelSale">
                        تاريح الانتهاء
                        </label>

                        <input type="date" name="price" id="price" placeholder=""
                            class="inputSale" />
                    </div>
                </div>


                <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                        <label for="quantity" class="labelSale">
                         الاجماليه
                        </label>
                        <input type="number" name="quantity" id="address" placeholder="quantity"
                            class="inputSale" />
                    </div>
                </div>
                <div class=" px-1  ">
                    <div class="mb-1">
                        <label for="barcod" class="labelSale">
                      الباركود
                      </label>
                        <input type="number" name="barcod" id="contact_person _name" placeholder="barcod  "
                            class="inputSale" />
                    </div>
                </div>

                <div class=" px-1 ">
                    <div class="mb-1">
                        <label for="discount" class="labelSale">
                            التخفيض
                        </label>
                        <input type="number" name="discount" id="address" placeholder="discount"
                            class="inputSale" />
                    </div>
                </div>

                <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                        <label for="address" class="labelSale">
                              العلامة التجارية
                        </label>
                        <input type="number" name="address" id="address" placeholder="Contact Person Number Phone"
                            class="inputSale" />
                    </div>
                </div>
                <div class="max-md:w-52 px-1 ">
                    <div class="mb-1">
                         <label for="address" class="labelSale">
                            الوصف
                        </label>
                            <textarea  name="description" id=""  placeholder="description"
                       class="inputSale  h-9"></textarea>

     </div>
    </div>
            </div>

        </form>

    </div>
</div>
</div>

<div class="flex items-center justify-center p-5">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-full bg-white">
        <form>
         <div class="-mx-3 flex flex-wrap">

                <div class="w-full px-1 sm:w-1/6">
                    <div class="mb-1">
                        <label for="name" class="mb-1 block text-base font-medium text-[#07074D]">
                          اسم الصنف
                        </label>
                        <input type="text" name="name" id="contact_person _name" placeholder="name"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

                <div class="w-full px-1 sm:w-1/6">
                    <div class="mb-1">
                        <label for="barcod" class="mb-1 block text-base font-medium text-[#07074D]">
                      الباركود
                      </label>
                        <input type="number" name="barcod" id="contact_person _name" placeholder="barcod  "
                            class="w-full rounded-md border border-[#e0e0e0] bg-white  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

                <div class="w-full px-1 sm:w-1/6">
                    <div class="mb-1">
                        <label for="discount" class="mb-1 block text-base font-medium text-[#07074D]">
                            التخفيض
                        </label>
                        <input type="number" name="discount" id="address" placeholder="discount"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

                <div class="w-full px-1 sm:w-1/6">
                    <div class="mb-1">
                        <label for="price" class="mb-1 block text-base font-medium text-[#07074D]">
                            سعر الصنف
                        </label>
                        <input type="number" name="price" id="price" placeholder="price"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white    text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

                <div class="w-full px-1 sm:w-1/6">
                    <div class="mb-1">
                        <label for="quantity" class="mb-1 block text-base font-medium text-[#07074D]">
                             ك/ المتوفرة
                        </label>
                        <input type="number" name="quantity" id="address" placeholder="quantity"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

                <div class="w-full px-1 sm:w-1/6">
                    <div class="mb-1">
                        <label for="address" class="mb-1 block text-base font-medium text-[#07074D]">
                 الحالة
                        </label>
                        <input type="text" name="status" id="address" placeholder="status"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-1 sm:w-1/4">
                    <div class="mb-1">
                        <label for="address" class="mb-1 block text-base font-medium text-[#07074D]">
                              العلامة التجارية
                        </label>
                        <input type="number" name="address" id="address" placeholder="Contact Person Number Phone"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-1 sm:w-1/3">
                    <div class="mb-1">


                         <label for="address" class="mb-1 block text-base font-medium text-[#07074D]">
                            الوصف
                        </label>
                            <textarea  name="description" id="" cols="10" rows="1" placeholder="description"
                       class="w-full rounded-md border border-[#e0e0e0] bg-white  text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
               ></textarea>

                    </div>
                </div>
                <div class="w-full px-1 sm:w-1/5">
                    <div class="mb-1">
                        <button
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                       حفظ البيانات
                    </button></div>
                </div>

            </div>
            <div class="w-full px-1 sm:w-1/5">
                <div class="mb-1">
                    <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                  الغاء
                </button></div>
            </div>

        </div>

                </div>
            </div>


        </form>

    </div>
</div>
@endsection
