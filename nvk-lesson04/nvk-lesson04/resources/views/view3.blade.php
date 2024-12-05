<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>#Loops: Cấu trúc lặp [Foreach, Forelse, While,...]</h1>
    <hr>
    @for ($i = 0; $i < 5; $i++)
        <p>The current value is {{ $i }}</p>
    @endfor
    <hr>
    @php
        $name = ['Alice', 'Bob', 'Charlie'];
    @endphp
    @foreach ($name as $item)
        <p>This is item: <b>{{ $item }}</b></p>
    @endforeach
    <hr>
    @php
        $users = ['John', 'Jane'];
    @endphp
    @forelse ($users as $user)
        <li>{{ $user }}</li>
    @empty
        <p>No user!</p>
    @endforelse
    @php
        $i = 0;
    @endphp
    @while ($i < 5)
        <p>Current @$i = {{ $i }}</p>
        @php $i++; @endphp
    @endwhile
    <hr>
    @php
        $array = [1, 2, 3, 4, 5];
    @endphp
    @foreach ($array as $item)
        @if ($loop->first)
            @continue
        @endif
        @if ($loop->last)
            <p>This is the last iteration.</p>
        @endif
        <li>{{ $item }}</li>
    @endforeach
</body>
</html>
