<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Validation\Rules\Unique;

class UserSeeder extends Seeder
{
    /**

     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array ini berisikan data asli panti asuhan dari nomor 1-34
        $arrayPhoneNumber = ['031-5950362', '031-5944461', '031-8707379', '031-70542306', '0878-5335-0148', '031-7405145',
                                '031-5312517', '031-7457103', '031-73112227', '031-3721589', '031-70902604', '031-3723313',
                                '031-3714911', '031-3724317', '031-51501138', '031-752299', '031-8299828', '031-7318438',
                                '031-78359345', '0812-3226-294', '031-81111311', '031-5673535', '031-5663209', '031-5677579',
                                '031-7666278', '031-8282488', '031-8292650', '031-3767000', '031-5471410', '031-8284276',
                                '031-7312227', '031-5022818', '031-5341627', '0812-3111-0141'];

        $arrayAddress = ['Jl. Keputih Tegal I/25, Surabaya Timur', 'Jl. Nginden Baru IV/22, Surabaya Timur',
                                'Jl. Wonoayu VI/10, Surabaya Timur', 'Jl. Kendung I/40, Surabaya Barat',
                                'Jl. Manukan Lor IV-B/33, Surabaya Barat', 'Jl. Balongsari Tama Blok 3-A/33, Surabaya Barat',
                                'Jl. Rowo IX/1-3 Asemrowo, Surabaya Barat', 'Jl. Manukan Rukun 26-27, Surabaya Barat',
                                'Jl. Sukomanunggal Jaya I/73, Surabaya Barat', 'Jl. Tambak Wedi Baru 77, Surabaya',
                                'Jl. Tambak Asri No. 202, Surabaya', 'Jl. Wonokusumo No. 88, Surabaya Utara',
                                'Jl. Wonosari Lor 52, Surabaya Utara', 'Jl. Wonokusumo Tengah 53-A, Surabaya Utara',
                                'Jl. Kedung Cowek 220, Surabaya Utara', 'Jl. Menganti Wiyung RT 01 RW 01 No. 45, Surabaya Selatan',
                                'Jl. Ketintang I/30B, Surabaya Selatan', 'Jl. Pradah Kali Kendal I No. 33A, Surabaya Selatan',
                                'Jl. Dukuh Karangan IV-Wiyung, Surabaya Selatan', 'Jl. Wonocolo VIII/32, Surabaya Selatan',
                                'Jl. Bentul I/6, Surabaya Selatan', 'Jl. Karangan 226-Hayam Wuruk, Surabaya Selatan',
                                'Jl. Pakis Gunung IB/5, Surabaya Selatan', 'Jl. Putat Jaya Barat 8B/41, Surabaya Selatan',
                                'Jl. Mastrip No. 64-66, Surabaya Selatan', 'Jl. Kebonsari Baru 36A, Surabaya Selatan',
                                'Jl. Jemur Gayungan II/14, Surabaya Selatan', 'Jl. Banowati No. 125, Surabaya Pusat',
                                'Jl. Tidar 115-Surabaya 60252', 'Jl. Ahmad Yani, Blok E No. 29, Gayungsari, Ketintang-Surabaya',
                                'Jl. Sukomanunggal Jaya I No. 73, Sukomanunggal, Suko Manunggal, Kota SBY, Jawa Timur 60188',
                                'Jl. Gubeng Kertajaya III No. 3A, Gubeng, Kota SBY, Jawa Timur 60246',
                                'Jl. Undaan Kulon, Peneleh, Genteng, Kota SBY, Jawa Timur 60274',
                                'Jl. Lebak Arum VI No. 75, Gading, Tambaksari, Kota SBY, Jawa Timur 60134'];

        $faker = Faker::create('id_ID')->unique();

        User::factory()->count(50)->create([
            'user_type' => 'Tutor',
            'phone_number' => $faker->phoneNumber(),
            'address' => $faker->address(),
        ]);

        for($i=0; $i<count($arrayPhoneNumber); $i++){
            User::factory()->create([
                'user_type' => 'Pengurus Panti',
                'phone_number'=> $arrayPhoneNumber[$i],
                'address' => $arrayAddress[$i],
            ]);
        }
    }
}
