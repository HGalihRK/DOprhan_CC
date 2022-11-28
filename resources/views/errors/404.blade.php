@vite('resources/css/app.css')

<!-- Page Container -->
<div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
    <!-- Page Content -->
    <main id="page-content" class="flex flex-auto flex-col max-w-full">
        <div class="bg-white min-h-screen flex items-center relative overflow-hidden">
            <!-- Left/Right Background -->
            <div class="absolute left-0 top-0 bottom-0 w-48 bg-blue-50 transform skew-x-6 -ml-48 md:-ml-28"></div>
            <div class="absolute right-0 top-0 bottom-0 w-48 bg-blue-50 transform skew-x-6 -mr-48 md:-mr-28"></div>
            <!-- END Left/Right Background -->

            <!-- Error Content -->
            <div class="text-center space-y-10 relative container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                <div>
                    <div class="text-6xl md:text-9xl font-extrabold mb-10 md:mb-20 inline-block relative">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-sky-400 relative">
                            404
                        </span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                        Oops.. halaman tidak ditemukan
                    </h2>
                    <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-gray-500 lg:w-2/3 mx-auto">
                        Mohon periksa kembali tautan yang Anda masukkan
                    </h3>
                    <br>
                    <a href="/">
                        <button type="button"
                            class="inline-flex justify-center items-center space-x-2 rounded font-bold focus:outline-none px-3 py-2 leading-6 bg-blue-500 text-white hover:bg-blue-600 focus:ring focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-500 active:border-blue-500">
                            Kembali ke beranda
                        </button>
                    </a>
                </div>
            </div>
            <!-- END Error Content -->
        </div>
    </main>
    <!-- END Page Content -->
</div>
<!-- END Page Container -->
