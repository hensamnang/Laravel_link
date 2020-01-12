<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//routing with name link
Route::get('/', function () {
    return view('welcome');
});
Route::get('/actions',function(){
    return view('pages.actions');
})->name('homework2_action');

Route::get('/about',function(){
    return view('pages.about');
})->name('homework2_about');

Route::get('/contact',function(){
    return view('pages.contact');
})->name('homework2_contact');

Route::get('/join',function(){
    return view('pages.join');
})->name('homework2_join');

Route::get('/news',function(){
    return view('pages.news');
})->name('homework2_news');

//routing with 
Route::get('/teacher/{index}', function ($number) {
    $array = array('Channak','Ronan','Sieha','Rady','Rith'); 
    $count = 0;
    if(isset($array[$number])){
        echo "The teacher is : ".$array[$number];
    }else {
        echo "The array is :";
        foreach($array as $name){
            if($count < count($array)){
                echo "[$count]$array[$count]";
            }
            $count++;
        }
        echo "<br />"."No teacher with this index :".$number ;
        echo "<br />"."The largest index is :";
        echo count($array)-1;
    }
});
