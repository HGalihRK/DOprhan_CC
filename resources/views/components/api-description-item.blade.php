<tr class="odd:bg-white even:bg-gray-100">
    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
        @if ($parameter == 'api_key')
            GET/HEAD
        @else
            GET
        @endif
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $parameter }}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $wajib }}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $tipe }}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">{{ $keterangan }}</td>
</tr>
