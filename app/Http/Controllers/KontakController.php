<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KontakController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:kontak,email',
            'phone' => 'required|numeric|unique:kontak,phone',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                toast($error,'error');
            }
            return redirect()->back();
        }
        try {
            DB::beginTransaction();
            Kontak::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
            DB::commit();
            toast('Data berhasil disimpan','success');
            return redirect()->back();
        }catch (\Exception $e){
            DB::rollBack();
            toast($e->getMessage(),'error');
            return redirect()->back();
        }
    }
}
