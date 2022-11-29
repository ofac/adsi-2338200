<?php
namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UserExport implements FromView, WithColumnWidths, WithStyles
{
    public function view(): View
    {
        return view('users.excel', [
            'users' => User::all()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 30,  
            'C' => 35,            
            'D' => 15,            
            'E' => 24,            
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 16]],
        ];
    }
}

