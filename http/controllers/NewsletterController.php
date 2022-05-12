<?php namespace Goosy\Newsletter\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Goosy\Newsletter\Models\Newsletter;

class NewsletterController extends Controller
{
    public function insert(Request $request)
    {
        $newsletter = new Newsletter;
        $newsletter->email = $request->input('email');
        $newsletter->save();
        return  'kokot';
    }
}