<div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-bg">

                                <div class="offer-content"> <img src="{{asset($setting->clinic_logo)}}"
                                                                 class="img-fluid blur-up lazyload" alt="">
                                    <h2>{{trans('store.popup_section_clinic')}}</h2>

                                    <a class="btn btn-solid" href="{{route('clinic.index')}}">Click Here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-bg">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <div class="offer-content"> <img src="{{asset($setting->store_logo)}}"
                                                                 class="img-fluid blur-up lazyload" alt="">
                                    <h2> {{trans('store.popup_section_store')}}</h2>


                                    <a class="btn btn-solid" href="{{route('store.index')}}">Click Here</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
