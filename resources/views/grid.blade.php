@extends('layouts.app')

@section('title', 'Grid')

@section('head')

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
    <li class="breadcrumb-item active">Grid</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sub Title</div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-header">SM-2</div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">SM-8</div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-header">SM 2</div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <div class="card">
                <div class="card-header">SM-2</div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </div>
        <div class="col-sm-2 offset-sm-8">
            <div class="card">
                <div class="card-header">SM 2</div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col bg-warning">Col</div>
        <div class="col bg-warning">Col</div>
        <div class="col bg-warning">Col</div>
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>

        </div>
    </div>

    <div class="row gx-5 gy-3">
        <div class="col bg-warning">Col</div>
        <div class="col bg-success">Col</div>
        <div class="col bg-info">Col</div>
        <div class="col bg-warning">Col</div>
        <div class="col bg-warning">Col</div>
        <div class="col bg-success">Col</div>
        <div class="col bg-info">Col</div>
        <div class="col bg-warning">Col</div>
        <div class="col bg-warning">Col</div>
        <div class="col bg-success">Col</div>
        <div class="col bg-info">Col</div>
        <div class="col bg-warning">Col</div>
        <div class="col bg-warning">Col</div>
        <div class="col bg-success">Col</div>
        <div class="col bg-info">Col</div>
        <div class="col bg-warning">Col</div>
    </div>

    <div class="row row-cols-md-2">
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
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
