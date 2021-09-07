<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::post('/search_home', 'SellerController@search_home')->name('search_home');
Route::post('/lease_search', 'SellerController@lease')->name('lease_search');
Route::view('property.rent-applicationform', 'property.Rent-applicationform')->name('rentapplication');
Route::view('portal/accepttenant', 'portal.accepttenant')->name('accepttenant');
//Route::view('portal.agent', 'portal.agent')->name('portal');
Route::post('property/Rent-applicationform', 'PortalController@application')->name('Rent-application');
//     Route::get('portal.agent', function () {
//     return view('portal.agent');
// });
Route::get('port', 'DashboardController@neww')->name('port');

//middleware all routes
Route::group(['middleware' => 'auth'], function () {
    // Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout', 'AuthController@logout')->name('user.logout');

    Route::get('password', 'ProfileController@changePassword')->name('password');
    Route::post('password', 'ProfileController@changePasswordUpdate')->name('password');

    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('block/{id}/user', 'UserController@block')->name('block');

    Route::get('unblock/{id}/user', 'UserController@unblock')->name('unblock');

    Route::get('unfeature/{id}', 'SellerController@unfeature')->name('unfeature');
    Route::get('feature/{id}', 'SellerController@feature')->name('feature');
});
//////////end middleware




////////////////////////admin
Route::group(['middleware' => ['auth', 'App\Http\Middleware\Admin']], function () {
    Route::get('/viewagent', function () {
        return view('admin.viewagent');
    });
    Route::view('/addagent', 'admin.addagent')->name('addagent');
    Route::view('/properties', 'admin.properties')->name('properties');
    //      Route::get('admin/property', function () {
    //     return view('property');
    // });
    Route::view('agentproperty', 'admin.agentproperty')->name('agentproperty');
    Route::get('unfeatures/{id}', 'UserController@unfeature')->name('unfeatures');
    Route::get('features/{id}', 'UserController@feature')->name('features');
});
// .......................//agent  middleware
Route::group(['middleware' => ['auth', 'App\Http\Middleware\Agent']], function () {
    //   Route::view('addagentproperty', 'agent.addagentproperty')->name('addagentproperty');
    Route::get('addagentproperty', 'SellerController@citys')->name('addagentproperty');
    Route::post('addagentproperty', 'SellerController@fetch')->name('addagentproperty');
    Route::post('/ads', 'AdsController@store')->name('ads');
    Route::get('/ads', function () {
        return view('agent.ads');
    });
    Route::view('viewagentproperty', 'agent.viewagentproperty')->name('viewagentproperty');
});

/////////////////////////////seller middleware
Route::group(['middleware' => ['auth', 'App\Http\Middleware\Seller']], function () {
    // Route::view('/addproperty', 'seller.addproperty')->name('addproperty');
    Route::get('addproperty', 'SellerController@cityseller')->name('addproperty');
    Route::post('addproperty', 'SellerController@fetchseller')->name('addproperty');
    Route::view('viewproperty', 'seller.viewproperty')->name('viewproperty');
});

Route::resource('user', 'UserController');
Route::get('editproperty/{seller}', 'SellerController@selleredit')->name('editproperty');

Route::resource('agent', 'AgentController');
Route::resource('buyer', 'BuyerController');
Route::resource('seller', 'SellerController');
Route::resource('property', 'PropertyController');
Route::get('admin/profile', 'UserController@profileedit')->name('profile');

// Route::view('addproperty', 'seller.addproperty')->name('addproperty');

//auth list route
Route::post('login', 'AuthController@login')->name('login');
Route::get('control-panel', 'AuthController@index')->name('control-panel');

// Route::view('login', 'auth.login')->name('login');

Route::view('forgot', 'auth.forgot')->name('forgot');
// Route::get('mail','ForgotController@sendMail')->name('mail');
Route::post('user/forgot', 'ForgotController@sendVerification')->name('userforgot');
Route::post('reset/password', 'ForgotController@resetPassword')->name('resetuser');
Route::get('city/{city}', 'SellerController@city')->name('city');
//front page route list  menu bar
Route::get('/', function () {
    return view('Home');
});
Route::get('/property-list', function () {
    return view('property-list');
});
//property

//rent
Route::get('/property-rent/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'rent')->orderBy('price', 'asc')->get();
        return view('property.property-rent', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'rent')->orderBy('price', 'DESC')->get();
        return view('property.property-rent', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'rent')->orderBy('created_at', 'DESC')->get();
        return view('property.property-rent', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'rent')->latest()->get();
    }
    $filter = "most-recent";
    return view('property.property-rent', compact('cities', 'filter'));
})->name('property-rent');

//sale
Route::get('/property-sale/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'sale')->orderBy('price', 'asc')->get();
        return view('property.property-sale', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'sale')->orderBy('price', 'DESC')->get();
        return view('property.property-sale', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'sale')->orderBy('created_at', 'DESC')->get();
        return view('property.property-sale', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'sale')->latest()->get();
    }
    $filter = "most-recent";
    return view('property.property-sale', compact('cities', 'filter'));
})->name('property-sale');
//land


Route::get('/property-land/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'land')->orderBy('price', 'asc')->get();
        return view('property.property-land', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'land')->orderBy('price', 'DESC')->get();
        return view('property.property-land', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'land')->orderBy('created_at', 'DESC')->get();
        return view('property.property-land', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'land')->latest()->get();
    }
    $filter = "most-recent";
    return view('property.property-land', compact('cities', 'filter'));
})->name('property-land');

//commercial

Route::get('/property-commercial/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->orderBy('price', 'asc')->get();
        return view('property.property-commercial', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->orderBy('price', 'DESC')->get();
        return view('property.property-commercial', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->orderBy('created_at', 'DESC')->get();
        return view('property.property-commercial', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('property', '=', 'commercial')->latest()->get();
    }
    $filter = "most-recent";
    return view('property.property-commercial', compact('cities', 'filter'));
})->name('property-commercial');



Route::get('/property-lease/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('type', '=', 'lease')->orderBy('price', 'asc')->get();
        return view('property.property-lease', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('type', '=', 'lease')->orderBy('price', 'DESC')->get();
        return view('property.property-lease', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('type', '=', 'lease')->orderBy('created_at', 'DESC')->get();
        return view('property.property-lease', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('type', '=', 'lease')->latest()->get();
    }
    $filter = "most-recent";
    return view('property.property-lease', compact('cities', 'filter'));
})->name('property-lease');

// valuation
Route::view('/property-valuation', 'property.property-valuation')->name('property-valuation');
//footer pages
Route::view('/about', 'about')->name('about');
Route::view('/term', 'footer.term')->name('term');
Route::view('/faq', 'footer.faq')->name('faq');
Route::view('/privacy', 'footer.privacy')->name('privacy');
Route::view('/complaint', 'footer.complaint')->name('complaint');
Route::view('/mortgages', 'footer.mortgages')->name('mortgages');
Route::view('/help-to-buy-property', 'footer.help_to_buy_property')->name('help-to-buy-property');
Route::view('/stamp-duty-calculator', 'footer.stamp_duty_calculator')->name('stamp-duty-calculator');
Route::view('/student-living', 'footer.student_living')->name('student-living');
Route::view('/how-we-handle-unacceptable-behaviour', 'footer.unacceptable_behaviour')->name('how-we-handle-unacceptable-behaviour');
Route::view('/managing-your-tenancy', 'managing_your_tenancy')->name('managing_your_tenancy');
Route::view('/investor-landlord', 'investor_landlord')->name('investor_landlord');
Route::view('/residential-commercial-properties', 'residential_commercial_properties')->name('residential-commercial-properties');
//fornt saler search


Route::get('/property-search', 'SellerController@search')->name('property-search');
Route::post('/property-search', 'SellerController@search')->name('property-search');
//front rent search
Route::get('/property-search-rent', 'SellerController@rent')->name('property-search-rent');
Route::post('/property-search-rent', 'SellerController@rent')->name('property-search-rent');
// city
Route::get('/property-search-cits', 'SellerController@cits')->name('property-search-cits');
Route::post('/property-search-cits', 'SellerController@cits')->name('property-search-cits');
//list search
Route::get('/search', 'SearchController@search')->name('search');
Route::post('/search', 'SellerController@search')->name('search');
Route::get('/allproperty/{user_id}', 'SellerController@allproperty');

Route::get('/property-detail/{id}', function () {
    return view('property-details');
});
// Route::get('/password', function () {
//     return view('admin.password');
// });
//contact us
Route::get('/contact', function () {
    return view('contact');
});
// Route::post('ads','AdsController@index');
//controller
Route::resource('contact', 'ContactController');
//most popular places


Route::get('/London/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'London')->orderBy('price', 'asc')->get();
        return view('places.London', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'London')->orderBy('price', 'DESC')->get();
        return view('places.London', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'London')->orderBy('created_at', 'DESC')->get();
        return view('places.London', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'London')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.London', compact('cities', 'filter'));
})->name('London');


// Route::view('/Bahawalpur', 'places.Bahawalpur')->name('Bahawalpur');

Route::get('/Oxford/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Oxford')->orderBy('price', 'asc')->get();
        return view('places.Oxford', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Oxford')->orderBy('price', 'DESC')->get();
        return view('places.Oxford', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Oxford')->orderBy('created_at', 'DESC')->get();
        return view('places.Oxford', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Oxford')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Oxford', compact('cities', 'filter'));
})->name('Oxford');


// Route::view('/Chakwal', 'places.Chakwal')->name('Chakwal');


Route::get('/Bath/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Bath')->orderBy('price', 'asc')->get();
        return view('places.Bath', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Bath')->orderBy('price', 'DESC')->get();
        return view('places.Bath', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Bath')->orderBy('created_at', 'DESC')->get();
        return view('places.Bath', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Bath')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Bath', compact('cities', 'filter'));
})->name('Bath');

// Route::view('/Gawadar', 'places.Gawadar')->name('Gawadar');


Route::get('/Glasgow/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Glasgow')->orderBy('price', 'asc')->get();
        return view('places.Glasgow', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Glasgow')->orderBy('price', 'DESC')->get();
        return view('places.Glasgow', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Glasgow')->orderBy('created_at', 'DESC')->get();
        return view('places.Glasgow', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Glasgow')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Glasgow', compact('cities', 'filter'));
})->name('Glasgow');



// Route::view('/Gujranwala', 'places.Gujranwala')->name('Gujranwala');

Route::get('/Cambridge/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Cambridge')->orderBy('price', 'asc')->get();
        return view('places.Cambridge', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Cambridge')->orderBy('price', 'DESC')->get();
        return view('places.Cambridge', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Cambridge')->orderBy('created_at', 'DESC')->get();
        return view('places.Cambridge', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Cambridge')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Cambridge', compact('cities', 'filter'));
})->name('Cambridge');


// Route::view('/karachi', 'places.karachi')->name('karachi');

Route::get('/Birmingham/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Birmingham')->orderBy('price', 'asc')->get();
        return view('places.Birmingham', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Birmingham')->orderBy('price', 'DESC')->get();
        return view('places.Birmingham', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Birmingham')->orderBy('created_at', 'DESC')->get();
        return view('places.Birmingham', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Birmingham')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Birmingham', compact('cities', 'filter'));
})->name('Birmingham');


// Route::view('/lahore', 'places.lahore')->name('lahore');


Route::get('/Manchester/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Manchester')->orderBy('price', 'asc')->get();
        return view('places.Manchester', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Manchester')->orderBy('price', 'DESC')->get();
        return view('places.Manchester', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Manchester')->orderBy('created_at', 'DESC')->get();
        return view('places.Manchester', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Manchester')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Manchester', compact('cities', 'filter'));
})->name('Manchester');

// Route::view('/Multan', 'places.Multan')->name('Multan');

Route::get('/Newcastle/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Newcastle')->orderBy('price', 'asc')->get();
        return view('places.Newcastle', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Newcastle')->orderBy('price', 'DESC')->get();
        return view('places.Newcastle', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Newcastle')->orderBy('created_at', 'DESC')->get();
        return view('places.Newcastle', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Newcastle')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Newcastle', compact('cities', 'filter'));
})->name('Newcastle');


// Route::view('/Peshawar', 'places.Peshawar')->name('Peshawar');


Route::get('/Edinburgh/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Edinburgh')->orderBy('price', 'asc')->get();
        return view('places.Edinburgh', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Edinburgh')->orderBy('price', 'DESC')->get();
        return view('places.Edinburgh', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Edinburgh')->orderBy('created_at', 'DESC')->get();
        return view('places.Edinburgh', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Edinburgh')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Edinburgh', compact('cities', 'filter'));
})->name('Edinburgh');


// Route::view('/Quetta', 'places.Quetta')->name('Quetta');

Route::get('/Liverpool/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Liverpool')->orderBy('price', 'asc')->get();
        return view('places.Liverpool', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Liverpool')->orderBy('price', 'DESC')->get();
        return view('places.Liverpool', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Liverpool')->orderBy('created_at', 'DESC')->get();
        return view('places.Liverpool', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Liverpool')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Liverpool', compact('cities', 'filter'));
})->name('Liverpool');

// Route::view('/Sialkot', 'places.Sialkot')->name('Sialkot');


Route::get('/Cardiff/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Cardiff')->orderBy('price', 'asc')->get();
        return view('places.Cardiff', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Cardiff')->orderBy('price', 'DESC')->get();
        return view('places.Cardiff', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Cardiff')->orderBy('created_at', 'DESC')->get();
        return view('places.Cardiff', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Cardiff')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Cardiff', compact('cities', 'filter'));
})->name('Cardiff');


// Route::view('/Jhelum', 'places.Jhelum')->name('Jhelum');


Route::get('/Dublin/{filter?}', function ($filter = null) {
    if (isset($filter) && $filter == 'lowest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Dublin')->orderBy('price', 'asc')->get();
        return view('places.Dublin', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'highest-price') {
        $cities = App\Models\Seller::where('city', '=', 'Dublin')->orderBy('price', 'DESC')->get();
        return view('places.Dublin', compact('cities', 'filter'));
    } elseif (isset($filter) && $filter == 'most-recent') {
        $cities = App\Models\Seller::where('city', '=', 'Dublin')->orderBy('created_at', 'DESC')->get();
        return view('places.Dublin', compact('cities', 'filter'));
    } else {
        $cities = App\Models\Seller::where('city', '=', 'Dublin')->latest()->get();
    }
    $filter = "most-recent";
    return view('places.Dublin', compact('cities', 'filter'));
})->name('Dublin');



Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    system('composer install');
    die('aaaa');
});
Route::get('dell_image/{id}', 'SellerController@dell_image')->name('dell_image');

Route::post('auth/register', 'UserController@register')->name('register');
Route::post('filter', 'SellerController@filter')->name('filter');
Route::post('newsletter', 'NewsletterController@store')->name('newsletter');
Route::post('admin/viewagent', 'UserController@registeragent')->name('viewagent');
Route::view('csrf/addagent', 'Csrf.addagent')->name('csrf');

// Route::view('viewlandloard', 'portal.viewlandloard')->name('viewlandloard');
Route::post('portal/viewlandloard', 'UserController@registeragent')->name('viewlandloard');
Route::get('dash', 'DashboardController@index')->name('viewlandloard');
