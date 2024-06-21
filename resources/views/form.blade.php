@extends('layouts.app')

@section('title', 'Forms')

@section('head')

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
    <li class="breadcrumb-item active">Forms</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Control</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="" class="form-control" placeholder="Nama" id="">
                        </div>
                        <div class="col">
                            <input type="text" name="" class="form-control" placeholder="Email" id="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Form With Label</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                    placeholder=""
                                    aria-describedby="helpId"
                                />
                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                    placeholder=""
                                    required
                                    aria-describedby="helpId"
                                />
                            </div>
                        </div>
                    </div>

                    bf-tex
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>

</script>
@endsection
