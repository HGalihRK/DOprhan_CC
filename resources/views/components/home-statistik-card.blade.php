<div class="flex flex-col rounded-2xl shadow bg-white overflow-hidden text-center gap-4">
    <!-- Card Header -->
    <div class="pt-5 w-full text-gray-500">
        {{ $title }}
    </div>
    <!-- END Card Header -->

    <!-- Card Body -->
    <div class="px-5 pb-5 w-full text-2xl leading-8 font-semibold flex gap-2 items-center justify-center">
        <div>
            {{ $icon }}
        </div>
        <div>
            <p>{{ $number }}</p>
        </div>
    </div>
    <!-- END Card Body -->
</div>
