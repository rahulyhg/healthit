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

Route::get('/', function () {
    return view('welcome');
});


/*Route::group(['prefix' => 'api/'], function() {
    Route::resource('proficiency', 'ProficiencyController');
    Route::resource('appointment', 'AppointmentController');
    

});*/




Auth::routes();

/*Paginas inicias helpdesk e medico*/
Route::get('/medic/home', 'HomeController@index')->name('home');
Route::get('/help/home', 'HelpController@index')->name('help');

Route::get('/help/users/edit', 'HelpController@edit');

/*Registar Medico*/
Route::get('/help/register', 'HelpController@register');
Route::post('/help/home/register', 'HelpController@store');



/*ver dados*/
/*Route::get('/help/appointment/home', function () {
    return view('help.appointment.home');
});*/


Route::get('/medic/appointment/home', 'AppointmentDoctorController@index');

/*Editar consulta e apagar */

Route::get('/medic/appointment/edit/{id}', 'AppointmentDoctorController@edit');
Route::post('medic/home/appointment/{id}', 'AppointmentDoctorController@update');

/*Ver uma consulta */

Route::get('/medic/home/appointment/show/{id}', 'AppointmentDoctorController@show');


//Route::get('/help/users/home', 'HelpController@listDoctors');

/////////////////////////////////////////////////////////////////////////////////////

//  Ver especialidades
Route::get('/help/proficiency/home', 'ProficiencyController@index');

/*Registar especialidades*/
Route::get('/help/proficiency/register', 'ProficiencyController@create');
Route::post('/help/home/proficiency', 'ProficiencyController@store');

/*Editar especialidades e apagar */

Route::get('/help/proficiency/edit/{id}', 'ProficiencyController@edit');
Route::post('/help/home/proficiency/{id}', 'ProficiencyController@update');
Route::get('/help/home/proficiency/delete/{id}', 'ProficiencyController@destroy');

/*Atribuitr Especialidade */

Route::get('/help/proficiency/attach', 'ProficiencyController@showAttach');
Route::post('/help/home/proficiencyattach', 'ProficiencyController@attach');

/////////////////////////////////////////////////////////////////////////////////////



// Ver consultas
Route::get('/help/appointment/home', 'AppointmentController@index');


/*Registar consulta*/
Route::get('/help/appointment/register', 'AppointmentController@create');
Route::post('/help/home/appointment', 'AppointmentController@store');

/*Editar consulta e apagar */

Route::get('/help/appointment/edit/{id}', 'AppointmentController@edit');

Route::post('/help/home/appointment/{id}', 'AppointmentController@update');


Route::get('/help/home/appointment/delete/{id}', 'AppointmentController@destroy');


//Rotas para ajax request no javascript 

Route::get('/findUsersDate', 'HelpController@findUsersDate');
/*Route::get('/findEspecialidadeDate', 'HelpController@findEspecialidadeDate');*/