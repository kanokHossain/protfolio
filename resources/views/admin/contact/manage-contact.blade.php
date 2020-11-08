@extends("admin.master.master")
@section('title')
    Contact
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
                <h4 class="page-title">Contact US</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        </ol>
                    </nav>
                </div>
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
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $key => $list  )
                                <tr>
                                    <td>{{$loop->index+1 }} </td>
                                    <td>{{$list->your_name}} </td>
                                    <td>{{$list->your_email}} </td>
                                    <td>{{$list->your_message}}</td>
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
