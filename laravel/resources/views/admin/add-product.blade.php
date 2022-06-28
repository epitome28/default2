@include('admin.layouts.sidebar')

<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Product</h4>
            </div>
            <div class="card-body">
                <form action="{{route('add')}}" method="post"  class="step-form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        {{--                        <h4></h4>--}}
                        <section>
                            <div class="row">

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Product-Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Parsley"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Amount</label>
                                        <input type="number" name="amount" class="form-control"   required/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Product Image</label>
                                        <input type="file" name="picture" class="form-control"   required/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Other Picture</label>
                                        <input type="file" name="pictures" class="form-control"   required/>
                                        <input type="hidden" name="productid" class="form-control" value="{{rand(11111111, 99999999)}}"   required/>
                                    </div>
                                </div>
                                <div class="form-control">
                                    <label class="text-label">Content</label>
                                    <textarea  name="desc" class="form-control" style="height: 300px;">

                                    </textarea>
                                </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
            <script src="{{asset('admin/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
            <script src="{{asset('admin/dist/js/pages/mask/mask.init.js')}}"></script>
            <script src="{{asset('admin/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
            <script src="{{asset('admin/assets/libs/select2/dist/js/select2.min.js')}}"></script>
            <script src="{{asset('admin/assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
            <script src="{{asset('admin/assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
            <script src="{{asset('admin/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
            <script src="{{asset('admin/assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
            <script src="{{asset('admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
            <script src="{{asset('admin/assets/libs/quill/dist/quill.min.js')}}"></script>
            <script>
                //***********************************//
                // For select 2
                //***********************************//
                $(".select2").select2();

                /*colorpicker*/
                $('.demo').each(function() {
                    //
                    // Dear reader, it's actually very easy to initialize MiniColors. For example:
                    //
                    //  $(selector).minicolors();
                    //
                    // The way I've done it below is just for the demo, so don't get confused
                    // by it. Also, data- attributes aren't supported at this time...they're
                    // only used for this demo.
                    //
                    $(this).minicolors({
                        control: $(this).attr('data-control') || 'hue',
                        position: $(this).attr('data-position') || 'bottom left',

                        change: function(value, opacity) {
                            if (!value) return;
                            if (opacity) value += ', ' + opacity;
                            if (typeof console === 'object') {
                                console.log(value);
                            }
                        },
                        theme: 'bootstrap'
                    });

                });
                /*datwpicker*/
                jQuery('.mydatepicker').datepicker();
                jQuery('#datepicker-autoclose').datepicker({
                    autoclose: true,
                    todayHighlight: true
                });
                var quill = new Quill('#editor', {
                    theme: 'snow'
                });

            </script>
