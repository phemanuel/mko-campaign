@extends('layouts.app')

@section('content')

<!-- MANIFESTO HERO -->
<section class="pt-32 pb-20 bg-white">

    <div class="max-w-5xl mx-auto px-8 text-center">

        <p class="text-blue-800 font-bold uppercase tracking-[4px] text-sm">
            Campaign Manifesto
        </p>

        <h1 class="mt-6 text-4xl md:text-6xl font-black text-slate-900 leading-tight uppercase">
            A New Vision<br>
            For Ibadan North
        </h1>

        <p class="mt-8 text-lg text-gray-600 leading-9">
            This manifesto outlines our commitment to transparent leadership,
            inclusive governance, and sustainable development driven by the people.
        </p>

    </div>

</section>

<section class="py-24 bg-slate-50">

    <div class="max-w-6xl mx-auto px-8">

        <h2 class="text-center text-4xl font-black text-slate-900">
            Core Principles
        </h2>

        <div class="grid md:grid-cols-3 gap-8 mt-16">

            @foreach([
                ['title' => 'People-Centered Governance', 'desc' => 'Every decision begins and ends with the welfare of the people.'],

                ['title' => 'Transparency', 'desc' => 'Open leadership with clear accountability and measurable outcomes.'],

                ['title' => 'Inclusive Development', 'desc' => 'No community or demographic will be left behind in policy execution.']
            ] as $item)

            <div class="p-8 bg-white border rounded-xl hover:shadow-lg transition">

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

<section class="py-28 bg-slate-900 text-white">

    <div class="max-w-7xl mx-auto px-8">

        <h2 class="text-center text-4xl md:text-6xl font-black">
            Policy Pillars
        </h2>

        <p class="text-center text-gray-300 mt-6 max-w-2xl mx-auto">
            Our governance agenda is built on practical solutions that address real challenges.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-20">

            @foreach([
                ['title' => 'Education Reform', 'desc' => 'Improve school infrastructure, teacher welfare, and access to quality education.'],

                ['title' => 'Healthcare Strengthening', 'desc' => 'Upgrade primary healthcare centers and ensure affordable medical services.'],

                ['title' => 'Youth Empowerment', 'desc' => 'Skills acquisition, entrepreneurship support, and job creation initiatives.'],

                ['title' => 'Infrastructure Development', 'desc' => 'Better roads, drainage systems, electricity, and public utilities.'],

                ['title' => 'Economic Growth', 'desc' => 'Support for SMEs and local economic development programs.'],

                ['title' => 'Security & Welfare', 'desc' => 'Community safety initiatives and social welfare improvements.']
            ] as $item)

            <div class="bg-slate-800 p-8 rounded-2xl hover:scale-[1.03] transition">

                <h3 class="text-xl font-bold text-blue-300">
                    {{ $item['title'] }}
                </h3>

                <p class="mt-4 text-gray-300 leading-7">
                    {{ $item['desc'] }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- GOVERNANCE APPROACH -->
<section class="py-28 bg-slate-50">

    <div class="max-w-6xl mx-auto px-8">

        <!-- HEADER -->
        <div class="text-center max-w-3xl mx-auto">

            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight">
                Governance Philosophy
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-8">
                A people-driven governance model built on participation,
                transparency, and measurable impact.
            </p>

        </div>

        <!-- CORE PRINCIPLES GRID -->
        <div class="mt-16 grid md:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="bg-white rounded-2xl p-8 border hover:shadow-lg transition">

                <div class="w-12 h-12 bg-blue-900 text-white flex items-center justify-center rounded-xl font-bold">
                    01
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    People Participation
                </h3>

                <p class="mt-4 text-slate-600 leading-7">
                    Governance begins with listening. Policies are shaped through direct engagement
                    with communities across Ibadan North.
                </p>

            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-2xl p-8 border hover:shadow-lg transition">

                <div class="w-12 h-12 bg-blue-900 text-white flex items-center justify-center rounded-xl font-bold">
                    02
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Data-Driven Decisions
                </h3>

                <p class="mt-4 text-slate-600 leading-7">
                    Policies are guided by real data, measurable outcomes, and structured evaluation —
                    not assumptions.
                </p>

            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-2xl p-8 border hover:shadow-lg transition">

                <div class="w-12 h-12 bg-blue-900 text-white flex items-center justify-center rounded-xl font-bold">
                    03
                </div>

                <h3 class="mt-6 text-xl font-bold text-slate-900">
                    Accountability First
                </h3>

                <p class="mt-4 text-slate-600 leading-7">
                    Every action in office is tied to clear outcomes, transparency,
                    and public service delivery standards.
                </p>

            </div>

        </div>

        <!-- BOTTOM STATEMENT -->
        <div class="mt-20 text-center max-w-3xl mx-auto">

            <div class="inline-block bg-blue-900 text-white px-5 py-2 text-sm font-bold uppercase tracking-[3px]">
                Governance Commitment
            </div>

            <p class="mt-8 text-slate-600 leading-8 text-lg">
                This philosophy ensures that leadership remains responsive,
                accountable, and continuously aligned with the needs of the people.
            </p>

        </div>

    </div>

</section>

<section class="py-24 bg-slate-50 text-center">

    <h2 class="text-4xl font-black text-slate-900">
        Be Part of the Movement
    </h2>

    <p class="mt-6 text-gray-600 max-w-2xl mx-auto">
        Join us in building a more accountable and people-driven Ibadan North.
    </p>

    <div class="mt-10 flex justify-center gap-4">

        <a href="/volunteer"
           class="bg-blue-900 text-white px-6 py-3 font-bold uppercase hover:bg-blue-800 transition">
            Volunteer
        </a>

        <a href="/contact"
           class="border border-slate-300 px-6 py-3 font-bold uppercase hover:bg-white transition">
            Contact Team
        </a>

    </div>

</section>

@endsection