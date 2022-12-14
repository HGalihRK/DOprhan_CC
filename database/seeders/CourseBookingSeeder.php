<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orphanage;
use App\Models\CourseBooking;
use App\Models\Transaction;
use Faker\Factory as Faker;

class CourseBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Orphanage::all() as $orphanage) {
            CourseBooking::factory()->count(random_int(1, 5))->create([
                'orphanage_id' => $orphanage->id,
            ]);
        }
        
        foreach (CourseBooking::all() as $courseBooking) {
            if ($courseBooking->status == 'ongoing') {
                $status = 'complete'; // saldo PA berkurang
            } elseif ($courseBooking->status == 'canceled') {
                $status = 'canceled'; // saldo PA dikembalikan
            } else {
                $status = 'pending'; // saldo PA belum berkurang
            }

            // transaction dari PA untuk bayar kursus
            $courseBooking->transaction_id = Transaction::create([
                'user_id' => $courseBooking->orphanage->user->id,
                'amount' => $courseBooking->course->hourly_price + $courseBooking->course->tool_price,
                'status' => $status,
                'description' => 'Pembayaran kursus oleh '.$courseBooking->orphanage->name,
                'to_user_id' => $courseBooking->course->tutor->user->id,
            ])->id;
            $courseBooking->save();
        }
    }
}
