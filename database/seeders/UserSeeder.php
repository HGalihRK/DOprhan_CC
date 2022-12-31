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
        //array ini berisikan data asli panti asuhan dari nomor 1-99
        $arrayPhoneNumber = [
            '031-5950362', '031-5944461', '031-8707379', '031-70542306', '0878-5335-0148', '031-7405145', '031-5312517', '031-7457103', '031-73112227', '031-3721589', '031-70902604', '031-3723313', '031-3714911', '031-3724317', '031-51501138', '031-752299', '031-8299828', '031-7318438', '031-78359345', '0812-3226-294', '031-81111311', '031-5673535', '031-5663209', '031-5677579', '031-7666278', '031-8282488', '031-8292650', '031-3767000', '031-5471410', '031-8284276', '031-7312227', '031-5022818', '031-5341627', '0812-3111-0141', '031-5933809', '031-7526153', '031-5928244', '031-8273250', '031-7666278', '031-5938823', '031-5683781', '031-5457667', '031-5014105', '0888-3004-864', '031-99022923', '0851-0008-2317', '031-3712478', '031-7316401', '0897-8334-424', '031-7671818', '031-8281880', '031-5020234', '031-3542426', '031-5911464', '031-5938823', '031-7532979', '031-8414742', '031-5914122', '031-5036260', '031-8410296', '031-8285050', '031-3713028', '031-8494545', '031-8240620', '031-8286766', '0813-3225-4353', '031-8784390', '031-8783344', '0812-3289-367', '031-8795144', '031-7665928', '031-5937637', '031-8700580', '031-8416453', '031-7671999', '031-7669831', '031-8298529', '031-71602229', '031-5013544', '031-7414074', '031-8793634', '031-3768373', '031-8714095', '031-5341132', '031-8700580', '031-71602229', '031-3769302', '031-8298529', '031-5465816', '031-72059606', '031-8709710', '031-7407094', '031-6661474', '031-8280936', '0821-3138-8899', '031-3714911', '0813-5732-9857', '031-8700580', '0813-3295-7679'
        ];

        $arrayTutor = [
            'Ruth Vania', 'Kinanthi', 'Joceline', 'Chusnul', 'Rena Surya', 'Melia Chandra', 'Josephine', 'Tamara', 'Pophie', 'Elshabyta Auditya', 'Adeline', 'Rokhmania', 'Salma', 'Arinda', 'Noviani', 'Firda', 'Felicia', 'Priska', 'Setya', 'Rurie Ulfa', 'Elvin', 'Belinda', 'Mayang', 'Corina', 'Brigitta', 'Firdaus', 'Fauroni', 'Alvian', 'Adiguna', 'Dikey Putra', 'Muhammad Dary', 'Denny', 'Nathanael', 'Nathaniel Albert', 'Agustinus', 'Arif', 'Rizki Putra', 'Valdiansyah', 'Armando', 'Aufal', 'Ryan', 'Zikry', 'Fakhrur', 'Darius', 'Toni Setiawan', 'Adi Wijaya', 'Thomas Gregorius', 'Felix', 'Hendy', 'Hariawan Widi'
        ];

        $arrayAddress = [
            'Jl. Keputih Tegal I/25, Surabaya Timur', 'Jl. Nginden Baru IV/22, Surabaya Timur',
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
            'Jl. Lebak Arum VI No. 75, Gading, Tambaksari, Kota SBY, Jawa Timur 60134',
            'Jl. Tegal Mulyorejo Baru No.125-127A, Kejawaan Putih Tamba, Mulyorejo, Kota SBY, Jawa Timur 60115',
            'Jl. Wistna Lidah Kulon B No.125, Lidah Kulon, Lakarsantri, Kota SBY. Jawa Timur 60213',
            'Jl. Arief Rachman Hakim Gang II/12, Kampung Deles, Klampis Ngasem, Sukolilo, Kota SBY, Jawa Timur 60117',
            'Jl. Gayungan PTT No.66, Gayungan, Kota SBY, Jawa Timur 60235',
            'Jl. Mastrip No. 64 — 66, Karangpilang Barat, Karangalang, Kartmg Nang, Kota SBY, Jawa Timur 60221',
            'Jl. Raya Mulyosari No.57, Kalisari, Mulyorejo, Kota SBY, Jawa Timur 60112',
            'Jl. Dukuh Kupang Barat I No.223, Dukuh Kupang, Dukuh Pakis, Kota SBY, Jawa Timur 60225',
            'Jl. Simo Sidomulyo V No.26, Peternon, Kec. Sawahan, Kota SBY, Jawa Timur 60252',
            'Jl. Manyar Sambongan No.111, Kertajaya, Gubeng, Kota SBY. Jawa Timur 60282',
            'Jl. Rungkut Asri Utara, Kali Rungkut, Rungkut, Kota SBY Jawa Timur 60293',
            'J1 Gubeng Kertajaya VI D No.11, Gubeng, Kertajaya, Surabaya, Kota SBY, Jawa Timur 60282',
            'Jl. Medokan Asri Barat MA I Blok P No, Medayu Utara XXV, Medokan Ayu, Rungkut, Kota SBY, Jawa Timur 60295',
            'Jl. Gembong 4 No.26, Kapasan, Simokerto, Kota SBY, Jawa Timur 60141',
            'Jl. Simpang Darmo Permai Selatan, Gg XV No. 121-123, Lontar, Surabaya, Kota SBY Jawa Timur 60188',
            'Jl. Raya Menganti Wiyung, Kedurus, Wiyung, Surabaya City, East Java 60223',
            'Jl. Gemol I C, No. 23 A, Jajar Tunggal, Wiyung, Kota SBY, Jawa Timur 60229',
            'J1. Jambangan Kebon Agung No.1, Jambangan, Kota SBY, Jawa Timur 60232',
            'Jl. Ngagel Jaya VIII, No. 7-9, Pucang Sewu, Gubeng, Kota SBY, Jawa Timur 60283',
            'Jl. Kepanjen No.5, Krembangan Sel, Krembangan, Kota SBY, Jawa Timur 60175',
            'Jl. Kedung Tomas II No.26 A, Menur Pumpungan, Sukolilo, Kota SBY, Jawa Timur 60118',
            'Jl. Raya Mulyosari No.57, Kalisari Mulyorejo, Kota SBY, Jawa Timur 60115',
            'Jl. Raya Sepat Lidah Kulon No.303, Lidah Kulon, Lakarsantri, Kota SBY Jawa Timur 60213',
            'Jl. Kendangsari III No.32, Kendangsari, Tenggilis Mejoyo, Kota SBY, Jawa Timur 60292',
            'Jl. Tegal Mulyorejo Baru No.71, Kejawaan Putih Tamba, Mulyorejo, Kota SBY, Jawa Timur 60112',
            'Jl. Gubeng Kertajaya V B No.5, Airlangga, Gubeng, Kota SBY, Jawa Timur 60281',
            'Jl. Tenggilis Mulya No. 47, Tenggilis Mejoyo, Kota SBY, Jawa Timur 60292',
            'Jl. Ketintang 1 No.5A Wonokromo, Kota SBY, Jawa Timur 60253',
            'Jl. Sidodadi No.15, Sidodadi, Simokerto, Kota SBY, Jawa Timur 60145',
            'Jl. Sidosermo IV Gang Puskesmas, No. 55 Sidosermo, Wonocolo, Kota SBY, Jawa Timur 60239',
            'Jl. Gembili Raya No.82, Bendul Merisi, Wonocolo, Kota SBY, Jawa Timur 60244',
            'Jl. Karah Agung XII No.1, RT.002/RW.10, Karah, Jambangan Kota SBY, Jawa Timur 60232',
            'Jl. Manukan Yoso VI, Manukan Kulon, Tandes, Kota SBY, Jawa Timur 60185',
            'Jl. RY. Wiguna Timur No.84, Gn. Anyar Tambak, Kota SBY, Jawa Tama 60294',
            'Jl. Gunung Anyar Tambak No.1/25, Gunung Anyar, Gn. Anyar Tambak, Kota SBY, Jawa Timur 60294',
            'Jl. Sambisari Utara 1 No.15 RT05 RW03, Lontar, Sambikerep, Lontar, Sambikerep, Kota SBY, Jawa Timur 60188',
            'Jl. Medayu Utara I, Medokan Ayu, Rungkut, Kota SBY, Jawa Timur 60295',
            'Jl. Griya Kebraon Utara X Blok AO No.22, Kebraon, Karang Pilang, Kota SBY, Jawa Timur 60222',
            'Jl. Nginden Baru VIII Blok B No.19, Semolowaru, Sukolilo, Kota SBY, Jawa Timur 60119',
            'Jl. Pandugo, Blok II No. 30 B, Penjariagan Sari, Rtmgkut. Kota SBY, Java Taunt 60297',
            'Jl. Tales 2 No.9 Jagir, Wonokromo, Kota SBY, Jawa Timur 60244',
            'Jl. Kemlaten Baru No.23, Kebraon, Karang Pilang, Kota SBY, Jawa Timur 60222',
            'Jl. Dk.Karang Ploso No.26, RT.1/RW.2, Bangkingan, Lakarsantri, Kota SBY, Jawa Timur 60214',
            'Jl. Karah Agung I No.9, Karah, Jambangan, Kota SBY, Jawa Timur 60232',
            'Jl. Sambisari Utara No.9, Lontar, Sambikerep, Kota SBY Jawa Timur 60216',
            'Jl. Gresikan, 59, Ploso, Tambaksari Kota SBY. Jawa Timur 60131',
            'JI. Manukan Ranu, Blok 21 C, Manukan Kulon, Tandes, Kota SBY, Jawa Timur 60185',
            'Jl. Kedungasem No.58, Kedung Baruk, Rungkut, Kota SBY, Jawa Timur 60298',
            'Jl. Sidonipah No.28, RT.008/RW.02, Sinolawang, Simokerto, Kota SBY, Jawa Timur 60144',
            'Jl. Gunung Anyar, Blok G No. 217, Perum IKIP, Surabaya, 60231',
            'Jl. Kombes Pol. Moh. Duryat No.10-12, Tegalsari, Kota SBY, Jawa Timur 60262',
            'Jl. Pandugo, Blok II No. 30 B, Penjaringan Sari, Rungkut. Kota SBY, Jawa Timur 60297',
            'Jl. Sambisari Utara No.9, Lour, Sambikerep, Kota SBY, Jawa Timur 60216',
            'Jl. Bulak Banteng Wetan, Gg. 6, No.16, Sidotopo Wean, Kenjeran, Sidotopo Wetan, Kenjeran, Kota SBY, Jawa Timur 60128',
            'Jl. Karah Agung I No.9, Karah, Jambangan, Kota SBY, Jawa Timur 60232',
            'Jl. Grogol, Blok III No. 12, Peneleh, Genteng, Kota SBY, Jawa Timur 60274',
            'Jl. Dukuh Pakis II No.62, Dukuh Pakis, Kota SBY, Jawa Timur 60225',
            'Jl. Rungkut Mapan, Blok FD No. 4, Rungkut Tengah, Surabaya, Kota SBY, Jawa Timur 60293',
            'Jl. Bringin No.5 Bringin, Sambikerep, Kota SBY, Jawa Timur 60218',
            'Jl. Kapuas Blok Fi/No. 22, Tropodo, Waru, Kabupaten Sidoarjo, Jawa Timur 61256',
            'Jl. Gayungsari V, No. 17-21, Surabaya, Gayungan, Surabaya City, East Java 60235',
            'Jl. Wonocolo VIII, Jemur Wonosari, Surabaya, Kota SBY. Jawa Timur 60237',
            'Jl. Wonosari Lor No.52, Wonokusumo, Semampir, KotaSBY. Jawa Timur 60154',
            'Jl. Wonokromo Pasar Gang II, Surabaya, Wonokromo, Koos SBY. Jawa Timur 60243',
            'Jl. Pandugo Praja II No.30, Penjaringan Sari, Rungkut, Kota SBY, Jawa Timur 60297',
            'Jl. Tambak Medokan Ayu, Gg. VIII Blok D No.10, Medokan Ayu, Rungkut, Kota SBY, Jawa Timur 60295'
        ];

        $faker = Faker::create('id_ID')->unique();

        for ($i = 0; $i < 25; $i++) {
            User::factory()->create([
                'user_type' => 'Tutor',
                'name' => $arrayTutor[$i],
                'gender' => 'Female',
                'phone_number' => $faker->phoneNumber(),
                'address' => $faker->address(),
            ]);
        }

        for ($i = 25; $i < count($arrayTutor); $i++) {
            User::factory()->create([
                'user_type' => 'Tutor',
                'name' => $arrayTutor[$i],
                'gender' => 'Male',
                'phone_number' => $faker->phoneNumber(),
                'address' => $faker->address(),
            ]);
        }
        $faker2 = Faker::create('id_ID');
        for ($i = 0; $i < count($arrayPhoneNumber); $i++) {
            $rand_gender = $faker2->randomElement(['Male', 'Female']);
            User::factory()->create([
                'name' => $rand_gender == 'Male' ? $faker->firstNameMale() : $faker->firstNameFemale(),
                'user_type' => 'Pengurus Panti',
                'phone_number' => $arrayPhoneNumber[$i],
                'gender' => $rand_gender,
                'address' => $arrayAddress[$i],
            ]);
        }
    }
}
