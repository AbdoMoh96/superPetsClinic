<li class="nav-item mb-2">
    <a href="" class="nav-link @if(request()->routeIs($route)) active @endif">
        <i class="nav-icon {{ $icon }} "></i>
        <p>
            {{ $name }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        {{ $slot }}

    </ul>
</li>



{{-- <x-admin.dashboard.items.menu name="Videos" route="admin.videos.*" icon="fas fa-video">

    <x-admin.dashboard.items.link
        name="Upload Video"
        route="admin.dashboard"
        icon="fas fa-upload"/>

</x-admin.dashboard.items.menu> --}}