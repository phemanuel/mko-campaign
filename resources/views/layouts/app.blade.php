<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('/home/favicon.png') }}">

    <title>

        @yield('title',
        'Kehinde Matthew Ogunniyi | For The People')

    </title>


    <!-- Tailwind -->

    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Alpine -->

    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js">

    </script>


    <!-- Google Fonts -->

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">


    <style>

        *{

            font-family:
            'Inter',
            sans-serif;

        }


        html{

            scroll-behavior:
            smooth;

        }


        .hero{

            background:
            linear-gradient(

            rgba(0,0,0,.65),

            rgba(0,0,0,.65)

            ),

            url(

'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=1600&q=80'

);

            background-size:
            cover;

            background-position:
            center;

        }

    </style>
    <style>
        @keyframes slowZoom {
    0% { transform: scale(1.05); }
    100% { transform: scale(1.15); }
}

.animate-slowZoom {
    animation: slowZoom 20s ease-in-out infinite alternate;
}
    </style>
    <style>
       .portrait-panel {

    position: fixed;

    right: -400px; /* Hidden initially */

    bottom: 30px;

    width: 320px;

    background: white;

    border-radius: 20px;

    overflow: hidden;

    box-shadow:
    0 20px 50px rgba(0,0,0,.15);

    z-index: 9999;

    opacity: 0;

    transition:
        right 1s ease-out,
        opacity 1s ease-out;

}


.portrait-panel.show {

    right: 30px;

    opacity: 1;

}


.portrait-img {

    width: 100%;

    display: block;
}


.content {

    padding: 20px;

}


.close-btn {

    position: absolute;

    top: 10px;

    right: 10px;

    border: none;

    background: transparent;

    font-size: 28px;

    cursor: pointer;

}


.action-btn {

    display: inline-block;

    margin-top: 15px;

    padding: 10px 20px;

    background: black;

    color: white;

    border-radius: 8px;

    text-decoration: none;
}
    </style>
<style>
    .reveal {
        opacity: 0;
        transform: translateY(15px);
        transition: opacity 0.8s ease, transform 0.8s ease;
        will-change: opacity, transform;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<style>
    .dock-items {
        opacity: 0;
        transform: translateY(20px);
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .dock.open .dock-items {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .dock-button {
        transition: transform 0.3s ease;
    }

    .dock.open .dock-button {
        transform: rotate(45deg);
    }
</style>
</head>


<body
class="bg-gray-50
text-gray-800">



<!-- NAVBAR -->

<nav
x-data="{ scrolled:false, open:false }"
@scroll.window="scrolled=(window.pageYOffset > 50)"

class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md"

class="fixed
top-0
left-0
right-0
z-50
transition
duration-300">


<div
class="max-w-7xl
mx-auto
px-8
py-5
flex
justify-between
items-center">


<a href="/" class="flex items-center gap-3">

    <!-- Campaign Icon / Logo -->
    <img
        src="{{ asset('home/logo-wide.png') }}"
        alt="Campaign Logo"
        class="w-16 h-16 object-contain"
    >

    <!-- Candidate Name + Slogan -->
    <div>

        <h1 class="text-xl lg:text-2xl font-black uppercase tracking-tight text-slate-900 leading-none">

            Kehinde
            <span class="text-blue-900">
               Ogunniyi 
            </span>            

        </h1>

        <p class="text-[10px] font-bold uppercase tracking-[2px] text-slate-500 mt-1">

            EXPY 2027 ... The Future is Now
        </p>

    </div>

</a>




<div class="hidden lg:flex gap-6 text-base font-semibold text-slate-700 whitespace-nowrap">

    <a href="/" class="hover:text-blue-700 transition">
        Home
    </a>

    <a href="/candidate" class="hover:text-blue-700 transition">
        Candidate
    </a>

    <a href="/manifesto" class="hover:text-blue-700 transition">
        Manifesto
    </a>

    <a href="/campaign" class="hover:text-blue-700 transition">
        Campaign
    </a>

    <a href="/impact" class="hover:text-blue-700 transition">
        Impact
    </a>

    <a href="/contact" class="hover:text-blue-700 transition">
        Contact
    </a>

</div>



<a href="#"
   class="
   bg-blue-900
   hover:bg-blue-800
   text-white
   text-sm
   font-bold
   px-6
   py-2.5
   rounded-md
   shadow-sm
   transition
   hover:scale-105
   ">
   Join Movement
</a>


</div>

</nav>




<!-- PAGE CONTENT -->

<div
class="pt-24">

@yield('content')


</div>




<!-- FOOTER -->

<footer

class="bg-slate-900
text-white
mt-20">

<div

class="max-w-7xl
mx-auto
grid
md:grid-cols-3
gap-10
px-8
py-16"

>


<div>

<h3

class="text-2xl
font-bold">

Kehinde Ogunniyi

</h3>


<p
class="mt-4
text-gray-300">

EXPY 2027 ... The Future is Now</br>

Committed to transformative leadership,
community development and a better
future for Ibadan North.

</p>

</div>




<div>

<h4
class="font-bold
mb-4">

Quick Links

</h4>


<ul
class="space-y-3">

<li>

<a href="/candidate">

Candidate

</a>

</li>


<li>

<a href="/manifesto">

Manifesto

</a>

</li>


<li>

<a href="/campaign">

Campaign

</a>

</li>


<li>

<a href="/impact">

Impact

</a>

</li>

</ul>

</div>



<div>

<h4
class="font-bold
mb-4">

Contact

</h4>


<p>

Email:

campaign@example.com

</p>


<p>

Phone:

+234 xxx xxx xxxx

</p>


<p>
Oyo State

</p>


</div>

</div>



<div

class="border-t
border-gray-700
text-center
py-6">

©

{{ date('Y') }}

Kehinde Ogunniyi.

All Rights Reserved.

</div>

</footer>

<!-- FLOATING CAMPAIGN DOCK (LEFT SIDE - DEFAULT OPEN) -->
<div class="fixed bottom-6 left-6 z-[9999] flex flex-col items-start gap-3">

    <!-- ITEMS (VISIBLE BY DEFAULT) -->
    <div id="dockItems"
         class="flex flex-col gap-3 items-start">

        <a href="#"
           class="bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-full shadow-lg text-sm font-bold transition">
            WhatsApp
        </a>

        <a href="/support"
           class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-3 rounded-full shadow-lg text-sm font-bold transition">
            Volunteer
        </a>

        <a href="/donate"
           class="bg-red-600 hover:bg-red-700 text-white px-4 py-3 rounded-full shadow-lg text-sm font-bold transition">
            Donate
        </a>

    </div>

    <!-- TOGGLE BUTTON -->
    <button id="dockToggle"
            onclick="toggleDock()"
            class="w-14 h-14 bg-slate-900 hover:bg-slate-800 text-white rounded-full shadow-xl text-2xl font-bold flex items-center justify-center transition">

        ×

    </button>

</div>

<script async src="https://www.instagram.com/embed.js"></script>
<script>
    window.addEventListener("load", function () {
        const panel = document.querySelector(".float-panel");

        setTimeout(() => {
            panel.classList.add("active");
        }, 500);
    });
</script>

<script>
    function toggleDock() {

        const items = document.getElementById("dockItems");
        const button = document.getElementById("dockToggle");

        if (!items || !button) return;

        const isOpen = !items.classList.contains("hidden");

        if (isOpen) {
            items.classList.add("hidden");
            button.innerText = "+";
        } else {
            items.classList.remove("hidden");
            button.innerText = "×";
        }
    }
</script>

<script>
    window.addEventListener("load", function () {

        const sections = document.querySelectorAll(".reveal");

        sections.forEach((section, index) => {

            setTimeout(() => {
                section.classList.add("active");
            }, 120 + (index * 120));

        });

    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const panel = document.getElementById("portraitPanel");
        const closeBtn = document.getElementById("closePanelBtn");

        closeBtn.addEventListener("click", function () {
            panel.classList.add("hidden");
        });
    });
</script>
</body>

</html>