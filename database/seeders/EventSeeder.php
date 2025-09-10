<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $csvFile = database_path('seeders/data/events.csv');

        if (!file_exists($csvFile) || !is_readable($csvFile)) {
            dd("CSV file not found or not readable at: " . $csvFile);
        }

        if (($handle = fopen($csvFile, 'r')) !== false) {
            $header = fgetcsv($handle, 1000, ','); // first line = column names

            // Read one row for testing
            $row = fgetcsv($handle, 1000, ',');

            fclose($handle);

            if ($row) {
                // Combine header with row (key => value)
                $rowData = array_combine($header, $row);

                // Now map CSV fields to database columns
                $eventData = [
                    'id'         => $rowData['id'],
                    'title'      => $rowData['title'],
                    'starts_at'  => $rowData['start_date'],   // CSV field "start_date" maps to DB "starts_at"
                    'location'   => $rowData['location'],
                    'description'=> $rowData['description'],
                    'created_at' => $rowData['created_at'],
                    'updated_at' => $rowData['updated_at'],
                ];

                // Dump to check mapping works
                dd($eventData);
            } else {
                dd("No row found in CSV.");
            }
        }
    }
}