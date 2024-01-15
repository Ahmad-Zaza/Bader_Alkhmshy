<?php

namespace App\Http\Controllers\Website\HomePage;

use App\Models\ContactRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest as RequestsContactRequest;
use App\Models\AboutSection;
use App\Models\HeroSection;
use App\Models\ServiceSection;
use App\Models\SocialMedia;
use App\Models\VisionSection;
use App\Rules\ReCaptcha;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index()
    {
        $heroSection = HeroSection::first();
        $aboutSection = AboutSection::first();
        $visionSection = VisionSection::first();
        $services = ServiceSection::orderBy('sorting', 'asc')->get();
        $social_media = SocialMedia::all();
        return view('website.home', compact('heroSection', 'aboutSection', 'visionSection', 'services', 'social_media'));
    }

    public function sendRequest(RequestsContactRequest $request)
    {
        try {
            $contactRequest = ContactRequest::create([
                'name' => $request->name,
                'email' => $request->email,
                'ip_address' => $request->ip(),
                'phone_number' => $request->phone_number,
                'message' => $request->message
            ]);

            // CRUDBooster::sendEmail([
            //     'to' => ['export_alasayel@outlook.com', 'kubra_alasayel@outlook.com'],
            //     'data' => [
            //         'name' => $request->name,
            //         'phone_number' => $request->phone_number,
            //         'message' => $request->message
            //     ],
            //     'template' => 'contact_request'
            // ]);
            return back()->with(['message' => 'You request has been send successfully', 'message_type' => 'success', 'scroll_to' => '#contact_form']);
        } catch (Exception $ex) {
            return back()->with(['message' => $ex->getMessage(), 'message_type' => 'danger', 'scroll_to' => '#contact_form']);
        }
    }


}
