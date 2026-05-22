@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="pt-32 pb-20 bg-white">

    <div class="max-w-5xl mx-auto px-8 text-center">

        <p class="text-blue-800 font-bold uppercase tracking-[4px] text-sm">
            Community Impact
        </p>

        <h1 class="mt-6 text-4xl md:text-6xl font-black text-slate-900 uppercase leading-tight">
            Results That Matter<br>
            For The People
        </h1>

        <p class="mt-8 text-lg text-gray-600 leading-8">
            A record of community engagements, interventions, and ongoing initiatives
            across Ibadan North.
        </p>

    </div>

</section>

<section class="py-20 bg-slate-50">

    <div class="max-w-6xl mx-auto px-8">

        <div class="grid md:grid-cols-4 gap-6 text-center">

            <div class="bg-white p-8 rounded-xl border">
                <h3 class="text-4xl font-black text-blue-900">15+</h3>
                <p class="text-gray-600 mt-2">Communities Engaged</p>
            </div>

            <div class="bg-white p-8 rounded-xl border">
                <h3 class="text-4xl font-black text-blue-900">10+</h3>
                <p class="text-gray-600 mt-2">Town Hall Meetings</p>
            </div>

            <div class="bg-white p-8 rounded-xl border">
                <h3 class="text-4xl font-black text-blue-900">500+</h3>
                <p class="text-gray-600 mt-2">Citizens Reached</p>
            </div>

            <div class="bg-white p-8 rounded-xl border">
                <h3 class="text-4xl font-black text-blue-900">8+</h3>
                <p class="text-gray-600 mt-2">Youth Programs</p>
            </div>

        </div>

    </div>

</section>

<section class="py-28 bg-white">

    <div class="max-w-6xl mx-auto px-8">

        <h2 class="text-center text-4xl md:text-5xl font-black text-slate-900">
            Key Impact Stories
        </h2>

        <p class="text-center text-gray-500 mt-5 max-w-2xl mx-auto">
            Real engagements and interventions from the field.
        </p>

        <div class="grid md:grid-cols-2 gap-10 mt-16">

            @foreach([
                [
                    'title' => 'Market Traders Engagement',
                    'desc' => 'Engagement with traders at Bodija Market revealed key challenges around rising costs, infrastructure gaps, and security concerns affecting daily operations.'
                ],
                [
                    'title' => 'Youth Empowerment Dialogue',
                    'desc' => 'Interactive sessions with young people highlighted urgent demand for skills training, job creation, and entrepreneurship support systems.'
                ],
                [
                    'title' => 'Community Infrastructure Assessment',
                    'desc' => 'Field visits across selected wards identified critical infrastructure needs including road rehabilitation and drainage improvement.'
                ],
                [
                    'title' => 'Stakeholder Consultations',
                    'desc' => 'Meetings with community leaders and associations provided structured feedback for policy direction and governance priorities.'
                ]
            ] as $item)

            <div class="border rounded-2xl p-8 hover:shadow-lg transition">

                <h3 class="text-xl font-bold text-slate-900">
                    {{ $item['title'] }}
                </h3>

                <p class="mt-4 text-gray-600 leading-8">
                    {{ $item['desc'] }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section class="py-28 bg-slate-900 text-white">

    <div class="max-w-6xl mx-auto px-8">

        <h2 class="text-center text-4xl md:text-5xl font-black">
            Areas of Impact
        </h2>

        <div class="grid md:grid-cols-3 gap-8 mt-16">

            <div class="bg-slate-800 p-8 rounded-2xl">
                <h3 class="text-xl font-bold text-blue-300">Education</h3>
                <p class="mt-4 text-gray-300 leading-7">
                    Advocacy for improved learning environments and youth academic support.
                </p>
            </div>

            <div class="bg-slate-800 p-8 rounded-2xl">
                <h3 class="text-xl font-bold text-blue-300">Youth Development</h3>
                <p class="mt-4 text-gray-300 leading-7">
                    Skills acquisition programs and entrepreneurship engagement initiatives.
                </p>
            </div>

            <div class="bg-slate-800 p-8 rounded-2xl">
                <h3 class="text-xl font-bold text-blue-300">Community Welfare</h3>
                <p class="mt-4 text-gray-300 leading-7">
                    Continuous engagement with local communities for improved living conditions.
                </p>
            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-white text-center">

    <h2 class="text-4xl font-black text-slate-900">
        Be Part of the Impact
    </h2>

    <p class="mt-6 text-gray-600 max-w-2xl mx-auto">
        Join the movement driving real change across Ibadan North.
    </p>

    <div class="mt-10 flex justify-center gap-4">

        <a href="/volunteer"
           class="bg-blue-900 text-white px-6 py-3 font-bold uppercase hover:bg-blue-800 transition">
            Get Involved
        </a>

        <a href="/contact"
           class="border border-slate-300 px-6 py-3 font-bold uppercase hover:bg-slate-100 transition">
            Contact Team
        </a>

    </div>

</section>

@endsection