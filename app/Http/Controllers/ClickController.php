<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Illuminate\Http\Request;

class ClickController extends Controller
{
    public function countClicks(Request $request)
    {
        if (Click::where('page', $request->page)->where('button', $request->button)->first()) {
            $click = Click::where('page', $request->page)->where('button', $request->button)->first();
            $click->update(['clicks' => $click->clicks + 1]);
        } else {
            $contact = Click::create([
                'page' => $request->page,
                'button' => $request->button,
                'clicks' => 1
            ]);
        }

    }
}
