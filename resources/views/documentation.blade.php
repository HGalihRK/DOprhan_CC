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
                    <x-slot name="description">Method Competition digunakan untuk mendapatkan data perlombaan yang
                        terdaftar
                        pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Competition" />
                    </x-slot>
                    <x-slot name="sukses">
                    </x-slot>
                    <x-slot name="gagal">
                    </x-slot>
                </x-api-description>
            </div>
            {{-- untuk buat api documentation --}}
            <div>
                <x-api-description>
                    <x-slot name="title">Competition</x-slot>
                    <x-slot name="description">Method Competition digunakan untuk mendapatkan data perlombaan
                        yang terdaftar pada sistem</x-slot>
                    <x-slot name="url">{{ route('api-competition') }}</x-slot>
                    <x-slot name="parameter">
                        <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Competition" />
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
            "id": 2,
            "tutor_id": 1,
            "title": "Quibusdam eveniet ipsam nisi accusantium sapiente.",
            "location": "Tanjungbalai",
            "description": "Lorem Ipsum, Ini adalah deskripsi lomba",
            "category": "4",
            "created_at": "2022 - 12 - 07 T00: 02: 10.000000 Z",
            "updated_at": "2022 - 12 - 07 T00: 02: 10.000000 Z"
        }
    };

    document.getElementById("sukses_competition").innerHTML = JSON.stringify(response, null, 4);

    // Gagal - Competition
    var response = {
        "result": "Invalid API Key"
    };

    document.getElementById("gagal_competition").innerHTML = JSON.stringify(response, null, 4);
</script>
