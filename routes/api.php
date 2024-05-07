<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controller\MotoController;

route::get('/',function(){return response()->json(['Sucesso'=>true]);});
route::get('/motos',[MotoController::class, 'index']);