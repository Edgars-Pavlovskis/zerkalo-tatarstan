<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Catalog;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }




    public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:jpg|max:5120'
        ]);
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('portfolio', $fileName, 'public');
            return response('Done', 200)->header('Content-Type', 'text/plain');
        }
    }

    public function galleryUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:jpg|max:1024'
        ]);
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('catalog/'.$req->id, $fileName, 'public');
            return response('Done', 200)->header('Content-Type', 'text/plain');
        }
    }

    public function bannerUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:jpg|max:5120'
        ]);
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('banners', $fileName, 'public');
            return response('Done', 200)->header('Content-Type', 'text/plain');
        }
    }

   public function showCatalog(){
        return view('pages.catalog', [
            'catalog' => Catalog::all()
        ]);
   }

   public function editCatalog($id) {
        return view('pages.catalog', [
            'catalog' => Catalog::find($id)
        ]);
   }


   public function updateCatalog(Request $request, $id) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'preview' => 'mimes:jpg,jpeg,webp|max:400',
            'price' => 'required|numeric',
            'corners_price' => 'required|numeric',
        ]);

        $input = $request->all();
        if(!$request->active) $input['active']= 0;
        if($request->preview) {
            $fileName = time().'_'.$request->preview->getClientOriginalName();
            $filePath = $request->preview->storeAs('catalog', $fileName, 'public');
            $input['image'] = $fileName;
        }

        if($id>0) {
            $catalog = Catalog::find($id);
            $catalog->update($input);
        } else {

            $catalog = Catalog::create($input);
        }
          return redirect()->route('showCatalog')
            ->with('success', 'Catalog updated successfully.');
    }


    public function askdeleteCatalog($id) {
        return view('pages.askdeletecatalog', [
            'catalog' => Catalog::find($id)
        ]);
    }

    public function deleteCatalog($id) {

        $catalog = Catalog::find($id);
        if($catalog->id) $catalog->delete();

        if(file_exists("storage/catalog/".$id)){
            $files = glob("storage/catalog/".$id.'/*');
            foreach($files as $file) {
                if(is_file($file))
                    unlink($file);
            }
            rmdir("storage/catalog/".$id);
        }

        return redirect()->route('showCatalog')
            ->with('success', 'Catalog deleted successfully.');
    }







}
