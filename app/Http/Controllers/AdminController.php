<?php

namespace App\Http\Controllers;

use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;

    public function __construct(ExtractAgent $ext)
    {
        $this->extract = $ext;
    }


    public function getIndex(){

        return view('back.layout');
    }

   public function getAll(){

        $block = $this->extract->getBlock('all_site');
        $scripts = $this->extract->getBlock('scripts');

        return view('back.blocks.all_site', [
            'block' => $block,
            'scripts' => $scripts,
        ]);
    }

    /* RETAIL PAGE */ 

    public function getRetailPage(){
        $block = $this->extract->getBlock('retail_page');

        return view('back.blocks.retail.retail', [
            'block' => $block
        ]);
    }

    public function getRetailOffers(){
        $block = $this->extract->getBlock('retail_page');

        return view('back.blocks.retail.retail-offers', [
            'block' => $block
        ]);
    }

    public function getRetailOfferItem( $id ){
        $block = $this->extract->getGroupItem('r_offers_list', $id);

        return view('back.groups.r_offers_list.r_offers_list', [
            'block' => $block
        ]);
    }

    public function getRetailCategories(){
        $block = $this->extract->getBlock('retail_page');

        return view('back.blocks.retail.retail-categories', [
            'block' => $block
        ]);
    }

    public function getRetailCategoryItem( $id ){
        $block = $this->extract->getGroupItem('r_categories_list', $id);

        return view('back.groups.r_categories_list.r_categories_list', [
            'block' => $block
        ]);
    }

    public function getRetailProductItem( $id ){
        $block = $this->extract->getGroupItem('r_products_list', $id);

        return view('back.groups.r_products_list.r_products_list', [
            'block' => $block
        ]);
    }

    public function getRetailColorItem( $id ){
        $block = $this->extract->getGroupItem('r_products_colors_list', $id);

        return view('back.groups.r_products_colors_list.r_products_colors_list', [
            'block' => $block
        ]);
    }

    /* BRANDING PAGE */ 

    public function getBrandingPage(){
        $block = $this->extract->getBlock('branding_page');

        return view('back.blocks.branding.branding', [
            'block' => $block
        ]);
    }

    public function getBrandingTypes(){
        $block = $this->extract->getBlock('branding_page');

        return view('back.blocks.branding.branding-types', [
            'block' => $block
        ]);
    }

    public function getBrandingCategories(){
        $block = $this->extract->getBlock('branding_page');

        return view('back.blocks.branding.branding-categories', [
            'block' => $block
        ]);
    }

    public function getBrandingTypeItem( $id ){
        $block = $this->extract->getGroupItem('b_types_list', $id);

        return view('back.groups.b_types_list.b_types_list', [
            'block' => $block
        ]);
    }

    public function getBrandingCategoryItem( $id ){
        $block = $this->extract->getGroupItem('b_categories_list', $id);

        return view('back.groups.b_categories_list.b_categories_list', [
            'block' => $block
        ]);
    }

        public function getBrandingSubCategoryItem( $id ){
        $block = $this->extract->getGroupItem('b_subcategories_list', $id);

        return view('back.groups.b_subcategories_list.b_subcategories_list', [
            'block' => $block
        ]);
    }

    public function getBrandingProductItem( $id ){
        $block = $this->extract->getGroupItem('b_products_list', $id);

        return view('back.groups.b_products_list.b_products_list', [
            'block' => $block
        ]);
    }

    public function getBrandingColorItem( $id ){
        $block = $this->extract->getGroupItem('b_products_colors_list', $id);

        return view('back.groups.b_products_colors_list.b_products_colors_list', [
            'block' => $block
        ]);
    }

    /* CORPORATE PAGE */ 

    public function getCorporatePage(){
        $block = $this->extract->getBlock('corporate_page');

        return view('back.blocks.corporate.corporate', [
            'block' => $block
        ]);
    }

    public function getCorporateCategories(){
        $block = $this->extract->getBlock('corporate_page');

        return view('back.blocks.corporate.corporate-categories', [
            'block' => $block
        ]);
    }

    public function getCorporateCategoryItem( $id ){
        $block = $this->extract->getGroupItem('c_categories_list', $id);

        return view('back.groups.c_categories_list.c_categories_list', [
            'block' => $block
        ]);
    }

    public function getCorporateProductItem( $id ){
        $block = $this->extract->getGroupItem('c_products_list', $id);

        return view('back.groups.c_products_list.c_products_list', [
            'block' => $block
        ]);
    }

    public function getCorporateColorItem( $id ){
        $block = $this->extract->getGroupItem('c_products_colors_list', $id);

        return view('back.groups.c_products_colors_list.c_products_colors_list', [
            'block' => $block
        ]);
    }
}
