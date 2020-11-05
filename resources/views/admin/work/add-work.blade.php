@extends("admin.master.master")
@section('title')
    add work
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="post" action="{{route('admin.work.save')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add Work</h4>
                            <div class="form-group row">
                                <label for="title" class="col-sm-3 text-right control-label col-form-label">Work Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title Here">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="live_url" class="col-sm-3 text-right control-label col-form-label">Live Work Url</label>
                                <div class="col-sm-9">
                                    <input name="live_url" type="text" class="form-control" id="live_url" placeholder="Live Work Url Here">
                                    @error('live_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image_url" class="col-sm-3 text-right control-label col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    <input name="image_url" type="file" class="form-control" id="image_url">
                                    @error('image_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description"> </textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="credential" class="col-sm-3 text-right control-label col-form-label">Credential</label>
                                <div class="col-sm-9">
                                    <textarea id="editor" name="credential" class="form-control"> </textarea>
                                    @error('credential')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
