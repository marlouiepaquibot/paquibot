@extends('layouts.main')
@section('content')

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Available lutongbahay</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="lutongbahay">
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
                        @foreach($lutongbahay as $lutongbahay)
                        <tr>
                            <td>
                                <img src="lutongbahayimage/{{ $lutongbahay->image }}" >
                            </td>
                            <td>
                                {{ $lutongbahay->title }}
                            </td>
                            <td>
                                {{ $lutongbahay->description }}
                            </td>
                            <td>
                                {{ $lutongbahay->date }}
                            </td>
                            <td>
                                {{ $lutongbahay->ingredients }}
                            </td>
                            <td>
                                {{ $lutongbahay->procedure }}
                            </td>
                            <td>

                                <button type="button" data-toggle="modal" data-target="#editLutongbahay{{ $lutongbahay->id }}">
                                    <i class="typcn typcn-edit  text-primary"></i>
                                </button>
                                @include('Lutongbahay.editLutongbahay')
                                &nbsp;

                                <a onclick="return confirm('are you sure to delete this?')"
                                    href="{{url('deleteLutongbahay',$lutongbahay->id)}}">
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
    swal({ title: "Lutongbahay", text: "{{ Session::get('message')}}", timer: 2e3, showConfirmButton: !1 });
</script>
@endif

@endsection