<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Provider;
use App\Product;
use App\PurchaseDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use Carbon\Carbon;

use Barryvdh\DomPDF\Facade\Pdf;



class PurchaseController extends Controller
{

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('can:purchases.create')->only(['create','store']);
            $this->middleware('can:purchases.index')->only(['index']);
            $this->middleware('can:purchases.show')->only(['show']);
            $this->middleware('can:change.status.purchases')->only(['change_status']);
            $this->middleware('can:purchases.pdf')->only(['pdf']);
            $this->middleware('can:upload.purchases')->only(['upload']);
        }
        public function index()
        {
            $purchases = Purchase::get();
            return view('admin.purchase.index', compact('purchases'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $providers = Provider::get();
            $products = Product::where('status', 'ACTIVE')->get();
            return view('admin.purchase.create', compact('providers','products'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function Store(StoreRequest  $request)
        {
            $purchase = Purchase::create($request->all()+[
                'user_id'=>Auth::user()->id,
                'purchase_date'=>Carbon::now('America/Bogota'),
            ]);
            foreach ($request->product_id as $key => $product) {
                $results[] = array("product_id"=>$request->product_id[$key], "quantity"=>$request->quantity[$key], "price"=>$request->price[$key]);
            }
            $purchase->purchaseDetails()->createMany($results);
            return redirect()->route('purchases.index');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Purchase  $purchase
         * @return \Illuminate\Http\Response
         */
        public function Show(Purchase $purchase)
        {


            $subtotal = 0 ;
            $purchaseDetails = $purchase->purchaseDetails;
            foreach ($purchaseDetails as $purchaseDetail) {

                $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
            }
            return view('admin.purchase.show', compact('purchase', 'purchaseDetails', 'subtotal'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Purchase  $purchase
         * @return \Illuminate\Http\Response
         */
        public function edit(Purchase $purchase)
        {
            //$providers = Provider::get();
            //return view('admin.purchase.edit', compact('purchase'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Purchase  $purchase
         * @return \Illuminate\Http\Response
         */
        public function Update( UpdateRequest  $request, Purchase $purchase)
        {
            //$purchase->update($request->all());
            //return redirect()->route('purchases.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Purchase  $purchase
         * @return \Illuminate\Http\Response
         */
        public function destroy(Purchase $purchase)
        {
            //$purchase->delete();
            //return redirect()->route('purchases.index');
        }
        public function pdf(Purchase $purchase)
        {

            $subtotal = 0 ;
            $purchaseDetails = $purchase->purchaseDetails;
            foreach ($purchaseDetails as $purchaseDetail) {

                $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
            }
            $pdf = PDF::loadView('admin.purchase.pdf', compact('purchase','subtotal','purchaseDetails'));
            return $pdf->download('Reporte_de_Compra_'.$purchase->id.'.pdf');
        }
        public function upload(Request  $request, Purchase $purchase)
        {
            //$purchase->update($request->all());
            //return redirect()->route('purchases.index');
        }


        public function  change_status( Purchase $purchase)
        {
            if ($purchase->status == 'VALID') {
                $purchase->update(['status'=>'CANCELED']);
                return redirect()->back();
            }else{
                $purchase->update(['status'=>'VALID']);
                return redirect()->back();
            }
        }

    }



