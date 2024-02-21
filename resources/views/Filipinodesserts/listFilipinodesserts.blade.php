@extends('layouts.main')
@section('content')

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Available filipinodesserts</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="filipinodesserts">
                    <thead>
                        <tr>
                            <th>
                                image
                            </th>
                            <th>
                                title
                            </th>
                            <th>
                                description 
                            </th>
                            <th>
                                date
                            </th>
                            <th>
                                ingredients
                            </th>
                            <th>
                                procedure
                            </th>
                            <th>
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($filipinodesserts as $filipinodesserts)
                        <tr>
                            <td>
                                <img src="filipinodessertsimage/{{ $filipinodesserts->image }}" >
                            </td>
                            <td>
                                {{ $filipinodesserts->title }}
                            </td>
                            <td>
                                {{ $filipinodesserts->description }}
                            </td>
                            <td>
                                {{ $filipinodesserts->date }}
                            </td>
                            <td>
                                {{ $filipinodesserts->ingredients }}
                            </td>
                            <td>
                                {{ $filipinodesserts->procedure }}
                            </td>
                            <td>

                                <button type="button" data-toggle="modal" data-target="#editfilipinodesserts{{ $filipinodesserts->id }}">
                                    <i class="typcn typcn-edit  text-primary"></i>
                                </button>
                                @include('Filipinodesserts.editFilipinodesserts')
                                &nbsp;

                                <a onclick="return confirm('are you sure to delete this?')"
                                    href="{{url('deleteFilipinodesserts',$filipinodesserts->id)}}">
                                    <i class="typcn typcn-archive text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('admin/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>

@if (Session::has('message'))
<script>
    swal({ title: "Filipinodesserts", text: "{{ Session::get('message')}}", timer: 2e3, showConfirmButton: !1 });
</script>
@endif

@endsection