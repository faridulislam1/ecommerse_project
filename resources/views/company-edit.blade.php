@extends ('layouts.dashboard')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Edit Company </h3>
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.company')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$company->id}}">
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$company ->name }}" name="name" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" value="{{$company ->email }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">website</label>
                                    <div class="col-md-9">
                                        <input type="text" name="website" value="{{$company ->website }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Logo</label>
                                    <div class="col-md-9">
                                        <input type="file" name="logo" value="{{$company ->logo }}"class="form-control" >
                                        <img src="{{ asset ($company->logo)}}" class="img-fluid" style="width:80px;height:50px;" alt="">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="Save Info" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
