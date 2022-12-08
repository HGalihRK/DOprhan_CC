<x-guest-layout>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-blue-500 tracking-wide uppercase">Dokumentasi</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Layanan
                    API untuk semua user.</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Mulai secara gratis. Bayar hanya untuk tambahan
                    fitur</p>
            </div>
        </div>
    </div>
    <div class="bg-white mt-5">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
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
                <x-slot  name="gagal">
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
