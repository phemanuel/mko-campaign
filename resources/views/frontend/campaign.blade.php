@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="pt-32 pb-20 bg-white">

    <div class="max-w-6xl mx-auto px-8 text-center">

        <p class="text-blue-800 font-bold uppercase tracking-[4px] text-sm">
            Campaign Trail
        </p>

        <h1 class="mt-6 text-4xl md:text-6xl font-black text-slate-900 uppercase leading-tight">
            On The Ground<br>
            With The People
        </h1>

        <p class="mt-8 text-lg text-gray-600 max-w-2xl mx-auto leading-8">
            A continuous engagement with communities across Ibadan North —
            listening, interacting, and building a people-driven movement.
        </p>

    </div>

</section>

<section class="py-20 bg-slate-50">

    <div class="max-w-5xl mx-auto px-8 text-center">

        <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-5 py-2 rounded-full font-bold text-sm">
            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
            ACTIVE CAMPAIGN IN PROGRESS
        </div>

        <div class="mt-10 grid md:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded-xl border">
                <h3 class="text-3xl font-black text-blue-900">12+</h3>
                <p class="text-gray-600 mt-2">Community Visits</p>
            </div>

            <div class="bg-white p-6 rounded-xl border">
                <h3 class="text-3xl font-black text-blue-900">8+</h3>
                <p class="text-gray-600 mt-2">Town Hall Meetings</p>
            </div>

            <div class="bg-white p-6 rounded-xl border">
                <h3 class="text-3xl font-black text-blue-900">5+</h3>
                <p class="text-gray-600 mt-2">Youth Engagements</p>
            </div>

        </div>

    </div>

</section>

<section class="py-28 bg-white">

    <div class="max-w-6xl mx-auto px-8">

        <h2 class="text-center text-4xl md:text-5xl font-black text-slate-900">
            Campaign Activities
        </h2>

        <div class="grid md:grid-cols-2 gap-10 mt-16">

            @foreach([
                [
                    'title' => 'Community Engagement',
                    'desc' => 'Direct visits to communities across Ibadan North to listen to concerns and gather feedback.'
                ],
                [
                    'title' => 'Town Hall Meetings',
                    'desc' => 'Open dialogue sessions with residents, youth groups, and stakeholders.'
                ],
                [
                    'title' => 'Youth Outreach',
                    'desc' => 'Programs focused on empowerment, skills development, and entrepreneurship awareness.'
                ],
                [
                    'title' => 'Stakeholder Consultations',
                    'desc' => 'Engagement with traditional leaders, market unions, and civic groups.'
                ]
            ] as $item)

            <div class="border rounded-2xl p-8 hover:shadow-lg transition">

                <h3 class="text-xl font-bold text-slate-900">
                    {{ $item['title'] }}
                </h3>

                <p class="mt-4 text-gray-600 leading-7">
                    {{ $item['desc'] }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section class="py-28 bg-slate-50">

    <div class="max-w-6xl mx-auto px-8">

        <h2 class="text-center text-4xl font-black text-slate-900">
            Campaign Moments
        </h2>

        <p class="text-center text-gray-500 mt-4">
            Highlights from ongoing engagement activities
        </p>

        <div class="grid md:grid-cols-3 gap-6 mt-16">

            @foreach([1,2,3,4,5,6] as $img)

            <div class="rounded-2xl overflow-hidden shadow-md hover:scale-[1.02] transition">

                <img src="{{ asset('home/mko-pic.png') }}"
                     class="w-full h-64 object-cover object-top">

            </div>

            @endforeach

        </div>

    </div>

</section>

<section class="py-24 bg-slate-900 text-white text-center">

    <h2 class="text-4xl font-black">
        Join the Movement
    </h2>

    <p class="mt-6 text-gray-300 max-w-2xl mx-auto">
        Be part of a people-driven campaign shaping the future of Ibadan North.
    </p>

    <div class="mt-10 flex justify-center gap-4">

        <a href="/volunteer"
           class="bg-blue-900 px-6 py-3 font-bold uppercase hover:bg-blue-800 transition">
            Volunteer
        </a>

        <a href="/contact"
           class="border border-white px-6 py-3 font-bold uppercase hover:bg-white hover:text-black transition">
            Contact Team
        </a>

    </div>

</section>

@endsection