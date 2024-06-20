@extends('layouts.app')

@section('title', 'Flex')

@section('head')

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
    <li class="breadcrumb-item active">Flex</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Flex</div>
                <div class="card-body">
                    <div class="d-flex flex-column-reverse">
                        <div class="p-2 bg-primary">Flex item 1</div>
                        <div class="p-2 bg-secondary">Flex item 2</div>
                        <div class="p-2 bg-success">Flex item 3</div>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2 bg-primary">Flex item 1</div>
                        <div class="p-2 bg-secondary">Flex item 2</div>
                        <div class="p-2 bg-success">Flex item 3</div>
                    </div>
                    <div class="d-flex  justify-content-evenly">
                        <div class="p-2 bg-primary">Flex item 1</div>
                        <div class="p-2 bg-secondary">Flex item 2</div>
                        <div class="p-2 bg-success">Flex item 3</div>
                    </div>
                    <div class="d-flex  justify-content-between">
                        <div class="p-2 bg-primary">Flex item 1</div>
                        <div class="p-2 bg-secondary">Flex item 2</div>
                        <div class="p-2 bg-secondary">Flex item 2</div>
                        <div class="p-2 bg-success">Flex item 3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>

</script>
@endsection
