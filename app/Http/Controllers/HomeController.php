<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
    $home = $request->username;
    return view('home', compact('home'));
  }

  public function about()
  {
    $desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque maxime rerum ullam qui veniam nihil vero molestiae cupiditate corrupti laborum quis, nemo vitae doloribus possimus iste obcaecati temporibus, dolor tenetur nulla placeat necessitatibus. Deleniti molestias vero a doloribus facilis atque laudantium quos repellendus. Perferendis velit at eaque iure reprehenderit dolorum ipsa soluta corporis unde quia voluptatum voluptas dolor quibusdam facilis quam minus sed quidem, consequuntur tenetur. Ipsa illum, totam itaque commodi earum id soluta veritatis eius eum adipisci perferendis recusandae nesciunt, eligendi molestiae et? Nam quod, ea eos laudantium, deleniti, quo voluptatem necessitatibus dolor eius nobis eligendi blanditiis temporibus et.";
    return view('about', compact('desc'));
  }

  public function product($nama)
  {
    return view('product.detail', compact('nama'));
  }
}
