@extends ('layouts.dashboard')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Employee Edit Form</h4>
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.employee')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$employee->id}}">
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$employee ->name }}" name="name" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Company Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$employee ->company_id }}" name="company_id" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" value="{{$employee ->email }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$employee ->phone }}" name="phone" >
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
