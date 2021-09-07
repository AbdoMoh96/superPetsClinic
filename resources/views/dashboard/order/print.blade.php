<x-admin.dashboard.layout starter="Print Order">

    <x-slot name="head">
        <title> {{ config('app.name') }} | Print Order </title>
        <style>
            .custom-icon{
                font-size:22px;
            }
        </style>
    </x-slot>

    <x-slot name="breadcrumbs">
        <x-admin.dashboard.items.bread-crumb-link active="0" name="dashboard" route="admin.dashboard"/>
        <x-admin.dashboard.items.bread-crumb-link active="0" name="orders" route="admin.order.index"/>
        <x-admin.dashboard.items.bread-crumb-link active="1" name="print order" />
    </x-slot>


    <x-slot name="mainContent">

        <div class="row">
            <div class="col-12">
                <h4>
                    <img src="{{asset($setting->admin_logo)}}" width="60px" alt="logo"> Super Pets Store
                    <small class="float-right">Date: {{$order->created_at->format('d M Y')}}</small>
                </h4>
            </div>
            <!-- /.col -->
        </div>
                <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>Super Pets Store</strong><br>
                    Address: {{$contact->contact_en->address}}<br>
                    Phone: {{$contact->phone}}<br>
                    Email: {{$contact->email}}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>{{$order->user->first_name}} {{$order->user->last_name}}</strong><br>
                    City: {{$order->address->city}},
                    Street: {{$order->address->street}} <br>
                    Block Number: {{$order->address->block}}, Floor: {{$order->address->floor}} <br>
                    {{--                                Phone: (555) 539-1037<br>--}}
                    Email: {{$order->user->email}}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                {{--                            <b>Invoice #007612</b><br>--}}
                {{--                            <br>--}}
                <b>Order ID:</b> {{$order->code}}<br>
                {{--                            <b>Payment Due:</b> 2/22/2014<br>--}}
                {{--                            <b>Account:</b> 968-34567--}}
            </div>
            <!-- /.col -->
        </div>
                <!-- /.row -->

                <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Product Title</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->products as $product)
                        <tr>
                            <td>{{$product->code}}</td>
                            <td>{{$product->product_en->title}}</td>
                            <td>{{$product->pivot->quantity}}</td>
                            <td>EGP {{$product->pivot->price}}</td>
                            <td>EGP {{$product->pivot->total}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
                <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
                <p class="lead">Payment Method: (COD) Cash On Delivery</p>
                {{--                            <img src="../../dist/img/credit/visa.png" alt="Visa">--}}
                {{--                            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">--}}
                {{--                            <img src="../../dist/img/credit/american-express.png" alt="American Express">--}}
                {{--                            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">--}}
            </div>
            <!-- /.col -->
            <div class="col-6">
                {{--                            <p class="lead">Amount Due 2/22/2014</p>--}}

                <div class="table-responsive">
                    <table class="table">
                        {{--<tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$250.30</td>
                        </tr>
                        <tr>
                            <th>Tax (9.3%)</th>
                            <td>$10.34</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>$5.80</td>
                        </tr>--}}
                        <tr>
                            <th>Total:</th>
                            <td>EGP {{$order->subtotal}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
                <!-- /.row -->

    </x-slot>


    <x-slot name="scripts">
        <script>
            window.addEventListener("load", window.print());
        </script>
    </x-slot>

</x-admin.dashboard.layout>

