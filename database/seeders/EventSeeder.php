<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event; // make sure this is imported

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

            $events = [];

            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                $rowData = array_combine($header, $row);

                $events[] = [
                    'id'         => $rowData['id'],
                    'title'      => $rowData['title'],
                    'starts_at'  => $rowData['start_date'],// map start_date → starts_at
                    'location'   => $rowData['location'],
                    'description'=> $rowData['description'],
                    'created_at' => $rowData['created_at'],
                    'updated_at' => $rowData['updated_at'],
                ];
            }

            fclose($handle);

            // Insert all at once
            Event::insert($events);

            $this->command->info(count($events) . ' events inserted successfully.');
        }
    }
}