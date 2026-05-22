<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Event;
use App\Models\Manifesto;

class HomeController
{

public function index()
{

$posts=
Post::latest()
->take(3)
->get();


$events=
Event::latest()
->take(3)
->get();


$manifestos=
Manifesto::take(6)
->get();


return view(

'frontend.home',

compact(

'posts',
'events',
'manifestos'

)

);

}

}
