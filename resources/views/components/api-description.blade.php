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
                                                class="whitespace-nowrap p-3 text-sm font-medium text-gray-900">
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
                                            class="whitespace-nowrap p-3 text-sm font-medium text-gray-900">
                                            <span
                                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                                                Sukses
                                            </span>
                                        </td>
                                        <td
                                            class="whitespace-nowrap p-3 text-sm font-medium text-gray-900">
                                            {{ $sukses }}</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="whitespace-nowrap p-3 text-sm font-medium text-gray-900">
                                            <span
                                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-semibold bg-red-100 text-red-800">
                                                Gagal
                                            </span>
                                        </td>
                                        <td
                                            class="whitespace-nowrap p-3 text-sm font-medium text-gray-900">
                                            {{ $gagal }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </details>
</div>
