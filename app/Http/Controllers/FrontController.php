<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class FrontController extends Controller
{
    private $extract;

    public function __construct(ExtractAgent $ext)
    {
        $this->extract = $ext;

        $scripts = $this->extract->getBlock('scripts');
        $all_site = $this->extract->getBlock('all_site');
        $retail_page = $this->extract->getBlock('retail_page');

        view()->share([
            'scripts' => $scripts,
            'all_site' => $all_site,
            'retail_page' => $retail_page
        ]);
    }

    public function getIndex()
    {
        $index_page = $this->extract->getBlock('index_page');

        return response()->view('front.index.index', [
            'index_page' => $index_page
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $index_page->last_modified ?: time()));
    }

    // RETAIL PAGE

    public function getRetail()
    {
        $retail_page = $this->extract->getBlock('retail_page');

        return response()->view('front.retail.retail', [
            'retail_page' => $retail_page
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $retail_page->last_modified ?: time()));
    }

    public function getRetailOffer($slug)
    {
        $r_offers_list = $this->extract->getBySlug('r_offers_list', $slug);
        $this->extract->tuneSelection('r_offers_images_list')->like('show', true)->sortBy('sorter', 'ASC');

        if (is_null($r_offers_list)) {
            abort(404);
        }
        return view('front.retail.information', [
            'r_offers_list' => $r_offers_list
        ]);
    }

    public function getRetailCategory($slug)
    {
        $r_categories_list = $this->extract->getBySlug('r_categories_list', $slug);

        if (is_null($r_categories_list)) {
            abort(404);
        }
    }

    public function getRetailProduct($slug)
    {
        $r_products_list = $this->extract->getBySlug('r_products_list', $slug);
        $this->extract->tuneSelection('r_products_colors_list')->like('show', true)->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('r_products_sizes_list')->like('show', true)->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('r_products_images_list')->like('show', true)->sortBy('sorter', 'ASC');

        if (is_null($r_products_list)) {
            abort(404);
        }
        return view('front.retail.product', [
            'r_products_list' => $r_products_list
        ]);
    }

    // BRANDING PAGE

    public function getBranding()
    {
        $branding_page = $this->extract->getBlock('branding_page');

        return response()->view('front.branding.branding', [
            'branding_page' => $branding_page
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $branding_page->last_modified ?: time()));
    }

    public function getBrandingOffer($slug)
    {
        $b_types_list = $this->extract->getBySlug('b_types_list', $slug);
        $this->extract->tuneSelection('b_types_images_list')->like('show', true)->sortBy('sorter', 'ASC');

        if (is_null($b_types_list)) {
            abort(404);
        }
        return view('front.branding.information', [
            'b_types_list' => $b_types_list
        ]);
    }

    public function getBrandingCategory($slug)
    {
        $b_categories_list = $this->extract->getBySlug('b_categories_list', $slug);

        if (is_null($b_categories_list)) {
            abort(404);
        }
    }

    public function getBrandingSubCategory($slug)
    {
        $b_subcategories_list = $this->extract->getBySlug('b_subcategories_list', $slug);

        if (is_null($b_subcategories_list)) {
            abort(404);
        }
    }

    public function getBrandingProduct($slug)
    {
        $b_products_list = $this->extract->getBySlug('b_products_list', $slug);
        $this->extract->tuneSelection('b_products_colors_list')->like('show', true)->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('b_products_sizes_list')->like('show', true)->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('b_products_images_list')->like('show', true)->sortBy('sorter', 'ASC');

        if (is_null($b_products_list)) {
            abort(404);
        }
        return view('front.branding.product', [
            'b_products_list' => $b_products_list
        ]);
    }

    // CORPORATE PAGE

    public function getCorporate()
    {
        $corporate_page = $this->extract->getBlock('corporate_page');

        return response()->view('front.corporate.corporate', [
            'corporate_page' => $corporate_page
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $corporate_page->last_modified ?: time()));
    }

    public function getCorporateCategory($slug)
    {
        $c_categories_list = $this->extract->getBySlug('c_categories_list', $slug);

        if (is_null($c_categories_list)) {
            abort(404);
        }
    }

    public function getCorporateProduct($slug)
    {
        $c_products_list = $this->extract->getBySlug('c_products_list', $slug);
        $this->extract->tuneSelection('c_products_colors_list')->like('show', true)->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('c_products_sizes_list')->like('show', true)->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('c_products_images_list')->like('show', true)->sortBy('sorter', 'ASC');

        if (is_null($c_products_list)) {
            abort(404);
        }
        return view('front.corporate.product', [
            'c_products_list' => $c_products_list
        ]);
    }

    public function getSearch()
    {
        $search_page = $this->extract->getBlock('search_page');

        return response()->view('front.search.search', [
            'search_page' => $search_page
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $search_page->last_modified ?: time()));
    }

    public function getCart()
    {
        $cart_page = $this->extract->getBlock('cart_page');

        return response()->view('front.cart.cart', [
            'cart_page' => $cart_page
        ])->header('Last-Modified', gmdate('D, d M Y H:i:s T', $cart_page->last_modified ?: time()));
    }

    public function addToCart(Request $request)
    {
        return response()->json(['id' => $request->id]);
    }
}
