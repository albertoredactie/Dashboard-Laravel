<?php

/**
 * Frontend Controllers
 */


// Route::get('testing', ['as' => 'testing', 

// 	function(){

// 		   $bsqd = Input::get('term');    

// 		   return Redirect::action('Frontend\FrontendController@pdf', array('term'=>$bsqd));

// 	}]



// 	);


	// Route::get('testing', function(){

	//    $bsqd = Input::get('term');    

	//    return Redirect::action('FrontendController@pdf', array('term'=>$bsqd));

	// });

 // Route::get('pdf', function(){

 //    $fpdf = new Fpdf();
 //        $fpdf->AddPage();
 //        $fpdf->SetFont('Arial','B',16);
 //        $fpdf->Cell(40,10,'Hello World!');
 //        $fpdf->Output();
 //        exit;

 //  //       $file= public_path(). "/humans.txt";

 //  //       echo $file;

 //  //       $headers = array(
 //  //                 'Content-Type: application/pdf',
 //  //               );
	// 	// return response()->download($file, 'humans.txt', $headers);

	// // $excelfile = Excel::load('file.xls')->get();

	// // var_dump($excelfile->toArray());
 // })->name('frontend.pdf');




//Route::get('pdf', 'FrontendController@pdf')->name('frontend.pdf');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });
    Route::get('/', 'FrontendController@index')->name('frontend.index');
    //Route::get('pdf', ['as' => 'pdf', 'uses' => 'FrontendController@pdf']);
	Route::get('google', 'FrontendController@google')->name('frontend.google');
    // Route::get('macr', 'FrontendController@macros')->name('frontend.macros');

});

Route::group(['middleware' => 'excel'], function () {
		//Route::get('excel', 'FrontendController@excel')->name('frontend.excel');
	    //Route::get('upload', function() {
		 // return View::make('pages.upload');
		//});
		//Route::post('apply/upload', 'FrontendController@upload');
});




