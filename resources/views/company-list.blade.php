@extends ('layouts.dashboard')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h3 class="text-center">Manage Company List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>website</th>
                                        <th>Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$company->name}}</td>
                                        <td>{{$company->email}}</td>
                                        <td>{{$company->website}}</td>
                                        <td>
                                            <img src="{{ asset ($company->logo)}}" class="img-fluid" style="width:80px;height:50px;" alt="">
                                        </td>
                                        <td  class="btn-group">
                                            <a href="{{route('edit.company',['id'=>$company->id]) }}" class="btn btn-primary btn-sm mx-1">edit</a>
                                            <form action="{{route('delete.company')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$company->id}}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure Delete this !!')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
