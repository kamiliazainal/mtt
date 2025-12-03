<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $states = ['California', 'New York', 'Texas', 'Florida', 'Illinois', 'Pennsylvania', 'Ohio', 'Georgia', 'North Carolina', 'Michigan'];

        $customers = [
            ['name' => 'John Doe', 'email' => 'john.doe@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com'],
            ['name' => 'Bob Johnson', 'email' => 'bob.johnson@example.com'],
            ['name' => 'Alice Williams', 'email' => 'alice.williams@example.com'],
            ['name' => 'Charlie Brown', 'email' => 'charlie.brown@example.com'],
            ['name' => 'Diana Martinez', 'email' => 'diana.martinez@example.com'],
            ['name' => 'Edward Davis', 'email' => 'edward.davis@example.com'],
            ['name' => 'Fiona Garcia', 'email' => 'fiona.garcia@example.com'],
            ['name' => 'George Rodriguez', 'email' => 'george.rodriguez@example.com'],
            ['name' => 'Hannah Wilson', 'email' => 'hannah.wilson@example.com'],
            ['name' => 'Ian Anderson', 'email' => 'ian.anderson@example.com'],
            ['name' => 'Julia Thomas', 'email' => 'julia.thomas@example.com'],
            ['name' => 'Kevin Taylor', 'email' => 'kevin.taylor@example.com'],
            ['name' => 'Laura Moore', 'email' => 'laura.moore@example.com'],
            ['name' => 'Michael Jackson', 'email' => 'michael.jackson@example.com'],
            ['name' => 'Nancy White', 'email' => 'nancy.white@example.com'],
            ['name' => 'Oliver Harris', 'email' => 'oliver.harris@example.com'],
            ['name' => 'Patricia Martin', 'email' => 'patricia.martin@example.com'],
            ['name' => 'Quincy Thompson', 'email' => 'quincy.thompson@example.com'],
            ['name' => 'Rachel Lee', 'email' => 'rachel.lee@example.com'],
            ['name' => 'Samuel Walker', 'email' => 'samuel.walker@example.com'],
            ['name' => 'Teresa Hall', 'email' => 'teresa.hall@example.com'],
            ['name' => 'Ulysses Allen', 'email' => 'ulysses.allen@example.com'],
            ['name' => 'Victoria Young', 'email' => 'victoria.young@example.com'],
            ['name' => 'William King', 'email' => 'william.king@example.com'],
            ['name' => 'Xena Wright', 'email' => 'xena.wright@example.com'],
            ['name' => 'Yasmin Lopez', 'email' => 'yasmin.lopez@example.com'],
            ['name' => 'Zachary Hill', 'email' => 'zachary.hill@example.com'],
            ['name' => 'Amy Scott', 'email' => 'amy.scott@example.com'],
            ['name' => 'Brian Green', 'email' => 'brian.green@example.com'],
            ['name' => 'Catherine Adams', 'email' => 'catherine.adams@example.com'],
            ['name' => 'Daniel Baker', 'email' => 'daniel.baker@example.com'],
            ['name' => 'Emma Nelson', 'email' => 'emma.nelson@example.com'],
            ['name' => 'Frank Carter', 'email' => 'frank.carter@example.com'],
            ['name' => 'Grace Mitchell', 'email' => 'grace.mitchell@example.com'],
            ['name' => 'Henry Perez', 'email' => 'henry.perez@example.com'],
            ['name' => 'Iris Roberts', 'email' => 'iris.roberts@example.com'],
            ['name' => 'Jack Turner', 'email' => 'jack.turner@example.com'],
            ['name' => 'Karen Phillips', 'email' => 'karen.phillips@example.com'],
            ['name' => 'Luke Campbell', 'email' => 'luke.campbell@example.com'],
            ['name' => 'Maria Parker', 'email' => 'maria.parker@example.com'],
            ['name' => 'Nathan Evans', 'email' => 'nathan.evans@example.com'],
            ['name' => 'Olivia Edwards', 'email' => 'olivia.edwards@example.com'],
            ['name' => 'Peter Collins', 'email' => 'peter.collins@example.com'],
            ['name' => 'Quinn Stewart', 'email' => 'quinn.stewart@example.com'],
            ['name' => 'Rose Sanchez', 'email' => 'rose.sanchez@example.com'],
            ['name' => 'Steven Morris', 'email' => 'steven.morris@example.com'],
            ['name' => 'Tina Rogers', 'email' => 'tina.rogers@example.com'],
            ['name' => 'Ursula Reed', 'email' => 'ursula.reed@example.com'],
            ['name' => 'Victor Cook', 'email' => 'victor.cook@example.com'],
        ];

        foreach ($customers as $customer) {
            Customer::create([
                'name' => $customer['name'],
                'email' => $customer['email'],
                'state' => $states[array_rand($states)],
            ]);
        }
    }
}
