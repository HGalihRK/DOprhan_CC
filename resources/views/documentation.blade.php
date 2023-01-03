@section('title', 'Dokumentasi')

<x-guest-layout>
    <div class="flex flex-col space-y-8">
        <div class="space-y-2">
            <p class="text-3xl font-extrabold text-gray-900">Dokumentasi Antarmuka Pemrograman Aplikasi
                Publik D&#39;Orphan</p>
        </div>

        {{-- Competition --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Competition</x-slot>
                    <x-slot name="description">Method Competition digunakan untuk mendapatkan data perlombaan
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Lomba" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_competition" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_competition" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>

        {{-- Competition Recommendation --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Competition Recommendation</x-slot>
                    <x-slot name="description">Method Competition Recommendation digunakan untuk mendapatkan data
                        rekomendasi perlombaan
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition-recommendation') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer
                            keterangan="ID Rekomendasi Lomba" />
                        <x-api-description-item parameter=tutor_id wajib=Tidak tipe=Integer keterangan="ID Tutor" />
                        <x-api-description-item parameter=orphanage_id wajib=Tidak tipe=Integer
                            keterangan="ID Panti Asuhan" />
                        <x-api-description-item parameter=competition_id wajib=Tidak tipe=Integer
                            keterangan="ID Lomba" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_competition_recommendation" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_competition_recommendation" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>

        {{-- Course --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Course</x-slot>
                    <x-slot name="description">Method Course digunakan untuk mendapatkan data kursus
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-course') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Kursus" />
                        <x-api-description-item parameter=tutor_id wajib=Tidak tipe=Integer keterangan="ID Tutor" />
                        <x-api-description-item parameter=skill_id wajib=Tidak tipe=Integer keterangan="ID Kategori" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_course" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_course" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>

        {{-- Course Booking --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Course Booking</x-slot>
                    <x-slot name="description">Method Course Booking digunakan untuk mendapatkan data pesanan kursus
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-course-booking') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Pesanan Kursus" />
                        <x-api-description-item parameter=course_id wajib=Tidak tipe=Integer keterangan="ID Kursus" />
                        <x-api-description-item parameter=transaction_id wajib=Tidak tipe=Integer
                            keterangan="ID Transaksi" />
                        <x-api-description-item parameter=orphanage_id wajib=Tidak tipe=Integer
                            keterangan="ID Panti Asuhan" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_course_booking" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_course_booking" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>

        {{-- Day --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Day</x-slot>
                    <x-slot name="description">Method Day digunakan untuk mendapatkan data hari
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-day') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Hari" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_day" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_day" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>

        {{-- Orphanage --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Orphanage</x-slot>
                    <x-slot name="description">Method Orphanage digunakan untuk mendapatkan data panti asuhan
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-orphanage') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Panti Asuhan" />
                        <x-api-description-item parameter=user_id wajib=Tidak tipe=Integer keterangan="ID Pengguna" />
                        <x-api-description-item parameter=orphan_id wajib=Tidak tipe=Integer
                            keterangan="ID Anak Panti Asuhan" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_orphanage" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_orphanage" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>

        {{-- Tutor --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Tutor</x-slot>
                    <x-slot name="description">Method Tutor digunakan untuk mendapatkan data tutor
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-tutor') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Tutor" />
                        <x-api-description-item parameter=user_id wajib=Tidak tipe=Integer keterangan="ID Pengguna" />
                        <x-api-description-item parameter=skill_id wajib=Tidak tipe=Integer keterangan="ID Kategori" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_tutor" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_tutor" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>
    </div>
</x-guest-layout>

<script>
    // Sukses - Competition
    var response = {
        "result": {
            "id": 1,
            "name": "Non sed ipsam exercitationem.",
            "registration_start_date": "2023-01-14 17:37:55",
            "url": "http://ardianto.my.id/nam-a-nobis-quia-quo-vero-velit",
            "description": "Rerum culpa magni ut est deleniti culpa dolorum. Suscipit aperiam quis molestias voluptatem. Assumenda similique voluptatum rerum ut. Laboriosam qui repudiandae quidem et libero.",
            "created_at": "2022-12-14T07:37:32.000000Z",
            "updated_at": "2022-12-14T07:37:32.000000Z"
        }
    };

    document.getElementById("sukses_competition").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Competition
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_competition").innerHTML = JSON.stringify(response, null, 4);

    // Sukses - Competition Recommendation
    var response = {
        "result": [{
            "id": 1,
            "tutor": {
                "id": 34,
                "user_id": 34,
                "bank_account": "7799042246",
                "description": "Nihil aspernatur dicta sapiente. Quia rerum repellendus delectus dolorem repellendus id ad. Dolore modi autem veritatis iusto. Eos mollitia laudantium corporis officia suscipit delectus ut. Aut voluptatem nihil id omnis cumque.",
                "created_at": "2022-12-31T16:19:36.000000Z",
                "updated_at": "2022-12-31T16:19:36.000000Z"
            },
            "orphanage": {
                "id": 89,
                "name": "Panti Asuhan Muhammadiyah Gubeng",
                "photo_url": "https://via.placeholder.com/640x480.png/008833?text=rerum",
                "description": "Natus consequatur iusto dolorem nobis reiciendis aut corrupti quisquam. Officiis velit eveniet ex in. Sit fugit maxime alias expedita ut. Eum dolorum blanditiis nihil tempora.",
                "member_count": 62,
                "user_id": 139,
                "created_at": "2022-12-31T16:19:41.000000Z",
                "updated_at": "2022-12-31T16:19:41.000000Z"
            },
            "competition": {
                "id": 1,
                "name": "Sunt dolor velit et.",
                "registration_start_date": "2023-02-28 03:00:23",
                "url": "http://www.nuraini.asia/ea-corrupti-at-ea",
                "description": "Sapiente accusamus dolorem autem at perferendis ullam. Placeat odio corrupti dolorem nemo.",
                "created_at": "2022-12-31T16:19:55.000000Z",
                "updated_at": "2022-12-31T16:19:55.000000Z"
            },
            "created_at": "2022-12-31T16:20:27.000000Z",
            "updated_at": "2022-12-31T16:20:27.000000Z"
        }]
    };

    document.getElementById("sukses_competition_recommendation").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Competition Recommendation
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_competition_recommendation").innerHTML = JSON.stringify(response, null, 4);

    // Sukses - Course
    var response = {
        "result": [{
            "id": 1,
            "tutor_id": 1,
            "skill_id": 73,
            "description": "Asah dan kembangkan melalui kursus ini!",
            "location": "Jayapura",
            "hourly_price": 79680,
            "is_online": 1,
            "is_visit": 0,
            "maximum_member": 11,
            "tool_price": 0,
            "tool_description": "Peralatan terkait untuk menunjang kebutuhan murid",
            "created_at": "2022-12-31T16:19:55.000000Z",
            "updated_at": "2022-12-31T16:19:55.000000Z"
        }]
    };

    document.getElementById("sukses_course").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Course
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_course").innerHTML = JSON.stringify(response, null, 4);

    // Sukses - Course Booking
    var response = {
        "result": [{
            "id": 1,
            "course": {
                "id": 1,
                "tutor_id": 1,
                "skill_id": 73,
                "description": "Asah dan kembangkan melalui kursus ini!",
                "location": "Jayapura",
                "hourly_price": 79680,
                "is_online": 1,
                "is_visit": 0,
                "maximum_member": 11,
                "tool_price": 0,
                "tool_description": "Peralatan terkait untuk menunjang kebutuhan murid",
                "created_at": "2022-12-31T16:19:55.000000Z",
                "updated_at": "2022-12-31T16:19:55.000000Z"
            },
            "hour_count": 25,
            "start_date": "2022-08-09 03:20:21",
            "status": "ongoing",
            "total_price": null,
            "transaction": {
                "id": 1,
                "user_id": 51,
                "amount": 79680,
                "status": "complete",
                "description": "Pembayaran kursus oleh Panti Asuhan BJ Habibie",
                "to_user_id": 1,
                "created_at": "2022-12-31T16:19:58.000000Z",
                "updated_at": "2022-12-31T16:19:58.000000Z"
            },
            "orphanage": {
                "id": 1,
                "name": "Panti Asuhan BJ Habibie",
                "photo_url": "https://via.placeholder.com/640x480.png/0088bb?text=et",
                "description": "Dolorem non at culpa expedita dignissimos. Ea est fuga sint. Sint quo reiciendis tempore impedit omnis cupiditate quaerat libero. Tempora totam voluptates architecto quos est quisquam.",
                "member_count": 60,
                "user_id": 51,
                "created_at": "2022-12-31T16:19:41.000000Z",
                "updated_at": "2022-12-31T16:19:41.000000Z"
            },
            "orphans": [{
                    "id": 3,
                    "orphanage_id": 1,
                    "name": "Ratih",
                    "date_of_birth": "1983-06-20 02:33:58",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 5,
                    "orphanage_id": 1,
                    "name": "Adikara",
                    "date_of_birth": "2004-11-15 15:38:04",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 16,
                    "orphanage_id": 1,
                    "name": "Lurhur",
                    "date_of_birth": "1979-10-06 19:14:50",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 17,
                    "orphanage_id": 1,
                    "name": "Puti",
                    "date_of_birth": "1991-03-08 16:32:18",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 49,
                    "orphanage_id": 1,
                    "name": "Baktianto",
                    "date_of_birth": "1997-10-01 04:57:12",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                }
            ],
            "schedule": [{
                "id": 25,
                "day_id": 3,
                "start_time": "19:00:00",
                "end_time": "00:00:00",
                "created_at": "2022-12-31T16:19:38.000000Z",
                "updated_at": "2022-12-31T16:19:38.000000Z"
            }],
            "created_at": "2022-12-31T16:19:56.000000Z",
            "updated_at": "2022-12-31T16:19:58.000000Z"
        }]
    };

    document.getElementById("sukses_course_booking").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Course Booking
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_course_booking").innerHTML = JSON.stringify(response, null, 4);

    // Sukses - Day
    var response = {
        "result": [{
            "id": 1,
            "day": "Sun",
            "created_at": "2022-12-31T16:19:37.000000Z",
            "updated_at": "2022-12-31T16:19:37.000000Z"
        }]
    };

    document.getElementById("sukses_day").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Day
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_day").innerHTML = JSON.stringify(response, null, 4);

    // Sukses - Orphanage
    var response = {
        "result": [{
            "id": 1,
            "name": "Panti Asuhan BJ Habibie",
            "photo_url": "https://via.placeholder.com/640x480.png/0088bb?text=et",
            "description": "Dolorem non at culpa expedita dignissimos. Ea est fuga sint. Sint quo reiciendis tempore impedit omnis cupiditate quaerat libero. Tempora totam voluptates architecto quos est quisquam.",
            "member_count": 60,
            "user": {
                "id": 51,
                "name": "Gaman",
                "gender": "Male",
                "user_type": "Pengurus Panti",
                "profile_photo_path": null,
                "address": "Jl. Keputih Tegal I/25, Surabaya Timur",
                "created_at": "2022-12-31T16:19:36.000000Z",
                "updated_at": "2022-12-31T16:19:36.000000Z",
                "profile_photo_url": "https://ui-avatars.com/api/?name=G&color=7F9CF5&background=EBF4FF"
            },
            "orphans": [{
                    "id": 1,
                    "orphanage_id": 1,
                    "name": "Bella",
                    "date_of_birth": "1988-03-20 02:55:09",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 2,
                    "orphanage_id": 1,
                    "name": "Mahmud",
                    "date_of_birth": "1977-04-11 11:04:31",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 3,
                    "orphanage_id": 1,
                    "name": "Ratih",
                    "date_of_birth": "1983-06-20 02:33:58",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 4,
                    "orphanage_id": 1,
                    "name": "Mursita",
                    "date_of_birth": "1981-06-08 13:15:41",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 5,
                    "orphanage_id": 1,
                    "name": "Adikara",
                    "date_of_birth": "2004-11-15 15:38:04",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 6,
                    "orphanage_id": 1,
                    "name": "Lanang",
                    "date_of_birth": "1987-07-29 13:05:41",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 7,
                    "orphanage_id": 1,
                    "name": "Anastasia",
                    "date_of_birth": "1995-10-12 09:23:04",
                    "gender": "Female",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 8,
                    "orphanage_id": 1,
                    "name": "Bahuraksa",
                    "date_of_birth": "1980-06-07 07:53:48",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 9,
                    "orphanage_id": 1,
                    "name": "Satya",
                    "date_of_birth": "2000-09-21 08:23:10",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 10,
                    "orphanage_id": 1,
                    "name": "Caraka",
                    "date_of_birth": "1982-11-01 01:52:30",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 11,
                    "orphanage_id": 1,
                    "name": "Jasmani",
                    "date_of_birth": "1994-09-06 07:38:29",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 12,
                    "orphanage_id": 1,
                    "name": "Setya",
                    "date_of_birth": "1992-03-26 08:06:28",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 13,
                    "orphanage_id": 1,
                    "name": "Ibrani",
                    "date_of_birth": "1988-12-10 19:21:57",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 14,
                    "orphanage_id": 1,
                    "name": "Banawa",
                    "date_of_birth": "1979-12-23 18:47:13",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 15,
                    "orphanage_id": 1,
                    "name": "Danu",
                    "date_of_birth": "1996-08-07 16:16:45",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 16,
                    "orphanage_id": 1,
                    "name": "Lurhur",
                    "date_of_birth": "1979-10-06 19:14:50",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 17,
                    "orphanage_id": 1,
                    "name": "Puti",
                    "date_of_birth": "1991-03-08 16:32:18",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 18,
                    "orphanage_id": 1,
                    "name": "Balijan",
                    "date_of_birth": "2004-03-04 07:13:34",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 19,
                    "orphanage_id": 1,
                    "name": "Suci",
                    "date_of_birth": "1988-03-17 16:36:56",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 20,
                    "orphanage_id": 1,
                    "name": "Wulan",
                    "date_of_birth": "1996-08-16 19:37:02",
                    "gender": "Female",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 21,
                    "orphanage_id": 1,
                    "name": "Saadat",
                    "date_of_birth": "1992-05-07 20:37:16",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 22,
                    "orphanage_id": 1,
                    "name": "Adhiarja",
                    "date_of_birth": "1995-11-03 19:48:36",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 23,
                    "orphanage_id": 1,
                    "name": "Prasetya",
                    "date_of_birth": "1997-10-04 21:54:22",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 24,
                    "orphanage_id": 1,
                    "name": "Ajimin",
                    "date_of_birth": "1985-01-06 03:51:44",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 25,
                    "orphanage_id": 1,
                    "name": "Unjani",
                    "date_of_birth": "1976-11-04 15:47:04",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 26,
                    "orphanage_id": 1,
                    "name": "Raditya",
                    "date_of_birth": "1996-11-17 12:45:20",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 27,
                    "orphanage_id": 1,
                    "name": "Ifa",
                    "date_of_birth": "2002-01-23 10:26:16",
                    "gender": "Female",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 28,
                    "orphanage_id": 1,
                    "name": "Laras",
                    "date_of_birth": "1984-07-23 18:54:10",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 29,
                    "orphanage_id": 1,
                    "name": "Tania",
                    "date_of_birth": "1984-08-28 18:02:54",
                    "gender": "Female",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 30,
                    "orphanage_id": 1,
                    "name": "Kajen",
                    "date_of_birth": "1989-03-25 11:59:57",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 31,
                    "orphanage_id": 1,
                    "name": "Putri",
                    "date_of_birth": "1997-06-12 08:34:20",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 32,
                    "orphanage_id": 1,
                    "name": "Ani",
                    "date_of_birth": "1994-04-24 04:19:45",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 33,
                    "orphanage_id": 1,
                    "name": "Balangga",
                    "date_of_birth": "2002-09-26 00:33:26",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 34,
                    "orphanage_id": 1,
                    "name": "Bella",
                    "date_of_birth": "1985-04-29 03:27:56",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 35,
                    "orphanage_id": 1,
                    "name": "Bala",
                    "date_of_birth": "1983-03-20 11:08:49",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 36,
                    "orphanage_id": 1,
                    "name": "Putri",
                    "date_of_birth": "2001-01-16 23:30:30",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 37,
                    "orphanage_id": 1,
                    "name": "Irfan",
                    "date_of_birth": "1980-10-07 20:39:57",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 38,
                    "orphanage_id": 1,
                    "name": "Tiara",
                    "date_of_birth": "1992-12-25 07:55:55",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 39,
                    "orphanage_id": 1,
                    "name": "Bakijan",
                    "date_of_birth": "1992-06-11 11:24:00",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 40,
                    "orphanage_id": 1,
                    "name": "Slamet",
                    "date_of_birth": "1976-09-10 10:31:27",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 41,
                    "orphanage_id": 1,
                    "name": "Oskar",
                    "date_of_birth": "1987-07-09 10:53:10",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 42,
                    "orphanage_id": 1,
                    "name": "Gangsar",
                    "date_of_birth": "1978-05-09 03:03:37",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 43,
                    "orphanage_id": 1,
                    "name": "Marwata",
                    "date_of_birth": "1987-12-10 18:20:32",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 44,
                    "orphanage_id": 1,
                    "name": "Asmuni",
                    "date_of_birth": "1984-07-21 21:38:19",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 45,
                    "orphanage_id": 1,
                    "name": "Hilda",
                    "date_of_birth": "1994-01-10 00:57:53",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 46,
                    "orphanage_id": 1,
                    "name": "Dalima",
                    "date_of_birth": "1990-03-19 14:10:23",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 47,
                    "orphanage_id": 1,
                    "name": "Rizki",
                    "date_of_birth": "1995-07-14 03:15:23",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 48,
                    "orphanage_id": 1,
                    "name": "Rahmi",
                    "date_of_birth": "1998-09-30 04:53:05",
                    "gender": "Female",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 49,
                    "orphanage_id": 1,
                    "name": "Baktianto",
                    "date_of_birth": "1997-10-01 04:57:12",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 50,
                    "orphanage_id": 1,
                    "name": "Hardana",
                    "date_of_birth": "1992-08-05 02:55:30",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 51,
                    "orphanage_id": 1,
                    "name": "Opung",
                    "date_of_birth": "1977-05-30 11:45:30",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 52,
                    "orphanage_id": 1,
                    "name": "Baktiono",
                    "date_of_birth": "2003-04-27 23:12:47",
                    "gender": "Male",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 53,
                    "orphanage_id": 1,
                    "name": "Dewi",
                    "date_of_birth": "1995-08-26 19:39:26",
                    "gender": "Female",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 54,
                    "orphanage_id": 1,
                    "name": "Kunthara",
                    "date_of_birth": "1999-02-25 06:34:04",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 55,
                    "orphanage_id": 1,
                    "name": "Sarah",
                    "date_of_birth": "1991-06-16 11:00:35",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 56,
                    "orphanage_id": 1,
                    "name": "Wirda",
                    "date_of_birth": "1992-08-21 16:58:04",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 57,
                    "orphanage_id": 1,
                    "name": "Virman",
                    "date_of_birth": "1996-12-17 07:04:00",
                    "gender": "Male",
                    "note": "",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 58,
                    "orphanage_id": 1,
                    "name": "Fathonah",
                    "date_of_birth": "1982-10-16 03:14:51",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 59,
                    "orphanage_id": 1,
                    "name": "Ellis",
                    "date_of_birth": "2002-03-19 02:50:55",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                },
                {
                    "id": 60,
                    "orphanage_id": 1,
                    "name": "Salimah",
                    "date_of_birth": "1992-09-02 09:28:10",
                    "gender": "Female",
                    "note": "Anak Disabilitas",
                    "created_at": "2022-12-31T16:19:41.000000Z",
                    "updated_at": "2022-12-31T16:19:41.000000Z"
                }
            ],
            "created_at": "2022-12-31T16:19:41.000000Z",
            "updated_at": "2022-12-31T16:19:41.000000Z"
        }]
    };

    document.getElementById("sukses_orphanage").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Orphanage
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_orphanage").innerHTML = JSON.stringify(response, null, 4);

    // Sukses - Tutor
    var response = {
        "result": [{
            "id": 1,
            "user_id": {
                "id": 1,
                "name": "Ruth Vania",
                "gender": "Female",
                "user_type": "Tutor",
                "profile_photo_path": null,
                "address": "Ds. Jagakarsa No. 188, Lhokseumawe 28769, Kepri",
                "created_at": "2022-12-31T16:19:36.000000Z",
                "updated_at": "2022-12-31T16:19:36.000000Z",
                "profile_photo_url": "https://ui-avatars.com/api/?name=R+V&color=7F9CF5&background=EBF4FF"
            },
            "description": "Consectetur aliquid omnis eos dolor quo quod facilis. Sapiente nostrum voluptatem voluptate quia natus hic. Facilis alias sed ducimus ea sit voluptatem.",
            "skills": [{
                    "id": 58,
                    "name": "Aquathlon",
                    "photo_path": null,
                    "created_at": "2022-12-31T16:19:54.000000Z",
                    "updated_at": "2022-12-31T16:19:54.000000Z"
                },
                {
                    "id": 73,
                    "name": "Dansa Vallroom Latin",
                    "photo_path": null,
                    "created_at": "2022-12-31T16:19:54.000000Z",
                    "updated_at": "2022-12-31T16:19:54.000000Z"
                }
            ],
            "created_at": "2022-12-31T16:19:36.000000Z",
            "updated_at": "2022-12-31T16:19:36.000000Z"
        }]
    }

    document.getElementById("sukses_tutor").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Tutor
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_tutor").innerHTML = JSON.stringify(response, null, 4);
</script>
