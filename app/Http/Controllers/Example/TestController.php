<?php

namespace App\Http\Controllers\Example;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Example\TestModel;
use App;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $model_test = new TestModel();
        $data = json_decode($model_test->test(), true);
        dd($data);
    }
}