<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    private $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function index(Request $request)
    {
        $reports = $this
            ->report
            ->getReports();

        return response()->json($reports);
    }
}
