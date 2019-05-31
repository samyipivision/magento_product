<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use GuzzleHttp;
use Illuminate\Support\Facades\Artisan;

class ProductController extends Controller
{
    public function updater()
    {
    	$client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://alt.eye-infinity.com/magento/product/getAllProducts');
        //drop all existing data and create data again
        Artisan::call("migrate:refresh --path=/database/migrations/2019_05_29_094311_create_products_table.php");
        $result = json_decode($res->getBody(), true);
        foreach($result as $item){
        	unset($item['id']);
        	unset($item['created_at']);
        	unset($item['updated_at']);
        	Product::create($item);
        }
        return redirect('/product/viewer');
    }

    public function viewer()
    {
    	return view('products.view', [
    		'result' => Product::all(),
    		'last_update' => Product::orderBy('updated_at', 'desc')->take(1)->get()[0]->updated_at
    	]);
    }
    
    public function editor()
    {
    	return view('products.editor', [
    		'result' => Product::find(request('pid'))
    	]);
    }

    public function delete()
    {
    	$product = Product::find(request('delete_id'));
    	$sku = Product::find((int)request('delete_id'))->sku;
    	$product->delete();
    	return $sku." deleted.";
    }
}
