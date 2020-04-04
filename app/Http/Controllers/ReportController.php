<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index(Request $request) {

        $report = Report::orderBy('created_at')
            ->limit(5)->get();

        return response()->json([
            'report' => $report
        ]);

    }
}
