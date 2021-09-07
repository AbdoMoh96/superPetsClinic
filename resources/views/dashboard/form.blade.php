<x-admin.dashboard.layout starter="Upload Videos">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Upload Videos </title>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" route="admin.dashboard" name="dashboard" />
        <x-admin.dashboard.items.bread-crumb-link active="1" name="Upload Videos" />
    </x-slot>


    <x-slot name="mainContent">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"> Create Client </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post">
                        @csrf
                        @method("POST")
                        <div class="card-body">

                            <div class="form-group mb-4">
                                <label for="first_name" class="text-primary">Client First Name</label>
                                <input
                                    type="text"
                                    class="form-control @error("first_name") is-invalid @enderror"
                                    id="first_name"
                                    name="first_name"
                                    value="{{old("first_name")}}"
                                    placeholder="Enter Client First Name">
                                @error("first_name")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="last_name" class="text-primary ">Client Last Name</label>
                                <input
                                    type="text"
                                    class="form-control @error("last_name") is-invalid @enderror"
                                    id="last_name"
                                    name="last_name"
                                    value="{{old("last_name")}}"
                                    placeholder="Enter Client First Name">
                                @error("last_name")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="row ">

                                <div class="form-group form-group-width col-lg-6 col-sm-12 ">
                                    <label for="phone_number" class="text-primary">Client Phone Number</label>
                                    <input
                                        type="text"
                                        class="form-control @error("phone_number") is-invalid @enderror"
                                        id="phone_number"
                                        name="phone_number"
                                        value="{{old("phone_number")}}"
                                        placeholder="Enter Client Phone Number">
                                    @error("phone_number")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group form-group-width mb-4 col-lg-6 col-sm-12">
                                    <label for="mobile_number" class="text-primary">Client Mobile Number</label>
                                    <input
                                        type="text"
                                        class="form-control @error("mobile_number") is-invalid @enderror"
                                        id="mobile_number"
                                        name="mobile_number"
                                        value="{{old("mobile_number")}}"
                                        placeholder="Enter Client Mobile Number">
                                    @error("mobile_number")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>



                            <!-- select here -->
                            <div class="form-group">
                                <label for="client_type" class="text-primary">Client Type</label>
                                <select name="client_type"
                                        class="custom-select @error("client_type") is-invalid @enderror"
                                        id="client_type">
                                    <option>type</option>

                                </select>
                                @error("client_type")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="form-group mb-4">
                                <label for="address" class="text-primary">Client Address</label>
                                <input
                                    type="text"
                                    class="form-control @error("address") is-invalid @enderror"
                                    id="address"
                                    name="address"
                                    value="{{old("address")}}"
                                    placeholder="Enter Client Address">
                                @error("address")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="title" class="text-primary">Client Title</label>
                                <input
                                    type="text"
                                    class="form-control @error("title") is-invalid @enderror"
                                    id="title"
                                    name="title"
                                    value="{{old("title")}}"
                                    placeholder="Enter Client Title">
                                @error("title")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="country" class="text-primary">Client's Country</label>
                                <select name="country"
                                        class="custom-select @error("country") is-invalid @enderror"
                                        id="country">
                                    <option></option>

                                </select>
                                @error("country")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="notes" class="text-primary">Notes</label>
                                <textarea
                                    name="notes"
                                    id="notes"
                                    class="form-control custom-textarea @error("notes") is-invalid @enderror"
                                    rows="3"
                                    placeholder="Enter ..."
                                >
                                {{old("notes")}}
                                </textarea>
                                @error("notes")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-success">Create Client</button>
                            <a
                                href=""
                                class="btn btn-success ml-auto"
                            > View All Clients </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </x-slot>



    <x-slot name="scripts">

    </x-slot>

</x-admin.dashboard.layout>
