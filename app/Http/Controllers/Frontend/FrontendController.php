<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;
use LaravelAnalytics;
//use Spatie\Analytics\Period;
use App;
use Excel;
use Response;
use Fpdf;
use Input;


use Validator;
use Redirect;
// use Request;
use Session;
use Carbon\Carbon;

//use Facebook;

use Facebook\Facebook as Facebook;
use Facebook\Exceptions\FacebookResponseException as FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException as FacebookSDKException;

$data = array();
$aux = array();
$aux2 = array();
$counter = 0;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = ['fdsf','sdfsfd'];
        

        
        $currentYear = Carbon::now()->year;
        $previousYear = $currentYear - 1;

        $firstDayPreviousYear = Carbon::parse("01-01-".($previousYear));
        $lastDayPreviousYear = Carbon::parse("31-12-".($previousYear));

        $firstDayCurrentYear = Carbon::parse("01-01-".$currentYear);
        $today = Carbon::now();


        // Directly from Appmake();
        //$fb = Appmake('SammyK\LaravelFacebookSdk\LaravelFacebookSdk');

        //$token = Facebook::getAccessTokenFromRedirect();

        //dd($token);

        $fb = new Facebook([
            'app_id' => '1397673093593541',
            'app_secret' => 'e9c93adfc6a8cb67206ddd7d094df5ba',
            'default_graph_version' => 'v2.7',
        ]);

        // $response = $fb->get('/me?fields=id,name,fan_count', 'EAAT3LSBBecUBAHOhqX2HqmvB79oU9lrF9zdzjEHdUwjHJO4uZBm0zuF50bHlzTDFD3SDZBEkzm2ZAY9X2c44b524auFpblalZBvTBLvPrilsMijoyVI2GLaZAGcxbTyjsXfWA5vL3QWWkNTmIDFnKvpYvWMBHc0tbzNmZAZCbld6AZDZD');

        // dd($response);





        // Send a GET request
        //$response = $fb->get('/me');

        //dd($response);

        // FACEBOOK_APP_ID=1397673093593541
        // FACEBOOK_APP_SECRET=e9c93adfc6a8cb67206ddd7d094df5ba


//testing facebook API

        //$totalImpressions = FacebookInsights::getPageTotalImpressions($firstDayCurrentYear, $today);
        //$totalImpressions = FacebookInsights::getPageTotalFans();

/////////////






        //$tomorrow = Carbon::now()->addDay();
        //$lastWeek = Carbon::now()->subWeek();

        $viewsData = LaravelAnalytics::getVisitorsAndPageViews(500,'date');
        $viewsDataCurrentYear = LaravelAnalytics::getVisitorsAndPageViewsForPeriod( $firstDayCurrentYear, $today, 'date');
        $viewsDataPreviousYear = LaravelAnalytics::getVisitorsAndPageViewsForPeriod( $firstDayPreviousYear, $lastDayPreviousYear, 'date');

        //$metrics = "ga:sessions";
        $metrics = "ga:bounces,ga:sessions,ga:pageviews,ga:percentNewSessions";
        $others = array(
          'dimensions' => 'ga:date',
        );
        // $others = ['filters':['ga:country=Spain']];
        //$sort = "sort=ga:date";
        //$others[0] = $sort;
        $allMetricsPreviousYear = LaravelAnalytics::performQuery( $firstDayPreviousYear, $lastDayPreviousYear, $metrics, $others);

        $allMetricsCurrentYear = LaravelAnalytics::performQuery( $firstDayCurrentYear, $today, $metrics, $others);
        //performQuery(500, $metrics, array $others = [])

        
        // dd($allMetricsCurrentYear['rows']);

        $allMetrics = $allMetricsCurrentYear['rows'];

        $counter=0;
        $viewsArrayCurrentYear = array();
        $bouncesArrayCurrentYear = array();
        $sessionsArrayCurrentYear = array();
        $newSessionsArrayCurrentYear = array();

        foreach ($allMetrics as $allMetrics)
        {
            $viewsArrayCurrentYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;
            $bouncesArrayCurrentYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;
            $sessionsArrayCurrentYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;
            $newSessionsArrayCurrentYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;


            $viewsArrayCurrentYear[$counter][1] = intval($allMetrics[3]);
            $bouncesArrayCurrentYear[$counter][1] = intval($allMetrics[1]);
            $sessionsArrayCurrentYear[$counter][1] = intval($allMetrics[2]);
            $newSessionsArrayCurrentYear[$counter][1] = intval($allMetrics[4]);

            //$d->getTimestamp();
            //$views['date']->toDateString();
            $counter++;
        }        

        $allMetrics = $allMetricsPreviousYear['rows'];

        $counter=0;
        $viewsArrayPreviousYear = array();
        $bouncesArrayPreviousYear = array();
        $sessionsArrayPreviousYear = array();
        $newSessionsArrayPreviousYear = array();

        foreach ($allMetrics as $allMetrics)
        {
            $viewsArrayPreviousYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;
            $bouncesArrayPreviousYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;
            $sessionsArrayPreviousYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;
            $newSessionsArrayPreviousYear[$counter][0] = Carbon::parse($allMetrics[0])->timestamp * 1000;


            $viewsArrayPreviousYear[$counter][1] = intval($allMetrics[3]);
            $bouncesArrayPreviousYear[$counter][1] = intval($allMetrics[1]);
            $sessionsArrayPreviousYear[$counter][1] = intval($allMetrics[2]);
            $newSessionsArrayPreviousYear[$counter][1] = intval($allMetrics[4]);

            //$d->getTimestamp();
            //$views['date']->toDateString();
            $counter++;
        }

        $json = array(
          'views' => $viewsArrayCurrentYear,
          'bounce' => $bouncesArrayCurrentYear,
          'sessions' => $sessionsArrayCurrentYear,
          'newSessions' => $newSessionsArrayCurrentYear,
        );

        $info = json_encode($json);

        $file = fopen('metrics/google_analytics/all.json','w+');
        //$file = fopen('data.json','w+');
        fwrite($file, $info);
        fclose($file);        

        // year attribute name with y before
        // date for one metric with year (just month and day, so that we can compare them).

        $previousYearAtrib = "y".$previousYear;
        $currentYearAtrib = "y".$currentYear;

        $viewsJson = array(
          $previousYearAtrib => $viewsArrayPreviousYear,
          $currentYearAtrib => $viewsArrayCurrentYear,
        );

        $info = json_encode($viewsJson);

        $file = fopen('metrics/google_analytics/views.json','w+');
        //$file = fopen('views.json','w+');
        fwrite($file, $info);
        fclose($file);


        $bouncesJson = array(
          $previousYearAtrib => $bouncesArrayPreviousYear,
          $currentYearAtrib => $bouncesArrayCurrentYear,
        );

        $info = json_encode($bouncesJson);

        $file = fopen('metrics/google_analytics/bounces.json','w+');
        //$file = fopen('views.json','w+');
        fwrite($file, $info);
        fclose($file);

        $sessionsJson = array(
          $previousYearAtrib => $sessionsArrayPreviousYear,
          $currentYearAtrib => $sessionsArrayCurrentYear,
        );

        $info = json_encode($sessionsJson);

        $file = fopen('metrics/google_analytics/sessions.json','w+');
        //$file = fopen('views.json','w+');
        fwrite($file, $info);
        fclose($file);        

        $new_sessionsJson = array(
          $previousYearAtrib => $newSessionsArrayPreviousYear,
          $currentYearAtrib => $newSessionsArrayCurrentYear,
        );

        $info = json_encode($new_sessionsJson);

        $file = fopen('metrics/google_analytics/new_sessions.json','w+');
        //$file = fopen('views.json','w+');
        fwrite($file, $info);
        fclose($file);    

        // $counter=0;
        // $viewsArrayPreviousYear = array();

        // foreach ($viewsDataPreviousYear as $views)
        // {
        //     $viewsArrayPreviousYear[$counter][0] = Carbon::parse($views['date'])->timestamp * 1000;
        //     $viewsArrayPreviousYear[$counter][1] = intval($views['visitors']);
        //     //$d->getTimestamp();
        //     //$views['date']->toDateString();
        //     $counter++;
        // }

        // $counter=0;
        // $viewsArrayCurrentYear = array();

        // foreach ($viewsDataCurrentYear as $views)
        // {
        //     $viewsArrayCurrentYear[$counter][0] = Carbon::parse($views['date'])->timestamp * 1000;
        //     $viewsArrayCurrentYear[$counter][1] = intval($views['visitors']);
        //     //$d->getTimestamp();
        //     //$views['date']->toDateString();
        //     $counter++;
        // }






        // dd($viewsData[6]['date']->toDateString());
        // dd($viewsData[6]['visitors'].' '.$viewsData[6]['date']->toDateString());
        //dd($counter);
        return view('frontend.index')->with('data', $data);
    }   

    public function google()
    {
        $data = ['fdsf','sdfsfd'];
        return view('frontend.google')->with('data', $data);
    }   

    public function googleConnection()
    {

    }

    /**
     * @return \Illuminate\View\View
     */
    // public function macros()
    // {
    //     return view('frontend.macros');
    // }
}
