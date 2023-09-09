<?php

namespace App\Http\Controllers;

use App\Models\Admin\Karya;
use DB;
use ErrorException;
use Exception;
use Illuminate\Http\Request;
use Str;

class KaryaController extends Controller
{
    public function uploadKarya(Request $request, Karya $karya)
    {
        $request->validate([
            'file' => 'mimes:docx,doc,docs',
            'cover_image' => 'mimes:png,jpg,jpeg'
        ]);
        if($request->file('file')) {
            $fileName = $request->file('file')->getClientOriginalName().$request->file('file')->getClientOriginalExtension();
        }
        DB::beginTransaction();
        try {
            Karya::create([
                 'author'    => $request->input('nama-lengkap'),
                 'email'     => $request->input('email'),
                 'phone'     => $request->input('nomor-hp'),
                 'category'  => $request->input('kategori_karya'),
                 'title'     => $request->input('judul_karya'),
                 'file'      => $fileName
             ]);
            DB::commit();
            return redirect()->back()->with([
               'message' => 'Karya berhasil diunggah!',
               'status' => 'OK'
            ]);
        } catch (Exception $th) {
            DB::rollBack();
            throw new ErrorException($th->getMessage());
        }
    }
}
