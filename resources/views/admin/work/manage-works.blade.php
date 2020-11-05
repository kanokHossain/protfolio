@extends("admin.master.master")
@section('title')
    Works
@endsection

@section('body')
    <style>
        .action{
            text-align: center;
        }
    </style>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Works</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{route('admin.work.create')}}" style="float: right" class="btn btn-success">ADD</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th class="action">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($works as $key => $list  )
                                <tr>
                                    <td>{{$loop->index+1 }} </td>
                                    <td>{{$list->title}} </td>
                                    <td>{{$list->description}} TK</td>
                                    <td class="action">
                                        <a href="{{route('admin.work.edit',$list->id)}}" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a  href="{{route('admin.work.delete',$list->id)}}"type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
