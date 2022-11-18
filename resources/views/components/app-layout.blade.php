<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.meta-head')

    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Laravel Blog | {{ $title ?? 'by EliGolam' }}</title>
</head>
<body>
    <x-app-header :titleHeading=" $titleHeading ?? 'Laravel personal Blog' " />

    <main>
        {{ $slot }}
    </main>
</body>
</html>
