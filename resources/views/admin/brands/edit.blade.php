@extends('admin.templatesAdmin.layoutAdmin')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="{{route('route.brands.edit',['id'=>$data->id])}}" method="post" class="dropzone dz-clickable d-flex justify-content-between flex-wrap"
                         enctype="multipart/form-data" >
                        @csrf
                        <div class="col-xl-6">

                            <div class="mb-3">
                                <label class="form-label">Tên thương hiệu</label>
                                <input type="text" class="form-control" name="name_brand" value="{{$data->name_brand}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">slug</label>
                                <input type="text" class="form-control" value="{{$data->slug}}">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Date View -->
                                    <div class="mb-3">
                                        <label class="form-label">Ngày nhập</label>
                                        <input type="hidden" class="form-control flatpickr-input"
                                               data-toggle="flatpicker"
                                               placeholder="October 9, 2019">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="form-group text-center" >
                                <div class="col-md-9 col-sm-8">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="file" name="files[]" accept="image/*"
                                                   class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc" style="display: none" >
                                            <label for="cmt_truoc" class="font-48">Click để chọn ảnh</label>
                                            <br>

                                            <img id="mat_truoc_preview" src="{{''.Storage::URL($data->image)}}" alt="your image"
                                                 style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row mt-3 col-xl-12">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-1">
                                    <i class="bi bi-check-circle"></i> Create
                                </button>
                                <a href="{{route('route.brands.list')}}">
                                    <button type="button" class="btn btn-light waves-effect waves-light m-1">
                                        <i class="bi bi-x"></i> Cancel
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>
        @endsection
        @section('js')
            <script src="{{asset('assets/js/custom-brand.js')}}"></script>
            <!-- plugin js -->
            <script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>
            <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
            <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>

            <!-- Init js-->
            <script src="{{asset('assets/pages/create-project.init.js')}}"></script>
@endsection
