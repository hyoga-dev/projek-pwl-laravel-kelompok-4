@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">

<h1 class="text-4xl font-bold  mb-8">Artikel</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 self-center">

        @foreach($posts as $post)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">

            <img src="{{ $post['image'] }}" class="w-full h-48 object-cover">

            <div class="p-5">
                <p class="text-sm text-gray-500 mb-2">
                    {{ $post['date'] }}
                </p>

                <h2 class="text-xl font-semibold mb-2">
                    {{ $post['title'] }}
                </h2>

                <p class="text-gray-600 text-sm mb-4">
                    {{ $post['excerpt'] }}
                </p>

                <a href="#" class="text-blue-500 hover:underline text-sm font-medium">
                    Baca Selengkapnya →
                </a>
            </div>

        </div>
        @endforeach

    </div>
</div>
@endsection