<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PendaftarController extends Controller
{
    public function daftarWebsite(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
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
            ]);
            if ($validator->fails()) {
                foreach ($validator->errors()->all() as $error) {
                    toast($error,'error');
                }
                return redirect()->back();
            }
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->input('nama_lengkap'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
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
                'rt/rw' => $request->input('rw'),
                'kelurahan/desa' => $request->input('desa'),
                'kecamatan' => $request->input('kecamatan'),
                'kota/kabupaten' => $request->input('kabupaten'),
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
                'user_id' => $user->id,
                'lulus' => "false",
            ]);
            DB::commit();
            toast('Data berhasil disimpan','success');
            return redirect()->back();
        }catch (\Exception $e){
            toast($e->getMessage(),'error');
        }
    }
}
