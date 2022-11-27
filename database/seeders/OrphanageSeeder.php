<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Orphanage;

class OrphanageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array ini berisikan data asli panti asuhan dari nomor 1-34
        $arrayName = ['Panti Asuhan BJ Habibie', 'Panti Asuhan Al Kahfi', 'Panti Asuhan Al Qomariyah', 'Panti Asuhan Ibnu Hajar',
                        'Panti Asuhan Amanah Insan', 'Panti Asuhan Diponegoro', 'Panti Asuhan Tanwir', 'Panti Asuhan At Taqwa',
                        'Panti Asuhan Sejahtera', 'Panti Asuhan Muhammadiyah Kenjeran', 'Panti Asuhan Muhammadiyah Kh. Achmad Dahlan',
                        'Panti Asuhan Al Amal', 'Panti Asuhan Ppay Al Amal Putri', 'Panti Asuhan Lil Wathon', 'Panti Asuhan Rodhiyatul Jannah',
                        'Panti Asuhan Jamiyah Muslimat Az Zahara', 'Panti Asuhan Al Ikhlas', 'Panti Asuhan Khadijah 2', 'Panti Asuhan Al Fatah',
                        'Panti Asuhan Mitra Arafah', 'Panti Asuhan Mahbubiyah', 'Panti Asuhan Al Ikhlas', 'Panti Asuhan Muhammadiyah Pakis',
                        'Panti Asuhan Muhammadiyah Putat Jaya', 'Panti Asuhan Muhammadiyah Karang Pilang', 'Panti Asuhan Putri Aisyiyah 2',
                        'Panti Asuhan Yatim & Dhuafa Al Muttaqin', 'Panti Asuhan Darul Aitam Sidogiri', 'Panti Asuhan Don Bosco',
                        'Panti Asuhan Bani Yaqub', 'Yayasan Panti Asuhan Sejahtera', 'Panti Asuhan Yatim Cahaya Insani',
                        'Panti Asuhan Undaan Surabaya', 'Panti Asuhan Ada Hari Esok', ];
        $i = 0;
        foreach (User::all()->where('user_type', 'Pengurus Panti') as $user) {
            Orphanage::factory()->create([
                'user_id' => $user->id,
                'name' => $arrayName[$i],
            ]);
            $i++;
        }
    }
}
