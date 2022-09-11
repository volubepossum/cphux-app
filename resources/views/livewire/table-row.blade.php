<tr>
    @foreach ($row as $data)
        <td id="{{$loop->index}}">{{ $data }}</td>
    @endforeach
</tr>
