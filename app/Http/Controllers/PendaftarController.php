<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PendaftarController extends Controller
{
    public function download($id){
        if($id == 1){
            $file = public_path()."/file/formulir.pdf";
            $headers = array(
                'Content-Type: application/pdf',
            );
            return response()->download($file, 'pendaftaran.pdf', $headers);
        }elseif($id ==2){
            $file = public_path()."/file/ketentuan.pdf";
            $headers = array(
                'Content-Type: application/docx',
            );
            return response()->download($file, 'ketentuan.pdf', $headers);
        }elseif($id == 3){
            $file = public_path()."/file/berkas.pdf";
            $headers = array(
                'Content-Type: application/xlsx',
            );
            return response()->download($file, 'berkas.pdf', $headers);
        }else{
            return redirect()->back();
        }
    }
    public function daftarWebsite(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'kompetensi_keahlian' => 'required',
                'nama_lengkap' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'asal_sekolah' => 'required',
                'jenis_kelamin' => 'required',
                'agama' => 'required',
                'kewarganegaraan' => 'required',
                'jalan' => 'required',
                'rt/rw' => 'required',
                'kelurahan/desa' => 'required',
                'kecamatan' => 'required',
                'kota/kabupaten' => 'required',
                'provinsi' => 'required',
                'jenis_tinggal' => 'required',
                'telephone' => 'required',
                'nama_ayah' => 'required',
                'nik_ayah' => 'required',
                'tanggal_lahir_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'telephone_ayah' => 'required',
                'nama_ibu' => 'required',
                'nik_ibu' => 'required',
                'tanggal_lahir_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'telephone_ibu' => 'required',
                'file_skl' => 'required|mimes:pdf|max:2048',
                'file_kk' => 'required|mimes:pdf|max:2048',
                'file_akte' => 'required|mimes:pdf|max:2048',
                'file_kip' => 'mimes:pdf|max:2048',
                'file_sktm' => 'mimes:pdf|max:2048',
            ]);
            if ($validator->fails()) {
                foreach ($validator->errors()->all() as $error) {
                    toast($error,'error');
                }
                return redirect()->back()->withInput($request->all());
            }
            DB::beginTransaction();
            $file_skl_name = null;
            $file_kk_name = null;
            $file_akte_name = null;
            $file_kip_name = null;
            $file_sktm_name = null;
            if($request->hasFile('file_skl')){
                $file_skl = $request->file('file_skl');
                $file_skl_name = time()."_".$file_skl->getClientOriginalName();
                $file_skl->move(public_path('file/pendaftar/skl'),$file_skl_name);
            }
            if($request->hasFile('file_kk')){
                $file_kk = $request->file('file_kk');
                $file_kk_name = time()."_".$file_kk->getClientOriginalName();
                $file_kk->move(public_path('file/pendaftar/kk'),$file_kk_name);
            }
            if($request->hasFile('file_akte')){
                $file_akte = $request->file('file_akte');
                $file_akte_name = time()."_".$file_akte->getClientOriginalName();
                $file_akte->move(public_path('file/pendaftar/akte'),$file_akte_name);
            }
            if($request->hasFile('file_kip')){
                $file_kip = $request->file('file_kip');
                $file_kip_name = time()."_".$file_kip->getClientOriginalName();
                $file_kip->move(public_path('file/pendaftar/kip'),$file_kip_name);
            }
            if($request->hasFile('file_sktm')){
                $file_sktm = $request->file('file_sktm');
                $file_sktm_name = time()."_".$file_sktm->getClientOriginalName();
                $file_sktm->move(public_path('file/pendaftar/sktm'),$file_sktm_name);
            }
            Pendaftar::create([
                'kompetensi_keahlian' => $request->input('kompetensi_keahlian'),
                'nama_lengkap' => $request->input('nama_lengkap'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'asal_sekolah' => $request->input('asal_sekolah'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'agama' => $request->input('agama'),
                'kewarganegaraan' => $request->input('kewarganegaraan'),
                'jalan' => $request->input('jalan'),
                'rt/rw' => $request->input('rt/rw'),
                'kelurahan/desa' => $request->input('kelurahan/desa'),
                'kecamatan' => $request->input('kecamatan'),
                'kota/kabupaten' => $request->input('kota/kabupaten'),
                'provinsi' => $request->input('provinsi'),
                'jenis_tinggal' => $request->input('jenis_tinggal'),
                'telephone' => $request->input('telephone'),
                'nama_ayah' => $request->input('nama_ayah'),
                'nik_ayah' => $request->input('nik_ayah'),
                'tanggal_lahir_ayah' => $request->input('tanggal_lahir_ayah'),
                'pendidikan_ayah' => $request->input('pendidikan_ayah'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'penghasilan_ayah' => $request->input('penghasilan_ayah'),
                'telephone_ayah' => $request->input('telephone_ayah'),
                'nama_ibu' => $request->input('nama_ibu'),
                'nik_ibu' => $request->input('nik_ibu'),
                'tanggal_lahir_ibu' => $request->input('tanggal_lahir_ibu'),
                'pendidikan_ibu' => $request->input('pendidikan_ibu'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                'penghasilan_ibu' => $request->input('penghasilan_ibu'),
                'telephone_ibu' => $request->input('telephone_ibu'),
                'sumber_rekomendasi' => $request->input('sumber_rekomendasi'),
                'nama_sumber_rekomendasi' => $request->input('nama_sumber_rekomendasi'),
                'user_id' => null,
                'lulus' => "false",
                'file_skl' => $file_skl_name,
                'file_kk' => $file_kk_name,
                'file_akte' => $file_akte_name,
                'file_kip' => $file_kip_name ? $file_kip_name : null,
                'file_sktm' => $file_sktm_name ? $file_sktm_name : null,
            ]);
            DB::commit();
            toast('Data berhasil disimpan','success');
            return redirect()->back();
        }catch (\Exception $e){
            DB::rollBack();
            toast($e->getMessage(),'error');
            return redirect()->back()->withInput($request->all());
        }
    }
}
