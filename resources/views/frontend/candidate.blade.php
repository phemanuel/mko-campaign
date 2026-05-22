@extends('layouts.app')

@section('content')

<section class="py-28 bg-white">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-12 gap-16 items-center">

        <!-- IMAGE -->
        <div class="lg:col-span-5 relative">

            <div class="absolute -inset-6 bg-blue-500/10 blur-3xl rounded-[3rem]"></div>

            <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border">
                <img src="{{ asset('home/mko-pic-2.png') }}"
                     class="w-full h-[600px] object-cover object-top"
                     alt="">
            </div>

        </div>

        <!-- CONTENT -->
        <div class="lg:col-span-7">

            <h2 class="text-4xl font-bold text-slate-900">
                A Leader Rooted in People-Centered Development
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-9">
                Kehinde Ogunniyi is a visionary leader, entrepreneur, development strategist,
                and advocate for people-centered governance.
            </p>

            <div class="mt-8 space-y-6 text-slate-600 leading-8">

                <p>
                    His leadership vision is built on economic empowerment, transparent governance,
                    youth development, sustainable infrastructure, healthcare access, innovation,
                    and inclusive growth.
                </p>

                <p>
                    Through the EXPY Water-Flow Philosophy, development is designed to reach every citizen
                    and every community without exclusion.
                </p>

            </div>

            <div class="mt-10 grid sm:grid-cols-2 gap-5">

                <div class="p-5 rounded-xl border bg-slate-50">
                    <p class="text-sm text-slate-500">Focus Area</p>
                    <p class="font-semibold text-slate-900">Community Development</p>
                </div>

                <div class="p-5 rounded-xl border bg-slate-50">
                    <p class="text-sm text-slate-500">Constituency</p>
                    <p class="font-semibold text-slate-900">Ibadan North</p>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="py-24 bg-slate-50">

    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-slate-900">
            Core Leadership Principles
        </h2>

        <div class="mt-14 grid md:grid-cols-3 gap-6">

            @foreach([
                ['Economic empowerment', 'Building sustainable wealth across communities'],
                ['Transparent governance', 'Accountability and anti-corruption systems'],
                ['Youth development', 'Unlocking potential through skills & opportunity'],
                ['Infrastructure growth', 'Modern roads, energy, and urban development'],
                ['Healthcare access', 'Affordable and accessible health systems'],
                ['Innovation & technology', 'Digital transformation of governance']
            ] as [$title, $desc])

            <div class="p-6 rounded-2xl bg-white border shadow-sm hover:shadow-md transition">

                <h3 class="font-bold text-slate-900">
                    {{ $title }}
                </h3>

                <p class="mt-3 text-slate-600 leading-7">
                    {{ $desc }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section class="py-28 bg-slate-950 text-white">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold">
            The EXPY Philosophy
        </h2>

        <p class="mt-6 text-slate-300 leading-8">
            Development must circulate — not concentrate.
            Every region must benefit from growth equally.
        </p>

        <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 text-left">

            @foreach([
                ['E', 'Economic Empowerment', 'Jobs, agriculture, SMEs, investment'],
                ['X', 'Governance Excellence', 'Transparency, accountability, digital systems'],
                ['P', 'People-Centered Growth', 'Healthcare, education, welfare'],
                ['Y', 'Yield & Sustainability', 'Energy, housing, innovation']
            ] as [$key, $title, $desc])

            <div class="p-6 rounded-2xl bg-white/5 border border-white/10">

                <p class="text-blue-400 font-bold text-xl">
                    {{ $key }}
                </p>

                <h3 class="mt-2 font-semibold">
                    {{ $title }}
                </h3>

                <p class="mt-3 text-slate-300 text-sm leading-6">
                    {{ $desc }}
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- =========================
    VISION FOR OYO STATE (PREMIUM)
========================= -->
<section class="relative py-28 bg-white overflow-hidden">

    <!-- subtle background accent -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(59,130,246,0.08),transparent_60%)]"></div>

    <div class="relative max-w-6xl mx-auto px-6">

        <!-- header -->
        <div class="text-center max-w-3xl mx-auto">
            <p class="uppercase tracking-[0.3em] text-blue-600 text-sm font-semibold">
                Our Vision
            </p>

            <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-slate-900 leading-tight">
                A New Oyo State Where Opportunity Is Not a Privilege — But a Standard
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-8">
                We envision a state built on fairness, innovation, inclusion, and shared prosperity.
                A system where governance works for every citizen, not a few.
            </p>
        </div>

        <!-- divider -->
        <div class="my-16 flex justify-center">
            <div class="h-px w-24 bg-gradient-to-r from-transparent via-slate-300 to-transparent"></div>
        </div>

        <!-- vision pillars -->
        <div class="grid md:grid-cols-2 gap-6">

            @foreach([
                [
                    'title' => 'Inclusive Opportunity',
                    'desc' => 'Every young person, entrepreneur, and worker has equal access to growth and success.'
                ],
                [
                    'title' => 'Economic Transformation',
                    'desc' => 'A diversified economy powered by agriculture, industry, innovation, and SMEs.'
                ],
                [
                    'title' => 'Safe & Secure Communities',
                    'desc' => 'Security systems that protect lives, property, and enable productivity.'
                ],
                [
                    'title' => 'Transparent Governance',
                    'desc' => 'A government that is open, accountable, and driven by digital efficiency.'
                ],
                [
                    'title' => 'Connected Communities',
                    'desc' => 'No region left behind — rural and urban areas equally developed and empowered.'
                ],
                [
                    'title' => 'Shared Prosperity',
                    'desc' => 'Growth that benefits everyone — not concentrated in select locations or groups.'
                ]
            ] as $vision)

            <div class="group p-7 rounded-2xl border bg-slate-50 hover:bg-white hover:shadow-md transition duration-300">

                <div class="flex items-start gap-4">

                    <!-- accent line -->
                    <div class="w-1.5 h-12 bg-blue-600 rounded-full mt-1"></div>

                    <div>

                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-700 transition">
                            {{ $vision['title'] }}
                        </h3>

                        <p class="mt-2 text-slate-600 leading-7">
                            {{ $vision['desc'] }}
                        </p>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        <!-- closing statement -->
        <div class="mt-16 text-center">

            <p class="text-2xl font-semibold text-slate-900">
                The Future is Not a Promise. It is a Plan.
            </p>

            <p class="mt-4 text-slate-600">
                EXPY 2027 — Building a State That Works for Everyone
            </p>

        </div>

    </div>

</section>


<!-- =========================
    STRATEGIC PRIORITIES (ROADMAP STYLE)
========================= -->
<section class="relative py-28 bg-slate-50 overflow-hidden">

    <!-- background accent -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(59,130,246,0.06),transparent_60%)]"></div>

    <div class="relative max-w-7xl mx-auto px-6">

        <!-- header -->
        <div class="text-center max-w-3xl mx-auto">

            <p class="uppercase tracking-[0.3em] text-blue-600 text-sm font-semibold">
                Development Agenda
            </p>

            <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-slate-900 leading-tight">
                Strategic Priorities for a Transformed Oyo State
            </h2>

            <p class="mt-6 text-lg text-slate-600 leading-8">
                A structured roadmap focused on jobs, infrastructure, governance, and human development —
                designed to deliver measurable impact.
            </p>

        </div>

        <!-- divider -->
        <div class="my-16 flex justify-center">
            <div class="h-px w-24 bg-gradient-to-r from-transparent via-slate-300 to-transparent"></div>
        </div>

        <!-- roadmap grid -->
        <div class="space-y-10">

            @php
            $priorities = [
                [
                    'title' => 'Economic Transformation & Job Creation',
                    'desc' => 'A multi-sector strategy to create sustainable employment and wealth.',
                    'items' => ['Agriculture expansion', 'SME funding', 'Manufacturing growth', 'Tourism development', 'Creative economy']
                ],
                [
                    'title' => 'Digital Government Reform',
                    'desc' => 'A transparent, efficient, and technology-driven governance system.',
                    'items' => ['Paperless governance', 'Anti-corruption systems', 'E-services access', 'Real-time accountability']
                ],
                [
                    'title' => 'Youth Empowerment & Innovation',
                    'desc' => 'Equipping young people with skills, funding, and opportunities.',
                    'items' => ['Startup funding', 'Tech hubs', 'Skills training', 'Entrepreneurship programs']
                ],
                [
                    'title' => 'Healthcare Transformation',
                    'desc' => 'Modern, accessible, and affordable healthcare for all citizens.',
                    'items' => ['Telemedicine', 'Rural clinics', 'Emergency response system', 'Affordable healthcare schemes']
                ],
                [
                    'title' => 'Security & Community Safety',
                    'desc' => 'Technology-driven and community-supported security architecture.',
                    'items' => ['Smart surveillance', 'Community policing', 'Rapid response systems', 'Youth engagement']
                ],
                [
                    'title' => 'Infrastructure & Energy Development',
                    'desc' => 'Reliable power and modern infrastructure for growth.',
                    'items' => ['Solar mini-grids', 'Rural electrification', 'Road expansion', 'Independent power projects']
                ],
                [
                    'title' => 'Oke-Ogun Agro-Industrial Revolution',
                    'desc' => 'Unlocking regional economic potential through agriculture and industry.',
                    'items' => ['Agro-processing hubs', 'Export systems', 'Farm-to-market roads', 'Eco-tourism development']
                ]
            ];
            @endphp

            @foreach($priorities as $index => $priority)

            <!-- card -->
            <div class="group bg-white border rounded-2xl shadow-sm hover:shadow-lg transition overflow-hidden">

                <div class="p-8">

                    <!-- top row -->
                    <div class="flex items-start justify-between gap-6">

                        <div class="flex gap-4">

                            <!-- step number -->
                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold">
                                {{ $index + 1 }}
                            </div>

                            <div>

                                <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-700 transition">
                                    {{ $priority['title'] }}
                                </h3>

                                <p class="mt-2 text-slate-600 leading-7">
                                    {{ $priority['desc'] }}
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- items -->
                    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">

                        @foreach($priority['items'] as $item)

                        <div class="p-3 rounded-lg bg-slate-50 border text-slate-700 text-sm hover:bg-white transition">
                            {{ $item }}
                        </div>

                        @endforeach

                    </div>

                </div>

                <!-- bottom accent bar -->
                <div class="h-1 w-full bg-gradient-to-r from-blue-600 via-blue-400 to-transparent"></div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section class="py-28 bg-gradient-to-r from-blue-900 to-slate-900 text-white text-center">

    <div class="max-w-3xl mx-auto px-6">

        <h2 class="text-4xl font-bold">
            Join The EXPY Movement
        </h2>

        <p class="mt-6 text-slate-300 leading-8">
            No community ignored. No youth forgotten. No opportunity wasted.
        </p>

        <div class="mt-10 flex flex-wrap justify-center gap-4">

            <a class="px-6 py-3 bg-white text-slate-900 rounded-xl font-semibold">
                Volunteer
            </a>

            <a class="px-6 py-3 bg-blue-500 rounded-xl font-semibold">
                Become a Coordinator
            </a>

            <a class="px-6 py-3 bg-green-500 rounded-xl font-semibold">
                Donate
            </a>

        </div>

        <p class="mt-10 text-sm text-slate-400">
            EXPY 2027 — The Future is Now
        </p>

    </div>

</section>

<!-- LIVE CAMPAIGN TRACKER -->
<section class="py-32 bg-white">

    <div class="max-w-6xl mx-auto px-8">

        <!-- Header -->
        <div class="text-center">

            <h2 class="text-4xl md:text-6xl font-black text-slate-900">
                Campaign Tracker
            </h2>

            <p class="text-gray-500 mt-5 max-w-2xl mx-auto">
                Real-time progress of our movement toward the 2026 election.
            </p>

            <!-- LIVE STATUS -->
            <div class="mt-6 inline-flex items-center gap-2 bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm font-bold">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                LIVE CAMPAIGN ACTIVE
            </div>

        </div>

        <!-- Progress bar -->
        <div class="mt-16 w-full bg-gray-200 h-2 rounded-full overflow-hidden">
            <div class="h-full bg-blue-900 w-2/3 animate-pulse"></div>
        </div>

        <!-- Timeline -->
        <div class="mt-20 relative border-l-2 border-blue-900/20 pl-10 space-y-14">

            <!-- ACTIVE ITEM -->
            <div class="relative">

                <!-- pulse node -->
                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-blue-900 rounded-full">
                    <span class="absolute inset-0 bg-blue-900 rounded-full animate-ping opacity-50"></span>
                </div>

                <p class="text-green-600 font-bold text-sm tracking-[3px] uppercase">
                    NOW ACTIVE • Phase Two
                </p>

                <h3 class="text-2xl font-bold text-slate-900 mt-2">
                    Community Engagement
                </h3>

                <p class="text-gray-600 mt-2 leading-7 max-w-2xl">
                    Direct engagement with citizens across Ibadan North —
                    listening, documenting concerns, and building the agenda.
                </p>

                <!-- status tag -->
                <span class="inline-block mt-4 bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full">
                    In Progress
                </span>

            </div>

            <!-- COMPLETED -->
            <div class="relative">

                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-blue-900 rounded-full"></div>

                <p class="text-blue-900 font-bold text-sm tracking-[3px] uppercase">
                    Completed • Phase One
                </p>

                <h3 class="text-2xl font-bold text-slate-900 mt-2">
                    Campaign Launch
                </h3>

                <p class="text-gray-600 mt-2 leading-7 max-w-2xl">
                    Official declaration of intent and commencement of a people-driven movement.
                </p>

                <span class="inline-block mt-4 bg-gray-100 text-gray-600 text-xs font-bold px-3 py-1 rounded-full">
                    Completed
                </span>

            </div>

            <!-- UPCOMING -->
            <div class="relative opacity-70">

                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-gray-400 rounded-full"></div>

                <p class="text-gray-500 font-bold text-sm tracking-[3px] uppercase">
                    Upcoming • Phase Three
                </p>

                <h3 class="text-2xl font-bold text-slate-900 mt-2">
                    Town Hall Meetings
                </h3>

                <p class="text-gray-600 mt-2 leading-7 max-w-2xl">
                    Open discussions with communities to refine and validate policy direction.
                </p>

                <span class="inline-block mt-4 bg-gray-100 text-gray-500 text-xs font-bold px-3 py-1 rounded-full">
                    Scheduled
                </span>

            </div>

            <!-- FINAL -->
            <div class="relative opacity-60">

                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-gray-400 rounded-full"></div>

                <p class="text-gray-400 font-bold text-sm tracking-[3px] uppercase">
                    Future • Election Day
                </p>

                <h3 class="text-2xl font-bold text-slate-900 mt-2">
                    Election Day
                </h3>

                <p class="text-gray-600 mt-2 leading-7 max-w-2xl">
                    The final step — a people-powered decision at the polls.
                </p>

                <span class="inline-block mt-4 bg-gray-100 text-gray-500 text-xs font-bold px-3 py-1 rounded-full">
                    Pending
                </span>

            </div>

        </div>

    </div>

</section>


@endsection