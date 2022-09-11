<table>
    <thead>
        @livewire('table-header', ['headers' => $headers])
    </thead>
    <tbody>
        @foreach ($rows as $row)
            @livewire('table-row', ['row' => $row])
        @endforeach
    </tbody>
</table>
