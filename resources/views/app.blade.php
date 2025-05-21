@extends('components.layouts.app')

@section('app')
<style>
  h2 {
    text-align: center;    
  }
  
.card{
    width: 350px;
    height: 250px;
    background-color: #1f2428;
    transition: all 0.1s;;
    color: snow !important;
    padding: 1.2rem;
}
.card:hover{
    border: 2px solid #f9826c;
}
.image{
    width: 200px;
    position: relative;
    left: 18%;
}
.laravel{
    font-size: 12px;
    color: #607280
}

</style>
<div class="live">
    <h2 class="mt-3"><span class="span">The programs I know</span></h2>

    <div class="cards d-flex flex-wrap gap-3 mt-3">
        <div class="card ms-3">
             <h4><span class="span">Laravel</span></h4>
             <img src="../image/Laravel-Logo.wine.png" alt="" class="image">
             <p class="laravel">Laravel: PHP framework for elegant, fast, and secure web development.</p>
        </div>
         <div class="card ms-3">
             <h4><span class="span">Bootstrap</span></h4>
             <img src="../image/bot.png" alt="" style="width: 130px; position: relative ; left: 29%; ">
             <p class="laravel">Bootstrap: CSS framework for responsive, mobile-first, and modern web design.</p>
        </div>
         <div class="card ms-3">
             <h4><span class="span">Html & css</span></h4>
             <img src="../image/css.png" alt="" style="width: 130px; position: relative ; left: 29%; ">
             <p class="laravel">
             HTML: Structures web content using elements and tags for page layout.
             CSS: Styles HTML elements with colors, layouts
            </p>
        </div>
         <div class="card ms-3">
             <h4><span class="span">Live Wire</span></h4>
             <img src="../image/livewire_.png" alt="" style="width: 130px; position: relative ; left: 29%; ">
             <p class="laravel">Livewire: Laravel package for building dynamic interfaces using Blade and PHP.</p>
        </div>
         <div class="card ms-3">
             <h4><span class="span">PHP</span></h4>
             <img src="../image/pngwing.com (2).png" alt="" style="width: 130px; position: relative ; left: 29%; ">
             <p class="laravel">PHP: Server-side scripting language for dynamic websites and web applications.</p>
        </div>
         <div class="card ms-3">
             <h4><span class="span">Adobe Photoshop</span></h4>
             <img src="../image/adobe-photoshop-logo-2021.svg" alt="" style="width: 130px; position: relative ; left: 29%; ">
             <p class="laravel">Adobe Photoshop: Powerful software for image editing, design, and digital art.</p>
        </div>
    </div>
</div>
@endsection
