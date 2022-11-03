<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Donations\Entities\Donation;
use Modules\Donations\Entities\Donor;
use Modules\Settings\Entities\ContactUs;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $messages =  ContactUs::orderBy('created_at', 'desc')->take(4)->get();
        $donations =  Donation::orderBy('created_at', 'desc')->paginate(4);

        $donor_count = Donor::count();

        $donation_amount = Donation::sum('amount');
        $amount = number_format($donation_amount, 2);

        $online_donation_amount = Donation::where('type', 'online')->sum('amount');
        $online_amount = number_format($online_donation_amount, 2);
        $online_percentage = number_format((($online_donation_amount / $donation_amount) * 100), 2);

        $offline_donation_amount = Donation::where('type', 'offline')->sum('amount');
        $offline_amount = number_format($offline_donation_amount, 2);
        $offline_percentage = number_format((($offline_donation_amount / $donation_amount) * 100), 2);


        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
        ->datasets([
            [
                "label" => "My First dataset",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 56, 55, 40],
            ],
            [
                "label" => "My Second dataset",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [12, 33, 44, 44, 55, 23, 40],
            ]
        ])
        ->options([]);


        return view('dashboard::index',[
            'messages' => $messages,
            'donations' => $donations,
            'donor_count' => $donor_count,
            'donation_amount' => $amount,
            'online_amount' => $online_amount,
            'online_percentage' => $online_percentage,
            'offline_amount' => $offline_amount,
            'offline_percentage' => $offline_percentage,
            'chartjs' => $chartjs,
        ]);
    }
}
