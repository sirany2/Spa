<?php
use App\Http\Controllers\VoitureController;

use Illuminate\Support\Facades\Route;


Route::get('/',[VoitureController::class,'index']
);
Route::get('/service',[VoitureController::class,'service']
)->name("service");
Route::get('/contact',[VoitureController::class,'contact']
);

Route::get('/a-propos',[VoitureController::class,'a-propos']
);
Route::get('/prix',[VoitureController::class,'prix']
);
Route::get('/nav',[VoitureController::class,'nav']
);
Route::post('/envoie',[VoitureController::class,'envoie']);
