@section('title', 'Dokumentasi')

<x-guest-layout>
    <div>
        <p class="text-4xl font-extrabold text-gray-900">Layanan Antarmuka Pemrograman Aplikasi untuk semua
            Pengembang</p>
    </div>
    <div class="bg-white mt-5">
        <div class="px-8 py-2">
            <x-api-description>
                <x-slot name="title">Competition</x-slot>
                <x-slot name="description">Method Competition digunakan untuk mendapat data kompetisi/perlombaan yang
                    terdaftar pada sistem</x-slot>
                <x-slot name="url">{{ route('api-competition') }}</x-slot>
                <x-slot name="parameter">
                    <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Competition" />
                </x-slot>
                <x-slot name="sukses">



                </x-slot>
                <x-slot name="gagal">



                </x-slot>

            </x-api-description>
            {{-- untuk buat api documentation --}}
            <x-api-description class="mt-5">
                <x-slot name="title">Competition</x-slot>
                <x-slot name="description">Method Competition digunakan untuk mendapat data kompetisi/perlombaan yang
                    terdaftar pada sistem</x-slot>
                <x-slot name="url">{{ route('api-competition') }}</x-slot>
                <x-slot name="parameter">
                    <x-api-description-item parameter=id wajib=Tidak tipe=Integer keterangan="ID Competition" />
                    <x-api-description-item parameter=skill_id wajib=Ya tipe=Integer keterangan="ID Kategori" />

                </x-slot>
                <x-slot name="sukses">
                    <pre class="beautified">
                    {"result":{"id":2,"tutor_id":1,"title":"Quibusdam eveniet ipsam nisi accusantium
                    sapiente.","location":"Tanjungbalai","description":"Lorem Ipsum, Ini adalah deskripsi
                    lomba","category":"4","created_at":"2022-12-07T00:02:10.000000Z","updated_at":"2022-12-07T00:02:10.000000Z"}}
                    </pre>
                </x-slot>
                <x-slot name="gagal">
                    <pre class="beautified">
                        {"result":"Invalid API Key"}

                    </pre>

                </x-slot>

            </x-api-description>

            {{-- ulang di atas --}}
        </div>
    </div>
</x-guest-layout>

<script>
    function beautifier(item) {
        item.innerHTML = JSON.stringify(item.innerHTML, undefined, 2);
    }
    document.getElementsByClass("beautified").forEach(beautifier);
</script>
