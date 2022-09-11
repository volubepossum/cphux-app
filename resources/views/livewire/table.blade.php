<table class="w-11/12 mx-auto justify-self-center">
    @livewire('table-header', ['headers' => $headers])
    <tbody class="flex flex-col items-center justify-between overflow-y-auto" height="1074vh" >
        @foreach ($rows as $row)
            @livewire('table-row', ['row' => $row])
        @endforeach
    </tbody>
</table>
