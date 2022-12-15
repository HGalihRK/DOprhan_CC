@section('title', 'Dokumentasi')

<x-guest-layout>
    <div class="flex flex-col space-y-8">
        <div class="space-y-2">
            <p class="text-4xl font-extrabold text-gray-900">Kembangkan aplikasi untuk turut mendukung perkembangan Bakat
                dan Minat Anak Panti Asuhan</p>
            <p class="text-gray-500">Pelajari cara mengakses layanan Antarmuka Pemrograman Aplikasi Publik yang
                D&#39;Orphan sediakan melalui dokumentasi berikut ini</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-8 space-y-8">
            <div>
                <x-api-description>
                    <x-slot name="title">Competition</x-slot>
                    <x-slot name="description">Method Competition digunakan untuk mendapatkan data perlombaan
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Competition" />
                        <x-api-description-item parameter=tutor_id wajib=Tidak tipe=Integer keterangan="ID Tutor" />
                        <x-api-description-item parameter=skill_id wajib=Ya tipe=Integer keterangan="ID Kategori" />
                    </x-slot>
                    <x-slot name="sukses">
                        <pre id="sukses_competition" class="bg-black text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                    <x-slot name="gagal">
                        <pre id="gagal_competition" class="bg-black text-white rounded pl-5 py-2"></pre>
                    </x-slot>
                </x-api-description>
                {{-- ulang di atas --}}
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
</script>
