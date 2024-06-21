@extends('layouts.app')

@section('title', 'Flex')

@section('head')

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
    <li class="breadcrumb-item active">Flex</li>
@endsection

@section('content')
    <div class="row d-flex flex-row">
        <div class="col-md-3">
            <div class="alert alert-primary" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-warning" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-danger" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-success" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
    </div>
    <div class="row d-flex flex-column">
        <div class="col-md-3">
            <div class="alert alert-primary" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-warning" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-danger" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-success" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
    </div>
    <div class="row d-flex  justify-content-center ">
        {{-- <div class="" style="width:30%"> --}}
            <div class="alert alert-primary" style="30%" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        {{-- </div> --}}
        <div class="" style="width:30%">
            <div class="alert alert-warning" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="" style="width:30%">
            <div class="alert alert-danger" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
        <div class="" style="width:30%">
            <div class="alert alert-success" role="alert">
                <strong>Alert Heading</strong> Some Word
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="bg-primary text-white mt-5 pt-5 pb-5" style="width:30%">Test</div>
        <div class="bg-primary text-white mt-5 pt-5 pb-5" style="width:30%">Test</div>
        <div class="bg-primary text-white mt-5 pt-5 pb-5" style="width:30%">Test</div>
    </div>

    <div class="d-flex align-items-stretch justify-content-between">
        <div class="bg-primary text-white mt-5 pt-5 pb-5" style="width:30%">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque quibusdam, magni aliquam in ipsam iste blanditiis doloribus maiores possimus quam, veritatis dolor voluptatibus consequuntur ut quas at expedita culpa et.
        </div>
        <div class="bg-primary text-white mt-5 pt-5 pb-5" style="width:30%">Test</div>
        <div class="bg-primary text-white mt-5 pt-5 pb-5" style="width:30%">Test</div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam voluptate placeat enim? Repellat iusto distinctio quia obcaecati, accusantium sunt maxime fugit in error debitis deleniti corporis culpa aspernatur praesentium suscipit!
                    </p>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
