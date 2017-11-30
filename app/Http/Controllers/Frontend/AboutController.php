<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

class AboutController extends FrontendController
{
    public function show()
    {
      $banners = \App\Models\Banner::where("id", 4)->pluck("image")->first();
      $companyhistory = \DB::table('company_histories')->orderBy('id', 'asc')->select('title', 'year', 'body')->get();

      $result['company_title'] = trans('home.company_hisgory.company_title');
      $result['equipment_title'] = trans('home.company_hisgory.equipment.title');
      $equipments = $this->getEquipmentList();
      return view('frontend.about', compact('banners', 'equipments', 'companyhistory'));
    }
}
