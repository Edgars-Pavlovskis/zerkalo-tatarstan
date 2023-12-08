<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{
    //


    public function openCatalog($id=1)
    {
        $catalog = Catalog::find($id);
        $catalog->gallery = glob("storage/catalog/".$id.'/*');
        return view('showcatalog', [
            'catalog' => $catalog
        ]);
    }


}
