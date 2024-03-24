<?php
/*
namespace App\Http\Controllers\Send;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;*/
namespace App\Http\Controllers\Send;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LinkFavMedicine;
use App\Models\LinkMedicineSWithOrders;
use App\Models\Medicine;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    public function showCategories()
    {

        $allCategories = Category::select('id', 'name_' . app()->getLocale() . ' as name')->get();
        if ($allCategories === 0 || $allCategories->isEmpty()) {
            return response()->json([
                'message' => 'I do not have categories'
            ]);
        }

        return response()->json($allCategories);
    }

    public function show()
    {
        return response()->json([
            'msg' => "fouad"
        ]);
        $allCategories = Category::select('id', 'name_' . app()->getLocale() . ' as name')->get();
        if ($allCategories === 0 || $allCategories->isEmpty()) {
            return response()->json([
                'message' => 'I do not have categories'
            ]);
        }

        return response()->json($allCategories);
    }

    public function store(Request $request)
    {
        DB::table('medicines')->insert([
            "scientific_en" => $request->scientific_en,
            "scientific_ar" => $request->scientific_ar,
            "trade_en" => $request->trade_en,
            "trade_ar" => $request->trade_ar,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "endDate" => $request->endDate,
            "image" => $request->image,
            "company_id" => $request->company_id,
            "category_id" => $request->category_id,
            "created_at" => now(),
            "updated_at" => now()
        ]);
        return response()->json(['messege' => 'data stored succesfully']);
    }

    public function update(Request $request, string $id)
    {
        DB::table("medicines")->where("id", $id)->update(
            [
                "scientific_en" => $request->scientific_en,
                "scientific_ar" => $request->scientific_ar,
                "trade_en" => $request->trade_en,
                "trade_ar" => $request->trade_ar,
                "quantity" => $request->quantity,
                "price" => $request->price,
                "endDate" => $request->endDate,
                "image" => $request->image,
                "company_id" => $request->company_id,
                "category_id" => $request->category_id,
            ]
        );
        return response()->json(['messege' => 'data updated succesfully']);
    }
}



