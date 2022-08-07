<?php

namespace Database\Seeders;

use App\Models\NotificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'slug' => 'individual',
            'name' => 'Individual',
        ];

        NotificationType::create($data);

        $data = [
            'slug' => 'voz',
            'name' => 'Voz',
        ];

        NotificationType::create($data);

        $data = [
            'slug' => 'cuerda',
            'name' => 'Cuerda',
        ];

        NotificationType::create($data);

        $data = [
            'slug' => 'banda',
            'name' => 'Banda',
        ];

        NotificationType::create($data);

        $data = [
            'slug' => 'grupal',
            'name' => 'Grupal',
        ];

        NotificationType::create($data);
    }
}
