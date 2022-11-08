<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laraeast\LaravelSettings\Facades\Settings;
use Mail;
use Modules\Donations\Entities\DonationMethod;
use Modules\HowKnow\Entities\Reason;
use Modules\News\Entities\News;
use Modules\Partners\Entities\Partner;
use Modules\Reports\Entities\Report;
use Modules\Services\Entities\Event;
use Modules\Services\Entities\Gallery;
use Modules\Services\Entities\Service;
use Modules\Services\Entities\SubService;
use Modules\Settings\Emails\ContactMail;
use Modules\Settings\Emails\SubscribeMail;
use Modules\Settings\Emails\VolunteerMail;
use Modules\Settings\Entities\AboutUs;
use Modules\Settings\Entities\Award;
use Modules\Settings\Entities\ContactUs;
use Modules\Settings\Entities\Subscriber;
use Modules\Sliders\Entities\Slider;
use Modules\Volunteers\Entities\Category;
use Modules\Volunteers\Entities\Field;
use Modules\Volunteers\Entities\QuestionFive;
use Modules\Volunteers\Entities\QuestionFour;
use Modules\Volunteers\Entities\QuestionSix;
use Modules\Volunteers\Entities\Volunteer;

class FrontendController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function index()
    {
        // dd(request()->getClientIp());
        $main_services = Service::orderBy('rank', 'asc')->take(6)->get();
        $services = Service::orderBy('rank', 'asc')->get();
        $settings = AboutUs::first();
        $partners = Partner::all();
        $sliders = Slider::all();
        $news = News::all();
        $settings = AboutUs::first();
        $cover = Settings::instance('cover');

        return view('frontend::home', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'main_services' => $main_services,
            'services' => $services,
            'settings' => $settings,
            'partners' => $partners,
            'sliders' => $sliders,
            'news' => $news,
            'cover' => $cover,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function about()
    {
        $settings = AboutUs::first();
        $awards = Award::all();
        $settings = AboutUs::first();
        return view('frontend::about', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'settings' => $settings,
            'awards' => $awards,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function services()
    {
        $services = Service::orderBy('rank', 'asc')->paginate(6);
        $settings = AboutUs::first();

        return view('frontend::services.index', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'services' => $services,
        ]);
    }

    public function subServices(Service $service)
    {
        $subServices = $service->sub_services()->paginate(9);
        $settings = AboutUs::first();

        return view('frontend::services.subservices', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'subservices' => $subServices,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function serviceShow($service)
    {
        $service = SubService::findOrFail($service);
        $settings = AboutUs::first();

        return view('frontend::services.show', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'service' => $service,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function media()
    {
        $media = Gallery::paginate(6);
        $settings = AboutUs::first();

        return view('frontend::media.index', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'media' => $media,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function showEvents($media)
    {
        $media = Gallery::findOrFail($media);
        $events = $media->events()->paginate(9);
        $settings = AboutUs::first();

        return view('frontend::media.events', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'media' => $media,
            'events' => $events
        ]);
    }


    public function showEvent($id)
    {
        $event = Event::findOrFail($id);
        $video = $event->data;
        $settings = AboutUs::first();

        return view('frontend::media.show', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'event' => $event
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function reports()
    {
        $reports = Report::paginate(8);
        $settings = AboutUs::first();

        return view('frontend::reports', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'reports' => $reports
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function volunteers()
    {
        $fields = Field::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $reasons = Reason::listsTranslations('reason', 'id')->pluck('reason', 'id')->toArray();
        $categories = Category::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionFour = QuestionFour::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionFive = QuestionFive::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();
        $questionSix = QuestionSix::listsTranslations('name', 'id')->orderBy('id', 'DESC')->pluck('name', 'id')->toArray();

        $reasons = Reason::listsTranslations('reason')->pluck('reason', 'id')->toArray();
        $settings = AboutUs::first();

        return view('frontend::volunteers', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'fields' => $fields,
            'reasons' => $reasons,
            'categories' => $categories,
            'questionFour' => $questionFour,
            'questionFive' => $questionFive,
            'questionSix' => $questionSix
        ]);
    }



    public function volunteersStore(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:volunteers',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dob' => 'required|date',
            'how_know_id' => 'required|exists:reasons,id',
            'field_id' => 'required',
            'question_four' => 'required',
            'question_five' => 'required',
            'question_six' => 'required',
        ], [
            'name.required' => __('frontend::frontend.name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
            'email.unique' => __('frontend::frontend.email_unique'),
            'phone.required' => __('frontend::frontend.phone_required'),
            'address.required' => __('frontend::frontend.address_required'),
            'dob.required' => __('frontend::frontend.dob_required'),
            'how_know_id.required' => __('frontend::frontend.how_know_id_required'),
            'how_know_id.exists' => __('frontend::frontend.how_know_id_exists'),
            'field_id.required' => __('frontend::frontend.field_id_required'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }

        $inputs = $request->except('_token', 'how_know_id', 'field_id');
        // $inputs['skills'] = implode(',', $request->skills);
        // $inputs['experiences'] = implode(',', $request->experiences);
        // $inputs['favorite_time'] = implode(',', $request->favorite_time);
        // $inputs['has_car'] = $request->has_car ? 1 : 0;
        // $inputs['motives'] = implode(',', $request->motives);
        $volunteer = Volunteer::create($inputs);
        $volunteer->reasons()->attach($request->how_know_id);
        $volunteer->fields()->attach($request->field_id);
        $volunteer->categories()->attach($request->volunteer_category);
        $volunteer->question_four()->attach($request->question_four);
        $volunteer->question_five()->attach($request->question_five);
        $volunteer->question_six()->attach($request->question_six);

        try {
            // send mail to contact
            Mail::to($volunteer->email)->send(new VolunteerMail());
        } catch (\Exception $e) {
        }

        notify()->success(__('frontend::frontend.volunteer_success'));
        return back();
    }



    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function donations()
    {
        $donationMethods = DonationMethod::all();
        $settings = AboutUs::first();

        return view('frontend::donations', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'methods' => $donationMethods,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function contact()
    {
        $settings = AboutUs::first();
        $settings = AboutUs::first();

        return view('frontend::contact', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'settings' => $settings,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function contactPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ], [
            'name.required' => __('frontend::frontend.name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
            'message.required' => __('frontend::frontend.message_required'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }
        $contact = ContactUs::create($request->except('_token'));

        try {
            // send mail to contact
            Mail::to($contact->email)->send(new ContactMail());
        } catch (\Exception $e) {
        }

        notify()->success(__('frontend::frontend.contact_success'));
        return redirect()->back();
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function thanks()
    {
        $settings = AboutUs::first();

        return view('frontend::thanks', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function showNews(News $news)
    {
        $settings = AboutUs::first();

        return view('frontend::news.show', [
            'lang' => app()->getLocale(),
            'ar' => app()->getLocale() == 'ar',
            'settings' => $settings,
            'news' => $news,
        ]);
    }


    /**
     * Display a listing of the resource.
     * @return RedirectResponse
     */
    public function subscribePost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ], [
            'name.required' => __('frontend::frontend.name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }
        $subscribe = Subscriber::create($request->except('_token'));

        try {
            // send mail to subscriber
            Mail::to($subscribe->email)->send(new SubscribeMail());
        } catch (\Exception $e) {
        }

        notify()->success(__('frontend::frontend.subscribe_success'));
        return redirect()->back();
    }
}
