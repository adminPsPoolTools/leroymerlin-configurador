@extends('layouts.app')

@section('content')
    <main class="home">
        <x-header title="Configurador cubiertas LEROY"
            description="PS POOL quiere ayudarte con distintas herramientas que hemos desarrollado y recopilado, para facilitarte la puesta a punto de tu piscina."
            background="background-image: url({{ asset('storage/img/home/home.jpg') }})" :user="$user" />

        @include('configuradorpscover.index')
    </main>

    <script>
        function submitForm(index) {
            document.getElementById('form_' + index).submit();
        }
    </script>
@endsection
