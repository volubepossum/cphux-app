<tr class="flex w-full border-b-2 border-b-gray-900">
    @foreach ($row as $data)
        <td id="{{$loop->index}}" class="max-h-20 overflow-y-auto flex text-center" style="width: {{100/sizeof($row)}}%">{{ $data }}</td>
    @endforeach
</tr>
