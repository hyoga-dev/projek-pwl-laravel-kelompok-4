@extends('layouts.app')

@section('title', 'About')

@section('content')
<h1 class="text-4xl font-bold  mb-8">Tim Kami</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">

    @foreach ($members as $member)
        <div class="bg-white shadow-lg rounded-2xl p-6  hover:scale-105 transition">

            <img 
                src="{{ asset($member['foto']) }}" 
                alt="{{ $member['nama'] }}"
                class="w-24 h-24 mx-auto rounded-full object-cover mb-4"
            >

            <h2 class="text-xl font-semibold mt-7">
                {{ $member['nama'] }}
            </h2>

            <p class="text-gray-500 text-sm">
                NIM: {{ $member['nim'] }}
            </p>

            <p class="mt-2 text-gray-700 font-medium">
                {{ $member['peran'] }}
            </p>

        </div>
    @endforeach

</div>
@endsection