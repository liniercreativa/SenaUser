<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\About_akhlak;
use App\Models\About_direksidankomisaris;
use App\Models\About_piagam;
use App\Models\Home_about;
use App\Models\Home_capability;
use App\Models\Home_slider;
use Illuminate\Http\Request;
use App\Models\Home_client;
use App\Models\About_visimisi;
use App\Models\Contact_us;
use App\Models\Header;
use App\Models\Home_about_counter;
use App\Models\Pertanyaan;
use App\Models\Project;
use App\Models\Service;
use App\Models\Service_discipline;
use App\Models\Service_softwaredanhardware;
use App\Models\Visimisi;
use App\Models\Annual_report;
use App\Models\Annual_report_pertanyaan;
use App\Models\News;
use App\Models\Title;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use App\Models\Aboutus_image_slider;







class HomeController extends Controller
{
    //
    protected $globalurl;
    function __construct()
    {
        $this->globalurl = 'http://dashboardsena.liniercreativa.my.id/upload/image/';
    }
    function index()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'Home Page';
        $seo_title = 'Home Page';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        /* Header */




        $sliders = Home_slider::all();
        $about = Home_about::where('id', 1)->first();
        $capabilities = Home_capability::all();
        $clientsleft = Home_client::where('type', 'left')->get();
        $clientsright = Home_client::where('type', 'left')->get();
        $counter = Home_about_counter::all();

        $news = News::where('status', 'published')->where('jenis', 'news')->get();
        $titles = Title::where('id', 1)->first();

        return view('home.index', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'sliders', 'about', 'capabilities', 'clientsleft', 'clientsright', 'counter', 'news', 'titles'));
    }

    function aboutus()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'About Us';
        $seo_title = 'Home Page';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_about_us_image;
        $header_text = $header->header_about_us_text;
        /* Header */



        $about = About::where('id', 1)->first();
        $visimisi = Visimisi::where('id', 1)->first();
        $akhlaks = About_akhlak::all();

        $petinggis = About_direksidankomisaris::all();
        $piagam = About_piagam::all();


        $sliders = Home_slider::all();
        $capabilities = Home_capability::all();
        $clientsleft = Home_client::where('type', 'left')->get();
        $clientsright = Home_client::where('type', 'left')->get();
        $counter = Home_about_counter::all();

        $titles = Title::where('id', 2)->first();
        $title3 = Title::where('id', 3)->first();

        $aboutusimageslider = Aboutus_image_slider::all();

        return view('home.aboutus', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'sliders', 'about', 'capabilities', 'clientsleft', 'clientsright', 'visimisi', 'akhlaks', 'petinggis', 'piagam', 'counter', 'titles',  'title3', 'aboutusimageslider'));
    }

    function capability()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'Capability';
        $seo_title = 'Capability';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_capability_image;
        $header_text = $header->header_capability_text;
        /* Header */

        $services = Service::all();
        $disiplin = Service_discipline::where('id', 1)->first();
        $softwaredanhardware = Service_softwaredanhardware::all();

        return view('home.services', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'services', 'disiplin', 'softwaredanhardware'));
    }









    function experience()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'Experience';
        $seo_title = 'Experience';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_experience_image;
        $header_text = $header->header_experience_text;
        /* Header */

        $project = Project::all();


        $clientsleft = Home_client::where('type', 'left')->get();
        $clientsright = Home_client::where('type', 'left')->get();

        $title4 = Title::where('id', 4)->first();
        $title5 = Title::where('id', 5)->first();
        $title6 = Title::where('id', 6)->first();


        return view('home.experience', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'clientsleft', 'clientsright', 'project', 'title4', 'title5', 'title6'));
    }





    function contactus()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'Contact Us';
        $seo_title = 'Contact Us';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_contact_us_image;
        $header_text = $header->header_contact_us_text;
        /* Header */



        $contact = Contact_us::where('id', 1)->first();
        return view('home.contactus', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'contact'));
    }

    function bisnisstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contact = Pertanyaan::create([
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->telephone,
                'subject' => $request->subject,
                'message' => $request->message,
                'status' => 'unread',
                'jenis' => 'bisnis'
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Message sent successfully!',
                'data' => $contact
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    function umumstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contact = Pertanyaan::create([
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->telephone,
                'subject' => $request->subject,
                'message' => $request->message,
                'status' => 'unread',
                'jenis' => 'umum'
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Message sent successfully!',
                'data' => $contact
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }











    /* Annual Report */
    function annualreport()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'Annual Report';
        $seo_title = 'Annual Report';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_annualreport_image;
        $header_text = $header->header_annualreport_text;
        /* Header */

        $annualreport = Annual_report::orderBy('id', 'desc')->get();


        return view('home.report', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'annualreport'));
    }

    public function submitdownload(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'id_annualreport' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Save download request
            $downloadRequest = Annual_report_pertanyaan::create([
                'id_annualreport' => $request->id_annualreport,
                'name' => $request->name,
                'email' => $request->email,
                'company' => $request->company,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Download request submitted successfully',
                'id' => $request->id_annualreport
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request'
            ], 500);
        }
    }





    /* News */
    public function news()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'News';
        $seo_title = 'News';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_news_image;
        $header_text = $header->header_news_text;
        /* Header */

        $news = News::where('status', 'published')->where('jenis', 'news')->get();
        return view('home.news', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'news'));
    }

    public function article()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'News';
        $seo_title = 'News';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_contact_us_image;
        $header_text = 'Get All The Latest Article';
        /* Header */

        $news = News::where('status', 'published')->where('jenis', 'article')->get();
        return view('home.news', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'news'));
    }


    public function detail($slug)
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = '';
        $seo_title = 'Detail';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_contact_us_image;
        $header_text = '';
        /* Header */


        $news = News::where('slug', $slug)->first();
        $newsall = News::where('status', 'published')->get();

        return view('home.singlenews', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'news', 'newsall'));
    }




    public function mediainvestor()
    {
        /* Header */
        $header = Header::where('id', 1)->first();
        $title = 'News';
        $seo_title = 'News';
        $seo_meta_description = 'Penyedia layanan engineering end to end mulai dari conceptual study hingga commissioning di sektor Oil & Gas ';
        $logo = $this->globalurl . $header->logo;
        $header_image = $this->globalurl . $header->header_mediainvestor_image;
        $header_text = $header->header_mediainvestor_text;
        /* Header */

        $news = News::where('status', 'published')->where('jenis', 'news')->get();
        $article = News::where('status', 'published')->where('jenis', 'article')->get();
        $annualreport = Annual_report::orderBy('id', 'desc')->limit(4)->get();


        return view('home.mediainvestor', compact('title', 'seo_title', 'seo_meta_description', 'logo', 'header_image', 'header_text', 'news', 'article', 'annualreport'));
    }
}
