<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Http\Request;
use DB;

class controlgestionmobile extends Controller
{
    public function addpost()
    {
        return view('home');
    }

    public function savepost(Request $request)
    {
        DB::table('mobiles')->insert([
            'numeromatricule' => $request->numeromatricule,
            'cartegrise' => $request->cartegrise,
            'telchauffeur' => $request->telchauffeur,
            'telproprietaire' => $request->telproprietaire,
            'dateinscription' => $request->dateinscription,
        ]);
        return back()->with('post-add', 'Enregistrement effectue avec succes');
    }

    public function affichepost()
    {
        $mobiles = DB::table('mobiles')->get();
        return view('affiche-post', compact('mobiles'));
    }

    public function editpost($id)
    {
        $mobile = DB::table('mobiles')
            ->where('id', $id)
            ->first();
        return view('edit-post', compact('mobile'));
    }

    public function recherche(Request $request)
    {
        $matricule= $request->matricule;
        $mobile = DB::table('mobiles')
            ->where('numeromatricule', $matricule)
            ->first();
        return view('vue-post', compact('mobile'));
    }


    public function vuepost($id)
    {
        $mobile = DB::table('mobiles')
            ->where('id', $id)
            ->first();
        return view('edit-post', compact('mobile'));
    }

    public function updatepost(Request $request, $id )
    {
        DB::table('mobiles')
            ->where('id', $id)
            ->update([
                'numeromatricule' => $request->numeromatricule,
                'cartegrise' => $request->cartegrise,
                'telchauffeur' => $request->telchauffeur,
                'telproprietaire' => $request->telproprietaire,
                'dateinscription' => $request->dateinscription,
            ]);
        return back()->with('post-update', 'Modification effectuee avec succes');
    }
    

    public function deletepost($id)
    {
        DB::table('mobiles')
            ->where('id', $id)
            ->delete();
        return back()->with('post-delete', 'Suppreession effectuee avec succes');
    }
}
