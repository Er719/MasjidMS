<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationalResource;

class EducationalResourceController extends Controller
{
    public function show()
    {
        $educationalresources = EducationalResource::all(); 

        return view('educationalresource', compact('educationalresources'));
    }

}
