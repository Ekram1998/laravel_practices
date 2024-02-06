<h1>this is class index page</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('All Class Information')}}</div>

                <a href="{{route('create.class')}}" class="btn btn-sm btn-primary" style="float: left">Add New</a>
            <br>
                <div class="card-body">
                    <table class="table table-responsive table-strioe">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Class Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($class as $key=>$cls)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$cls->class_name}}</td>
                                    <td>
                                        <a href="{{ route('edit.class',$cls->id)}}" class="btn btn-sm btn-info">edit</a>
                                        <a href="{{ route('delete.class',$cls->id)}}" class="btn btn-sm btn-danger">delete</a>
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
