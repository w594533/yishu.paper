<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Models\SystemInfo;

class IsuDesignController extends FrontendController
{
    public function show()
    {
      $system_infos = SystemInfo::find(1);
      $isu_design = [
        'body' => $system_infos->about_body,
        'site' => $system_infos->isudesign_site
      ];
      return view('frontend.isudesign', compact('isu_design'));
    }
}
