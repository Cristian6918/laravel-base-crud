 <div class="header-top"></div>
 <div class="ct-header">
     <div class="container">
         <a class='dc-logo ' href="/"><img src="/assets/images/dc-logo.png" alt="Dc logo"></a>
         @foreach ($menu as $item)
             @if ($item['active'])
                 <a class='ct-link active' href="#">{{ $item['title'] }}</a>
             @else
                 <a class='ct-link ' href="#">{{ $item['title'] }}</a>
             @endif
         @endforeach

     </div>
 </div>
