@extends("admin.master.master")
@section('title')
    edit work
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="post" action="{{route('admin.work.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Edit Work</h4>
                            <div class="form-group row">
                                <label for="title" class="col-sm-3 text-right control-label col-form-label">Work Title</label>
                                <div class="col-sm-9">
                                <input type="text" value="{{$edit_work->title}}" class="form-control" id="title" name="title" placeholder="Title Here">
                                <input type="hidden" value="{{$edit_work->id}}" class="form-control" id="id" name="id">
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
                                    <input name="live_url" type="text" value="{{$edit_work->live_url}}" class="form-control" id="live_url" placeholder="Live Work Url Here">
                                    @error('live_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="photo_url" class="col-sm-3 text-right control-label col-form-label">Photo</label>
                                <div class="col-sm-9">
                                    @if($edit_work->image_url)
                                    <?php 
                                        $image = $edit_work->image_url;
                                        if (strpos($image, 'default.png') !== false)
                                        {
                                            $image = $edit_work->photo_url;
                                        }
                                    ?>
                                    <img class="rounded-circle profile-img avatar-view-img preview_img" src="{{ $image }}" alt="" width="100" height="100">
                                    @endif
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
                                <textarea class="form-control" name="description"> {{$edit_work->description}}</textarea>
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
                                    <textarea id="editor" name="credential" class="form-control">{{$edit_work->credential}} </textarea>
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
