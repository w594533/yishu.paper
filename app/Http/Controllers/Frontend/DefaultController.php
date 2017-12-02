<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;
use App\Models\SystemInfo;

class DefaultController extends FrontendController
{
    public function show()
    {
      $system_infos = SystemInfo::find(1);
      $result['isudesign_site'] = $system_infos->isudesign_site;
      return view('frontend.default', compact('result'));
    }
}
