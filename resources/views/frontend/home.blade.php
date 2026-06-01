@extends('layouts.app')

@section('content')


<!-- HERO -->

<!-- HERO -->
<section class="relative reveal min-h-screen flex items-center overflow-hidden pt-24">

    <!-- Background Image -->
    <div class="absolute inset-0 -z-10">

        <img
        src="{{ asset('home/mko-new.png') }}"
        class="w-full h-full object-cover object-[65%_50%] scale-105 animate-slowZoom"
        />

        <!-- LIGHT OVERLAY (BRIGHTER + CLEANER) -->
<div class="absolute inset-0 bg-black/40"></div>

<!-- SOFT LEFT FOCUS GRADIENT -->
<div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/30 to-transparent"></div>

    </div>


    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-8 w-full">

    <div class="max-w-3xl">

        <!-- Location Tag with Logo beside it -->
        <div class="flex items-center gap-3">

            <!-- Logo -->
            <img
                src="{{ asset('home/ypp.png') }}"
                alt="Oyo State Logo"
                class="w-20 h-20 object-contain"
            >

            <!-- Badge -->
            <div class="inline-block bg-blue-900/80 text-white px-4 py-2 text-xs font-bold tracking-[4px] uppercase rounded-full">
                Oyo State • Governorship Candidate
            </div>

        </div>

        <!-- NAME -->
        <h1 class="mt-6 text-white text-3xl md:text-5xl font-extrabold leading-tight uppercase tracking-wide drop-shadow-md">

            Kehinde

            <span class="text-blue-300 font-black">
                Ogunniyi
            </span>

        </h1>

        <!-- SLOGAN -->
        <div class="mt-4">

            <span class="text-white text-lg md:text-2xl font-bold tracking-[4px] uppercase">

                EXPY 2027 ... The Future is Now

            </span>

        </div>

        <!-- Divider -->
        <div class="w-28 h-1 bg-blue-500 mt-6"></div>

        <!-- MESSAGE -->
        <p class="mt-6 text-gray-200 text-lg leading-8 max-w-xl">
            A movement built on transparency, youth empowerment,
            infrastructure development, and real representation for Oyo State.
        </p>

        <!-- CTA -->
        <div class="mt-10 flex flex-wrap gap-4">

            <a href="/manifesto"
               class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-3 font-bold uppercase tracking-wide shadow-lg">
                Read Manifesto
            </a>

            <a href="/about"
               class="border border-white text-white px-6 py-3 font-bold uppercase tracking-wide hover:bg-white hover:text-black transition">
                Meet The Candidate
            </a>

        </div>

    </div>

</div>



</section>

<!-- CANDIDATE DECLARATION -->
<section class="py-10 reveal bg-white">

    <!-- Optional better font (if not already global) -->
    <style>
        .campaign-font {
            font-family: ui-serif, Georgia, "Times New Roman", serif;
        }
    </style>

    <div class="max-w-6xl mx-auto px-8 campaign-font">

        <!-- HEADER -->
        <!-- <p class="text-blue-900 font-bold uppercase tracking-[4px] text-sm text-center">
            Candidate Declaration
        </p> -->

        <h2 class="mt-4 text-center text-3xl md:text-4xl font-black text-slate-900">
            Declaration for
            <span class="text-blue-900">Oyo State 2027 Governorship</span>
        </h2>

        <!-- CONTENT WRAPPER -->
        <div class="mt-14 relative">
            
            <!-- IMAGE -->
            <div class="float-left mr-10 mb-6 w-[340px] md:w-[380px]">

                <div class="relative">

                    <!-- IMAGE -->
                    <img
                        src="{{ asset('home/mko-pic-2.png') }}"
                        class="w-full h-full rounded-2xl shadow-xl object-cover object-top"
                        alt="Candidate Image"
                    >

                    <!-- PARTY LOGO BADGE -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm p-3 rounded-full shadow-md">

                        <img
                            src="{{ asset('home/ypp.png') }}"
                            class="w-14 h-14 object-contain"
                            alt="Party Logo"
                        >

                    </div>

                    <!-- CAPTION OVERLAY -->
                    <div class="absolute bottom-0 left-0 right-0 bg-black/60 backdrop-blur-sm px-4 py-3 rounded-b-2xl">

                        <p class="text-white text-sm font-semibold tracking-wide text-center">
                            EXPY IS READY TO WEAR THE CAP
                        </p>

                    </div>

                </div>

            </div>

            </div>

            <!-- TEXT -->
            <div class="text-gray-700 text-[17px] leading-8">

                <p>
                    Today, 20th May 2026, with a deep sense of responsibility and commitment to the people,
                    I, <span class="font-bold text-slate-900">Kehinde Ogunniyi [EXPY]</span>,
                    formally declare my intention to run for the Office of Governor of Oyo State
                    in the 2027 elections.
                </p>

                <p class="mt-4">
                    Oyo State stands at a defining moment in its history. The challenges before us are real,
                    but so are the opportunities to build a stronger, more inclusive, and economically vibrant state.
                </p>

                <p class="mt-4">
                    This decision is driven by a clear vision to deliver purposeful leadership,
                    empower our people, and ensure balanced development across all zones —
                    from Oke-Ogun to Ibadan and beyond.
                </p>               

                <!-- INVITATION -->
                <div class="mt-8 bg-slate-50 border rounded-2xl p-6 clear-both">

                 <p class="mt-4">
                    This is not just about politics; it is about service, progress,
                    and the future we owe the next generation.
                </p>

                    <p>
                        I invite every son and daughter of Oyo State to join me on this journey
                        to build a new Oyo that works for all.
                    </p>

                    <p class="mt-3 font-bold text-blue-900">
                        Together, we can. Together, we will.
                    </p>


                <!-- EXPY MEANING -->
                    <div class="mt-8 clear-both">

                        <!-- <p class="font-bold text-slate-900">EXPY Meaning:</p> -->

                        <div class="mt-3 grid grid-cols-1 gap-2 text-gray-600 text-sm">

                            <p><span class="font-bold text-blue-900">E</span> - Exemplary</p>
                            <p><span class="font-bold text-blue-900">X</span> - Xenia</p>
                            <p><span class="font-bold text-blue-900">P</span> - Purposeful</p>
                            <p><span class="font-bold text-blue-900">Y</span> - Young</p>

                        </div>

                    </div>
                </div>

                

                <!-- TAGS -->
                <div class="mt-8 flex flex-wrap gap-3 clear-both">

                    <span class="px-4 py-2 bg-blue-900 text-white text-xs font-bold rounded-full tracking-[2px]">
                        EXPY 2027
                    </span>

                    <span class="px-4 py-2 border text-slate-700 text-xs font-bold rounded-full tracking-[2px]">
                        NEW OYO
                    </span>

                    <span class="px-4 py-2 border text-slate-700 text-xs font-bold rounded-full tracking-[2px]">
                        THE FUTURE IS NOW
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- PRIORITIES -->

<section
class="bg-slate-900 reveal
text-white
py-20">


<div
class="max-w-7xl
mx-auto">


<h2
class="text-center
text-6xl
font-black">

Campaign Priorities

</h2>



<div
class="grid
md:grid-cols-3
gap-8
mt-20">


@foreach([
    'Education',
    'Healthcare',
    'Infrastructure',
    'Employment',
    'Security',
    'Youth Empowerment'
] as $item)

<div
class="bg-slate-800
p-10
rounded-3xl
hover:scale-105
transition">

    <h3
    class="text-3xl
    font-bold">

        {{ $item }}

    </h3>


    <p
    class="mt-6
    text-gray-300">

        Delivering meaningful policies
        that improve lives.

    </p>

</div>

@endforeach


</div>


</div>

</section>

<!-- VISION -->
<section class="py-25 reveal bg-white">

    <div class="max-w-6xl mx-auto px-8">

        <!-- HEADER -->
        <div class="text-center">            

            <h2 class="mt-6 text-4xl md:text-5xl font-black text-slate-900 leading-tight">
                Leadership That Listens,<br>
                Acts, and Delivers
            </h2>

        </div>

        <!-- MAIN MESSAGE -->
        <div class="mt-14 max-w-4xl mx-auto text-center">

            <p class="text-lg md:text-2xl text-slate-700 leading-10 font-medium">

                Oyo State deserves a future powered by
                <span class="text-blue-900 font-bold">opportunity</span>,
                <span class="text-blue-900 font-bold">innovation</span>,
                <span class="text-blue-900 font-bold">accountability</span>,
                and
                <span class="text-blue-900 font-bold">inclusive growth</span>.

            </p>

            <p class="mt-8 text-gray-600 text-lg leading-8">

                The <span class="font-bold text-slate-900">EXPY Movement</span>
                is committed to restoring development across every community —
                empowering young people, strengthening businesses, modernizing governance,
                and building a prosperous Oyo State for generations to come.

            </p>

        </div>

        <!-- PILLARS -->
        <div class="mt-16 grid md:grid-cols-3 gap-8">

            <div class="p-8 border rounded-2xl hover:shadow-md transition">

                <h3 class="font-bold text-lg text-slate-900">
                    People First Governance
                </h3>

                <p class="text-gray-600 mt-3 text-sm leading-6">
                    Decisions driven by community needs, not personal interest.
                </p>

            </div>

            <div class="p-8 border rounded-2xl hover:shadow-md transition">

                <h3 class="font-bold text-lg text-slate-900">
                    Accountability & Transparency
                </h3>

                <p class="text-gray-600 mt-3 text-sm leading-6">
                    Clear communication and measurable progress in public service delivery.
                </p>

            </div>

            <div class="p-8 border rounded-2xl hover:shadow-md transition">

                <h3 class="font-bold text-lg text-slate-900">
                    Sustainable Development
                </h3>

                <p class="text-gray-600 mt-3 text-sm leading-6">
                    Long-term solutions for education, economy, infrastructure, and growth.
                </p>

            </div>

        </div>

        <!-- CTA PILLS -->
        <div class="mt-14 flex flex-wrap justify-center gap-4">

            <span class="px-6 py-3 bg-blue-900 text-white rounded-full font-bold uppercase tracking-[2px] text-sm">
                Join The Movement
            </span>

            <span class="px-6 py-3 border border-slate-300 rounded-full font-bold uppercase tracking-[2px] text-slate-700">
                Restore The Flow
            </span>

            <span class="px-6 py-3 border border-slate-300 rounded-full font-bold uppercase tracking-[2px] text-slate-700">
                Build The Future
            </span>

        </div>

    </div>

</section>


<!-- TIMELINE -->
<!-- LIVE CAMPAIGN TRACKER -->
<section class="bg-slate-900 text-white reveal py-24 mt-10">

    <div class="max-w-6xl mx-auto px-8">

        <!-- HEADER -->
        <div class="text-center">

            <h2 class="text-4xl md:text-6xl font-black text-white">
                Campaign Tracker
            </h2>

            <p class="text-gray-300 mt-5 max-w-2xl mx-auto">
                Real-time progress of our movement toward the 2027 election.
            </p>

            <!-- LIVE STATUS -->
            <div class="mt-6 inline-flex items-center gap-2 bg-green-500/10 text-green-300 px-4 py-2 rounded-full text-sm font-bold border border-green-500/20">

                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                LIVE CAMPAIGN ACTIVE

            </div>

        </div>

        <!-- Progress bar -->
        <div class="mt-16 w-full bg-white/10 h-2 rounded-full overflow-hidden">
            <div class="h-full bg-blue-500 w-2/3"></div>
        </div>

        <!-- Timeline -->
        <div class="mt-20 relative border-l-2 border-white/10 pl-10 space-y-14">

            <!-- ACTIVE ITEM -->
            <div class="relative">

                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-blue-500 rounded-full">
                    <span class="absolute inset-0 bg-blue-500 rounded-full animate-ping opacity-40"></span>
                </div>

                <p class="text-green-300 font-bold text-sm tracking-[3px] uppercase">
                    Now Active • Phase Two
                </p>

                <h3 class="text-2xl font-bold text-white mt-2">
                    Community Engagement
                </h3>

                <p class="text-gray-300 mt-2 leading-7 max-w-2xl">
                    Direct engagement with citizens across Ibadan North —
                    listening, documenting concerns, and building the agenda.
                </p>

                <span class="inline-block mt-4 bg-green-500/10 text-green-300 text-xs font-bold px-3 py-1 rounded-full border border-green-500/20">
                    In Progress
                </span>

            </div>

            <!-- COMPLETED -->
            <div class="relative">

                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-blue-500 rounded-full"></div>

                <p class="text-blue-300 font-bold text-sm tracking-[3px] uppercase">
                    Completed • Phase One
                </p>

                <h3 class="text-2xl font-bold text-white mt-2">
                    Campaign Launch
                </h3>

                <p class="text-gray-300 mt-2 leading-7 max-w-2xl">
                    Official declaration of intent and commencement of a people-driven movement.
                </p>

                <span class="inline-block mt-4 bg-white/10 text-gray-300 text-xs font-bold px-3 py-1 rounded-full border border-white/10">
                    Completed
                </span>

            </div>

            <!-- UPCOMING -->
            <div class="relative opacity-80">

                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-gray-400 rounded-full"></div>

                <p class="text-gray-400 font-bold text-sm tracking-[3px] uppercase">
                    Upcoming • Phase Three
                </p>

                <h3 class="text-2xl font-bold text-white mt-2">
                    Town Hall Meetings
                </h3>

                <p class="text-gray-300 mt-2 leading-7 max-w-2xl">
                    Open discussions with communities to refine and validate policy direction.
                </p>

                <span class="inline-block mt-4 bg-white/10 text-gray-400 text-xs font-bold px-3 py-1 rounded-full border border-white/10">
                    Scheduled
                </span>

            </div>

            <!-- FINAL -->
            <div class="relative opacity-70">

                <div class="absolute -left-[18px] top-1 w-4 h-4 bg-gray-500 rounded-full"></div>

                <p class="text-gray-500 font-bold text-sm tracking-[3px] uppercase">
                    Future • Election Day
                </p>

                <h3 class="text-2xl font-bold text-white mt-2">
                    Election Day
                </h3>

                <p class="text-gray-300 mt-2 leading-7 max-w-2xl">
                    The final step — a people-powered decision at the polls.
                </p>

                <span class="inline-block mt-4 bg-white/10 text-gray-500 text-xs font-bold px-3 py-1 rounded-full border border-white/10">
                    Pending
                </span>

            </div>

        </div>

    </div>

</section>


<!-- TRUST BAR -->
<section class="bg-white reveal border-y border-slate-200">

    <div class="max-w-7xl mx-auto px-8">

        <div class="grid grid-cols-2 md:grid-cols-4 text-center divide-x divide-slate-100">

            <!-- ITEM 1 -->
            <div class="py-12">

                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight">
                    20+
                </h2>

                <p class="mt-3 text-sm font-semibold uppercase tracking-[2px] text-slate-500">
                    Community Programs
                </p>

            </div>

            <!-- ITEM 2 -->
            <div class="py-12">

                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight">
                    100+
                </h2>

                <p class="mt-3 text-sm font-semibold uppercase tracking-[2px] text-slate-500">
                    Campaign Events
                </p>

            </div>

            <!-- ITEM 3 -->
            <div class="py-12">

                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight">
                    50K+
                </h2>

                <p class="mt-3 text-sm font-semibold uppercase tracking-[2px] text-slate-500">
                    Citizens Reached
                </p>

            </div>

            <!-- ITEM 4 -->
            <div class="py-12">

                <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight">
                    10+
                </h2>

                <p class="mt-3 text-sm font-semibold uppercase tracking-[2px] text-slate-500">
                    Years of Service
                </p>

            </div>

        </div>

    </div>

</section>

<!-- FINAL CTA -->

<section
class="bg-blue-700 reveal
text-white
py-28">


<div
class="text-center">


<h2
class="text-6xl
font-black">

Join The Movement

</h2>



<p
class="mt-8
text-xl">

Together,
we can shape
a stronger future
for Ibadan North.

</p>



<a

href="#"

class="inline-block
mt-10
bg-white
text-black
px-10
py-5
rounded-full
font-bold">

Become A Volunteer

</a>


</div>

</section>

<!-- LIVE CAMPAIGN SOCIAL HUB -->
<div id="portraitPanel"
     class="portrait-panel fixed bottom-24 right-6 w-[360px] z-[9999] bg-white rounded-2xl shadow-2xl overflow-hidden">
    <!-- CLOSE BUTTON -->
    <button
        type="button"
        class="absolute top-3 right-3 text-slate-700 text-2xl font-bold z-10"
        id="closePanelBtn"
    >
        &times;
    </button> 

    <!-- CONTENT (SCROLLABLE AREA) -->
    <div class="p-5 max-h-[420px] overflow-y-auto">

        <h3 class="text-lg font-black text-slate-900">
            Live Campaign Updates
        </h3>

        <p class="text-sm text-gray-600 mt-2">
            Follow real-time updates, engagements, and movement activities.
        </p>        

        <!-- LIVE UPDATES -->
        <div class="mt-6 space-y-3">

            <!-- <p class="text-xs uppercase tracking-[3px] font-bold text-slate-500">
                Latest Updates
            </p> -->

            <div class="p-3 bg-slate-50 rounded-xl border">
                <p class="text-sm text-slate-700">
                    📍 Engaging with youth leaders in Ibadan North.
                </p>
                <span class="text-xs text-gray-400">Just now</span>
            </div>

            <div class="p-3 bg-slate-50 rounded-xl border">
                <p class="text-sm text-slate-700">
                    🗳 Community outreach across wards continues.
                </p>
                <span class="text-xs text-gray-400">2h ago</span>
            </div>

            <div class="p-3 bg-slate-50 rounded-xl border">
                <p class="text-sm text-slate-700">
                    📢 Strengthening grassroots engagement statewide.
                </p>
                <span class="text-xs text-gray-400">Yesterday</span>
            </div>

        </div>

        <!-- CTA -->
        <div class="mt-6 flex gap-2">

            <a href="https://instagram.com/expysuave"
               target="_blank"
               class="flex-1 bg-pink-600 hover:bg-pink-700 text-white text-center py-2 rounded-full text-sm font-bold">

                Follow

            </a>

            <a href="/events"
               class="flex-1 bg-slate-900 hover:bg-slate-800 text-white text-center py-2 rounded-full text-sm font-bold">

                Events

            </a>

        </div>

    </div>

</div>

<script>

window.addEventListener('DOMContentLoaded', function () {

    document
        .getElementById('portraitPanel')
        .classList
        .add('show');

});


document
.getElementById('closePanel')

.addEventListener('click', function () {

    document
    .getElementById('portraitPanel')

    .classList.remove('show');

});

</script>
@endsection