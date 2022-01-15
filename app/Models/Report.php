<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $dates = [
        'created_at', 'updated_at',
    ];

    public static function getReports($dateCount = 5)
    {
        $reports = self::orderBy('created_at', 'desc')
            ->limit($dateCount)
            ->get()
            ->reverse();

        $reportData = [
            'legend' => [],
            'labels' => [],
            'datasets' => [],
        ];

        $reports->each(function ($report) use (&$reportData): void {
            array_push(
                $reportData['labels'],
                $report->created_at->format('d/m')
            );
        });

        array_push(
            $reportData['legend'],
            'Notif.',
            'Susp.',
            'Descar.',
            'Confir.',
            'Mortes'
        );

        array_push(
            $reportData['datasets'],
            ['data' => $reports->pluck('notified')],
            ['data' => $reports->pluck('suspicious')],
            ['data' => $reports->pluck('discarded')],
            ['data' => $reports->pluck('confirmed')],
            ['data' => $reports->pluck('deaths')]
        );

        return $reportData;
    }
}
