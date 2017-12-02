<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

class ContactController extends FrontendController
{
    public function show()
    {
      $this->activeModule('contact');

      $banners = \App\Models\Banner::where("id", 5)->pluck("image")->first();
      $branches = \App\Models\Branch::all();
      return view('frontend.contact', compact('banners', 'branches'));
    }
}
