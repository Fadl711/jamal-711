<?php

namespace App\Http\Controllers\purchases;

use App\Enum\AccountClass;
use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\MainAccount;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseInvoice;
use App\Models\SubAccount;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //
    public function bills_purchase_show(){
    
        
        return view('invoice_purchases.bills_purchase_show');
    
    }
    
    public function create() {
        $Currency_name=Currency::all();
        $products = Product::all(); 
        $Warehouse=Warehouse::all();
        $mainAccount_supplier=MainAccount::where('AccountClass',AccountClass::SUPPLIER->value)->first();

        if($mainAccount_supplier)
        {
            $allSubAccounts = SubAccount::all();
                return view('Purchases.create', ['AllSubAccounts'=>$allSubAccounts,'mainAccount_supplier'=>$mainAccount_supplier,
                'products' => $products,
                'Currency_name'=>$Currency_name,
                'Warehouse'=>$Warehouse
                 
            
            ]);
                 }
        return view('Purchases.create');
  
    }


    public function store(Request $request)
    {
    
        // // التحقق من البيانات المطلوبة
        

        $purchaseInvoice =new PurchaseInvoice();
        $purchaseInvoice->Receipt_number = $request->Receipt_number;
        $purchaseInvoice->Total_invoice = !empty($request->Total_invoice) ? $request->Total_invoice : 0;
        $purchaseInvoice->Total_cost = !empty($request->Total_cost) ? $request->Total_cost : 0;
        $purchaseInvoice->User_id =$request->User_id; // تعيين المستخدم الحالي إذا كان فارغاً
        $purchaseInvoice->Payment_type = !empty($request->Payment_type) ? $request->Payment_type_id : null; // يمكن تعيين قيمة null إذا كان فارغاً
        $purchaseInvoice->Supplier_id = $request->Supplier_id;
        $purchaseInvoice->save();
// إعادة البيانات كاستجابة
return response()->json([
    'success' => true,
    'message' => 'تم الحفظ بنجاح',
    'invoice_number' => $purchaseInvoice->id,
    'supplier_id' => $purchaseInvoice->Supplier_id
], 201);
    }
    

public function storc(Request $request)
{
  
    // تحقق من صحة الإدخالات وتعيين قيم افتراضية للقيم الفارغة
    $purchase =new Purchase;
 
         $purchase->Product_name      =$request->product_name;
         $purchase->Barcode            =$request->Barcode ; // باركود افتراضي إذا كان فارغًا
         $purchase->Quantity           =$request->Quantity; // تعيين 0 إذا كانت الكمية فارغة
         $purchase->Purchase_price     =$request->Purchase_price; // تعيين 0 إذا كان سعر الشراء فارغًا
         $purchase->Selling_price      =$request->Selling_price ; // تعيين 0 إذا كان سعر البيع فارغًا
         $purchase->Total              =$request->Total  ; // تعيين 0 إذا كان الإجمالي فارغًا
         $purchase->Cost               =$request->Cost ?? 0; // تعيين 0 إذا كانت التكلفة فارغة
         $purchase->Currency_id        =$request->Currency_id ; // تعيين null إذا كان Currency_id فارغًا
         $purchase->Supplier_id         =$request->supplier_name ; // تعيين null إذا كان Supplier_id فارغًا
         $purchase->User_id            =$request->User_id; // تعيين معرف المستخدم الحالي إذا كان فارغًا
         $purchase->Purchase_invoice_id =$request->purchase_invoice_id; // تعيين null إذا كان Purchase_invoice_id فارغًا
         $purchase->Store_id           =$request->Store_id ; // تعيين null إذا كان Store_id فارغًا
         $purchase->Discount_earned    =$request->Discount_earned ?? 0; // تعيين 0 إذا كان الخصم المكتسب فارغًا
         $purchase->Profit             =$request->Profit ?? 0; // تعيين 0 إذا كان الربح فارغًا
         $purchase->Exchange_rate      =$request->Exchange_rate ?? 0 ; // تعيين 1.0 كمعدل صرف افتراضي
         $purchase->note               =$request->note ?? null ;// تعيين فارغ إذا كانت الملاحظة فارغة
         $purchase->product_id         =$request->product_id; // تعيين 0 إذا كانت القيمة فارغة

        // إنشاء السجل الجديد في قاعدة البيانات
        $purchase->save();
        $Purchasesum = Purchase::where('Purchase_invoice_id', $purchase->Purchase_invoice_id)->sum('Total');
        return response()->json([
        'success' =>true,'message'=> 'تم الحفظ بنجاح',
        'purchase' => $purchase,
        'Purchasesum'=>$Purchasesum
        ],201 );
        
   
    
}


 private function convertArabicNumbersToEnglish($value)
    {
        $arabicNumbers = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        return str_replace($arabicNumbers, $englishNumbers, $value);
    }

// في ProductController
public function search(Request $request)
{
    $id = $request->query('id');
     // الحصول على id المنتج من الطلب
    $productData = Product::where('product_id', $id)->first(); // البحث عن المنتج باستخدام id
  
    if ($productData) {
        $product = [
            'product_name' => $productData->product_name,
            'Barcode' => $productData->Barcode, // لا حاجة لتحويله هنا
            'Selling_price' => $productData->Selling_price, // لا حاجة لتحويله هنا
            'Purchase_price' => $productData->Purchase_price, // لا حاجة لتحويله هنا
            'Categorie_id' => $productData->Categorie_id, // لا حاجة لتحويله هنا
            'Quantity' => $productData->Quantity, // لا حاجة لتحويله هنا
        ];

        // تحويل الأرقام العربية إلى إنجليزية
        $product['Barcode'] = $this->convertArabicNumbersToEnglish($product['Barcode']);
        $product['Selling_price'] = $this->convertArabicNumbersToEnglish($product['Selling_price']);
        $product['Purchase_price'] = $this->convertArabicNumbersToEnglish($product['Purchase_price']);
        $product['Categorie_id'] = $this->convertArabicNumbersToEnglish($product['Categorie_id']);
        $product['Quantity'] = $this->convertArabicNumbersToEnglish($product['Quantity']);

        return response()->json($product); // إرجاع تفاصيل المنتج إذا تم العثور عليه
    }

    return response()->json(['message' => 'Product not found'], 404); // إرجاع رسالة خطأ إذا لم يتم العثور على المنتج
}
}
