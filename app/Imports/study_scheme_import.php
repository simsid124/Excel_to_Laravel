<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\study_scheme;
use Illuminate\Support\Facades\Log;

class study_scheme_import implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            // Handle empty or missing values
            $course_title = $row['course_title'] ?? null;
            $sem = $row['sem'] ?? null;
            $option_type = $row['option_type'] ?? null;
            $domain = $row['domain'] ?? null;
            $category = $row['category'] ?? null;
            $intmm = isset($row['intmm']) && $row['intmm'] !== '' ? (int) $row['intmm'] : null;
            $extmm = isset($row['extmm']) && $row['extmm'] !== '' ? (int) $row['extmm'] : null;
            $breakup = $row['breakup'] ?? null;
            $l = $row['l'] ?? null;
            $t = $row['t'] ?? null;
            $p = $row['p'] ?? null;

            // Calculate derived values
            $is_int = $intmm === null ? 0 : 1;
            $totmm = $intmm === null ? null : $intmm + $extmm;
            $hr = $l + $t + $p;
            $cr = $hr / 2;

            // Insert the data into the database
            study_scheme::create([
                'course_title' => $course_title,
                'sem' => $sem,
                'option_type' => $option_type,
                'domain' => $domain,
                'category' => $category,
                'is_int' => $is_int,
                'intmm' => $intmm,
                'is_ext' => 1, // Assuming this is always true based on your previous code
                'extmm' => $extmm,
                'totmm' => $totmm,
                'breakup' => $breakup,
                'l' => $l,
                't' => $t,
                'p' => $p,
                'hr' => $hr,
                'cr' => $cr,
            ]);
        }
    }
}
