<tr>
    @foreach ($headers as $header)
        <td id="{{$loop->index}}">{{ $header }}</td>
    @endforeach
</tr>
