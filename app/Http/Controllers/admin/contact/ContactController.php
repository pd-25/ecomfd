<?php

namespace App\Http\Controllers\admin\contact;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactUs = ContactUs::all();
        return view('admin.contactus.contactus', compact('contactUs'));
    }

    public function destroy($id)
    {
        $contactUs = ContactUs::find($id);
        $contactUs->delete();
        return back()->with('msg', 'Deleted successfully');
    }
}