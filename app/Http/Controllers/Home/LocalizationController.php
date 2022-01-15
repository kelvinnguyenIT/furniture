<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LocalizationController extends Controller
{
    /**
     * Set locale
     *
     * @param $locale
     * @return RedirectResponse
     */
    public function set($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
