<div class="modal fade" id="editLutongbahay{{ $lutongbahay->id }}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Lutongbahay #: {{$lutongbahay->id}}</h5>
                <button type="reset" class="close" data-dismiss="modal"><span>×</span>
                </button>
            </div>
            <form action="{{ url('editLutongbahay',$lutongbahay->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Image</label>
                                                <img height="100" width="100" src="Lutongbahayimage/{{$lutongbahay ->image}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Change Image</label>
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>title</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{$lutongbahay ->title}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>description</label>
                                                <input type="text" class="form-control" name="description"
                                                    value="{{$lutongbahay ->description}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>date</label>
                                                <input type="date" class="form-control" name="date"
                                                    value="{{$lutongbahay ->date}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ingredients</label>
                                                <input type="text" class="form-control" name="ingredients"
                                                    value="{{$lutongbahay->ingredients}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>procedure</label>
                                                <input type="text" class="form-control" name="procedure}"
                                                    value="{{$lutongbahay->procedure}}">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>