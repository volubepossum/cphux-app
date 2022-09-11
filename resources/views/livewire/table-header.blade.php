<thead class="flex w-full">
    <tr class="flex mb-2 w-full max-h-20 overflow-y-auto">
        @foreach ($headers as $header)
            <th id="{{$loop->index}}" class="col-span-1 border-2 border-gray-900" style="width: {{100/sizeof($headers)}}%">{{ $header }}</th>
        @endforeach
    </tr>
</thead>
