@extends('layouts.main')
@section('content')

<script src="{{ asset('admin/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>

@if (Session::has('message'))
<script>
    swal({ title: "Filipinodesserts", text: "{{ Session::get('message')}}", timer: 2e3, showConfirmButton: !1 });
</script>
@endif

<div class="row">
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">ADD FILIPINO DESSERT</h4>
                <form action="{{ url('saveFilipinodesserts')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">IMAGE</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TITLE</label>
                        <input type="text" class="form-control" name="title" placeholder="title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">DESCRIPTION</label>
                        <textarea id="text_input" name="description" rows="15" cols="100">

</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">DATE</label>
                        <input type="date" class="form-control" name="date" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>INGREDIENTS</label>
                        <textarea id="text_input" name="ingredients" rows="20" cols="100">

  </textarea>
                    </div>

                    <div class="form-group">
                        <label>PROCEDURE</label> </br>
                        <textarea id="text_input" name="procedure" rows="20" cols="100">

  </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection