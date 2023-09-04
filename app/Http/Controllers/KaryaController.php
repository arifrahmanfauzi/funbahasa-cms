<?php

namespace App\Http\Controllers;

use App\Models\Admin\Karya;
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
        $createdKarya = Karya::create([
             'author'    => $request->input('nama-lengkap'),
             'email'     => $request->input('email'),
             'phone'     => $request->input('nomor-hp'),
             'category'  => $request->input('kategori_karya'),
             'title'     => $request->input('judul_karya'),
             'file'      => $fileName
         ]);
        dd($createdKarya);
    }
}
