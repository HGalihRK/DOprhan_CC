<div>
    <details open>
        <summary class="text-2xl font-semibold">{{ $title }}</summary>
        <p class="text-xl mt-5">Deskripsi</p>
        <p class="text-gray-500 mb-5">{{ $description }}</p>
        <p class="text-xl mt-5">Request</p>

        <div x-data="{ tabs: 0 }">
            <div class="flex justify-center">
                <nav class="grid lg:flex justify-center text-center bg-blue-100 text-blue-700 rounded lg:space-x-4 px-2 py-4"
                    aria-label="Tabs">
                    <a @click="tabs = 0" class="cursor-pointer px-3 py-2 font-semibold rounded"
                        x-bind:class="{ 'bg-blue-500 text-white': tabs === 0 }">
                        URL </a>
                    <a @click="tabs = 1" class="cursor-pointer px-3 py-2 font-semibold rounded"
                        x-bind:class="{ 'bg-blue-500 text-white': tabs === 1 }">
                        Parameter </a>
                    <a @click="tabs = 2" class="cursor-pointer px-3 py-2 font-semibold rounded"
                        x-bind:class="{ 'bg-blue-500 text-white': tabs === 2 }">
                        Response </a>
                </nav>
            </div>

            <div x-show="tabs === 0">
                <div class="mt-4 flex flex-col">
                    <div class="overflow-x-auto shadow rounded">
                        <table class="min-w-full">
                            <thead class="bg-gray-500 text-white">
                                <tr>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                        Method
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">URL
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="whitespace-nowrap p-3 text-sm font-medium">
                                        GET
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm">
                                        {{ $url }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div x-show="tabs === 1" class="mt-4 flex flex-col">
                <div class="overflow-x-auto shadow rounded">
                    <table class="min-w-full">
                        <thead class="bg-gray-500 text-white">
                            <tr>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                    Method
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                    Parameter</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                    Wajib
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                    Tipe
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                    Keterangan</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <x-api-description-item parameter=api_key wajib=Ya tipe=String
                                keterangan="API Key Developer" />
                            {{ $parameter }}
                        </tbody>
                    </table>
                </div>
            </div>

            <div x-show="tabs === 2" class="mt-4 flex flex-col">
                <div class="overflow-x-auto shadow rounded">
                    <table class="min-w-full">
                        <thead class="bg-gray-500 text-white">
                            <tr>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                    Status
                                </th>

                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">
                                    Response</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr>
                                <td class="whitespace-nowrap p-3 text-sm font-medium">
                                    <span
                                        class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                                        Sukses
                                    </span>
                                </td>
                                <td class="whitespace-nowrap p-3 text-sm font-medium">
                                    {{ $sukses }}</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="whitespace-nowrap p-3 text-sm font-medium">
                                    <span
                                        class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-semibold bg-red-100 text-red-800">
                                        Gagal
                                    </span>
                                </td>
                                <td class="whitespace-nowrap p-3 text-sm font-medium">
                                    {{ $gagal }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </details>
</div>
