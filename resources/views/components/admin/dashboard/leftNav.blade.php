<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('store.index')}}" target="_blank" class="brand-link">
        <img
            src="{{asset($setting->admin_logo)}}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light">Super Pets Clinic</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="{{ asset('dashboard/img/avatar5.png')  }}"
                    class="img-circle elevation-2"
                    alt="User Image"
                />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->guard('admin')->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <x-admin.dashboard.items.link
                        name="Dashboard"
                        route="{{route('admin.dashboard')}}"
                        icon="fas fa-home"
                />

                <x-admin.dashboard.items.menu name="Orders" route="admin.order*" icon="fas fa-truck">
                    <x-admin.dashboard.items.link
                        name="View Orders"
                        route="{{route('admin.order.index')}}"
                        icon="fas fa-eye"/>
                </x-admin.dashboard.items.menu>

                <x-admin.dashboard.items.menu name="Products" route="admin.product*" icon="fab fa-shopify">

                    <x-admin.dashboard.items.link
                        name="Create New Product"
                        route="{{route('admin.product.create')}}"
                        icon="fas fa-plus"/>

                    <x-admin.dashboard.items.link
                        name="View Products"
                        route="{{route('admin.product.index')}}"
                        icon="fas fa-eye"/>

                </x-admin.dashboard.items.menu>

{{--                fas fa-truck--}}

                <x-admin.dashboard.items.menu name="Categories" route="admin.category*" icon="fas fa-boxes">

                    <x-admin.dashboard.items.link
                        name="Create New Category"
                        route="{{route('admin.category.create')}}"
                        icon="fas fa-plus"/>

                    <x-admin.dashboard.items.link
                        name="View Categories"
                        route="{{route('admin.category.index')}}"
                        icon="fas fa-eye"/>

                </x-admin.dashboard.items.menu>

                <x-admin.dashboard.items.link
                    name="Home Page Slider"
                    route="{{route('admin.slider.slides.index' , 'homepage_slider')}}"
                    icon="fas fa-images"
                />

                <x-admin.dashboard.items.link
                    name="Partners"
                    route="{{route('admin.slider.slides.index' , 'partners')}}"
                    icon="fas fa-handshake"
                />

                <x-admin.dashboard.items.link
                    name="Team"
                    route="{{route('admin.slider.slides.index' , 'team')}}"
                    icon="fas fa-user-friends"
                />

                <x-admin.dashboard.items.link
                    name="Clinic Home Slider"
                    route="{{route('admin.slider.slides.index' , 'clinic_home_slider')}}"
                    icon="fas fa-images"
                />

                <x-admin.dashboard.items.link
                    name="Clinic Services"
                    route="{{route('admin.slider.slides.index' , 'clinic_services')}}"
                    icon="fas fa-hand-holding-heart"
                />
{{--                fas fa-concierge-bell--}}

                <x-admin.dashboard.items.link
                    name="Clinic Gallery"
                    route="{{route('admin.slider.slides.index' , 'clinic_gallery')}}"
                    icon="fas fa-images"
                />




                {{--<x-admin.dashboard.items.menu name="Sliders" route="admin.slider*" icon="fas fa-images">
                    <x-admin.dashboard.items.link
                        name="Add Homepage Slide"
                        route="{{route('admin.slider.slides.create' , 'homepage_slider')}}"
                        icon="fas fa-plus"/>
                    <x-admin.dashboard.items.link
                        name="Add Partner Slide"
                        route="{{route('admin.slider.slides.create' , 'partners_slider')}}"
                        icon="fas fa-plus"/>
                    <x-admin.dashboard.items.link
                        name="Add Team Slide"
                        route="{{route('admin.slider.slides.create' , 'team_slider')}}"
                        icon="fas fa-plus"/>
                    <x-admin.dashboard.items.link
                        name="View Sliders"
                        route="{{route('admin.slider.index')}}"
                        icon="fas fa-eye"/>
                </x-admin.dashboard.items.menu>--}}


                <x-admin.dashboard.items.link
                    name="About"
                    route="{{route('admin.about.edit')}}"
                    icon="fas fa-info"
                />

                <x-admin.dashboard.items.link
                    name="Appointments"
                    route="{{route('admin.appointment.index')}}"
                    icon="far fa-calendar-check"
                />

                <x-admin.dashboard.items.link
                    name="Mail"
                    route="{{route('admin.mail.index')}}"
                    icon="fas fa-envelope"
                />

                <x-admin.dashboard.items.link
                    name="Contact"
                    route="{{route('admin.contact.edit')}}"
                    icon="fas fa-phone"
                />


                <x-admin.dashboard.items.link
                    name="Settings"
                    route="{{route('admin.settings.edit')}}"
                    icon="fas fa-cogs"
                />


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
