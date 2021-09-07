<li
    class="breadcrumb-item @if($active == 1) active @endif"
>
    @if($active == 1)
      {{ $name }}
    @elseif($active == 0)
     <a href="{{route($route)}}">
         {{ $name }}
     </a>
    @endif
</li>
