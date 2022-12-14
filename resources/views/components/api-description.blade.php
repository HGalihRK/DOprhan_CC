<div>
    <h3 class="text-3xl font-semibold">{{ $title }}</h3>
    <h4 class="text-2xl mt-5 mb-3 text-gray-500">Ringkasan</h4>
    <p class="text-gray-500 mb-5">{{ $description }}</p>
    <h4 class="text-2xl mt-5 mb-3 text-gray-500">Request</h4>

    <div x-data="{ tabs: 0 }">
        <div>
            <div class="">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <!-- Current: "border-blue-500 text-blue-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                    <a @click="tabs = 0"
                        class="border-transparent text-blue-500 hover:text-blue-500 hover:border-blue-500 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        URL </a>
                    <a @click="tabs = 1"
                        class="border-transparent text-blue-500 hover:text-blue-500 hover:border-blue-500 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Parameter </a>
                    <a @click="tabs = 2"
                        class="border-transparent text-blue-500 hover:text-blue-500 hover:border-blue-500 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Response </a>
                </nav>
            </div>
        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div x-show="tabs === 0">
            <div class="mt-4 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Method
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">URL
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            GET
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm">
                                            <div class="flex space-x-2" id="api_key" onclick="copyToClipboard()">
                                                <div>
                                                    {{ $url }}
                                                </div>
                                                <div title="Salin">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 text-blue-500 cursor-pointer">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="tabs === 1" class="mt-4 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Method
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Parameter</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Wajib
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Tipe
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Keterangan</th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <x-api-description-item parameter=api_key wajib=Ya tipe=String
                                    keterangan="API Key Developer" />
                                {{ $parameter }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="tabs === 2" class="mt-4 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Status
                                    </th>

                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Response</th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        Sukses</td>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $sukses }}</td>

                                </tr>
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        Gagal</td>
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        {{ $gagal }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyToClipboard() {
        var range = document.createRange();
        range.selectNode(document.getElementById("api_key"));
        window.getSelection().removeAllRanges(); // Hapus pilihan saat ini
        window.getSelection().addRange(range); // Untuk memilih teks
        document.execCommand("copy");
        window.getSelection().removeAllRanges(); // Untuk menghapus pilihan teks
    }
</script>
