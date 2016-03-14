<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['blog', 'project', 'review'] as $type)
        {
            Order::create(compact('type'));
        }

        echo "Orders table successfully seeded." . PHP_EOL;
    }
}
