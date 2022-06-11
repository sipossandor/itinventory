<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Room;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "A",
            'email' => "a@a",
            'password' => Hash::make("aaaaaaaa"),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => "B",
            'email' => "b@b",
            'password' => Hash::make("bbbbbbbb"),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => "C",
            'email' => "c@c",
            'password' => Hash::make("cccccccc"),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => "D",
            'email' => "d@d",
            'password' => Hash::make("dddddddd"),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => "E",
            'email' => "e@e",
            'password' => Hash::make("eeeeeeee"),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('workers')->insert([
            'id'=> 1,
            'first_name' => "Anna",
            'last_name' => "Aranyos",
            'department' => 'KSZ',
            'room_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('workers')->insert([
            'id'=> 2,
            'first_name' => "Béla",
            'last_name' => "Benedek",
            'department' => 'MUP',
            'room_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('workers')->insert([
            'id'=> 3,
            'first_name' => "Cecilia",
            'last_name' => "Cirmos",
            'department' => 'UZE',
            'room_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('workers')->insert([
            'id'=> 4,
            'first_name' => "Diana",
            'last_name' => "Demeter",
            'department' => 'REM',
            'room_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('workers')->insert([
            'id'=> 5,
            'first_name' => "Emese",
            'last_name' => "Erbert",
            'department' => 'KSZ',
            'room_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('rooms')->insert([
            'id'=> 1,
            'building'=> "SZM",
            'room_name' => "A001",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('rooms')->insert([
            'id'=> 2,
            'building'=> "MNG",
            'room_name' => "B001",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('rooms')->insert([
            'id'=> 3,
            'building'=> "Vasarely",
            'room_name' => "C001",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('rooms')->insert([
            'id'=> 4,
            'building'=> "Zichy",
            'room_name' => "D001",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('rooms')->insert([
            'id'=> 5,
            'building'=> "Benczúr",
            'room_name' => "E001",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id'=> 1,
            'hardware_name' => "PC",
            'buying_date' => '2019-01-01 10:01:01',
            'motherboard_type' => 'Asus',
            'cpu_type' => 'Intel E8400 ',
            'ssd_type' => 'Crucial 128GB',
            'ram_type' => 'Kingmax 2GB',
            'size' => 'Mini',
            'comment' => 'Intel ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id'=> 2,
            'hardware_name' => "Monitor",
            'buying_date' => '2020-01-01 10:01:01',
            'motherboard_type' => 'AOC',
            'cpu_type' => ' ',
            'ssd_type' => ' ',
            'ram_type' => ' ',
            'size' => '20"',
            'comment' => 'AOC 22 ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id'=> 3,
            'hardware_name' => "Notebook",
            'buying_date' => '2021-01-01 10:01:01',
            'motherboard_type' => 'Toshiba',
            'cpu_type' => 'Intel I7-4500 ',
            'ssd_type' => 'Kingston 256GB ',
            'ram_type' => 'Kingmax 8GB ',
            'size' => '15"',
            'comment' => ' ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id'=> 4,
            'hardware_name' => "Printer",
            'buying_date' => '2022-01-01 10:01:01',
            'motherboard_type' => 'Canon',
            'cpu_type' => ' ',
            'ssd_type' => ' ',
            'ram_type' => ' ',
            'size' => '',
            'comment' => 'Canon 2553 ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'id'=> 5,
            'hardware_name' => "Scanner",
            'buying_date' => '2017-01-01 10:01:01',
            'motherboard_type' => 'HP',
            'cpu_type' => ' ',
            'ssd_type' => ' ',
            'ram_type' => ' ',
            'size' => '',
            'comment' => 'HP Scanjet 3670',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('hardwares')->insert([
            'id'=> 1,
            'worker_id'=> 1,
            'category_id'=> 1,
            'serial_number' => "CN001",
            'inventory_number' => "L001",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('hardwares')->insert([
            'id'=> 2,
            'worker_id'=> 2,
            'category_id'=> 2,
            'serial_number' => "CN002",
            'inventory_number' => "L002",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('hardwares')->insert([
            'id'=> 3,
            'worker_id'=> 3,
            'category_id'=> 3,
            'serial_number' => "CN003",
            'inventory_number' => "L003",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('hardwares')->insert([
            'id'=> 4,
            'worker_id'=> 4,
            'category_id'=> 4,
            'serial_number' => "CN004",
            'inventory_number' => "L004",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('hardwares')->insert([
            'id'=> 5,
            'worker_id'=> 5,
            'category_id'=> 5,
            'serial_number' => "CN005",
            'inventory_number' => "L005",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);








        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
