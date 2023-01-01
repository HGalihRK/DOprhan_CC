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
                        <x-api-description-item parameter=tutor_id wajib=Tidak tipe=Integer keterangan="ID Tutor" />
                        <x-api-description-item parameter=skill_id wajib=Tidak tipe=Integer keterangan="ID Kategori" />
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
        {{--  --}}

        {{-- Competition Recommendation --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Competition Recommendation</x-slot>
                    <x-slot name="description">Method Competition Recommendation digunakan untuk mendapatkan data
                        rekomendasi perlombaan
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
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
                        <pre id="sukses_competition" class="bg-gray-900 text-white rounded pl-5 py-2 whitespace-pre-wrap"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_competition" class="bg-gray-900 text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
            </div>
        </div>
        {{--  --}}

        {{-- Course --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Course</x-slot>
                    <x-slot name="description">Method Course digunakan untuk mendapatkan data kursus
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Kursus" />
                        <x-api-description-item parameter=tutor_id wajib=Tidak tipe=Integer keterangan="ID Tutor" />
                        <x-api-description-item parameter=skill_id wajib=Tidak tipe=Integer keterangan="ID Kategori" />
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
        {{--  --}}

        {{-- Course Booking --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Course Booking</x-slot>
                    <x-slot name="description">Method Course Booking digunakan untuk mendapatkan data pesanan kursus
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Pesanan Kursus" />
                        <x-api-description-item parameter=course_id wajib=Tidak tipe=Integer keterangan="ID Kursus" />
                        <x-api-description-item parameter=transaction_id wajib=Tidak tipe=Integer
                            keterangan="ID Transaksi" />
                        <x-api-description-item parameter=orphanage_id wajib=Tidak tipe=Integer
                            keterangan="ID Panti Asuhan" />
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
        {{--  --}}

        {{-- Day --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Day</x-slot>
                    <x-slot name="description">Method Day digunakan untuk mendapatkan data hari
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Hari" />
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
        {{--  --}}

        {{-- Orphanage --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Orphanage</x-slot>
                    <x-slot name="description">Method Orphanage digunakan untuk mendapatkan data panti asuhan
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Panti Asuhan" />
                        <x-api-description-item parameter=user_id wajib=Tidak tipe=Integer keterangan="ID Pengguna" />
                        <x-api-description-item parameter=orphan_id wajib=Tidak tipe=Integer
                            keterangan="ID Anak Panti Asuhan" />
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
        {{--  --}}

        {{-- Tutor --}}
        <div class="bg-white rounded-2xl shadow px-8 pt-6 pb-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Tutor</x-slot>
                    <x-slot name="description">Method Tutor digunakan untuk mendapatkan data tutor
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Tutor" />
                        <x-api-description-item parameter=user_id wajib=Tidak tipe=Integer keterangan="ID Pengguna" />
                        <x-api-description-item parameter=skill_id wajib=Tidak tipe=Integer keterangan="ID Kategori" />
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
        {{--  --}}

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
</script>
