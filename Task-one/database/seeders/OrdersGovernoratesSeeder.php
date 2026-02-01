<?php

namespace Database\Seeders;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersGovernoratesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $governorates = ['البلقاء','المفرق','الطفيلة','معان','الكرك','العقبة','عجلون','جرش','الزرقاء','إربد','عمان'];

    foreach ($governorates as $gov) {
        Order::create([
            'phone' => '0000000000',
            'governorate' => $gov,
            'address' => '-',
            'product' => '-',
            'warranty_period' => '-',
            'notes' => '-',
        ]);
    }
    }
}
