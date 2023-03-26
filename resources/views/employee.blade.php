@extends ('layouts.dashboard')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h4 class="text-center">Employee Form</h4>
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('new.employee')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Company Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="company_id" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone" >
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
