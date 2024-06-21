@extends('layouts.app')

@section('title', 'Table')

@section('head')

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
    <li class="breadcrumb-item active">Table</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sub Title</div>
                <div class="card-body">
                    <table class="table table-sm table-success table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Test Header</th>
                                <th>Test Header</th>
                                <th>Test Header</th>
                                <th>Test Header</th>
                                <th>Test Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                            </tr>
                            <tr>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                            </tr>
                            <tr>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                            </tr>
                            <tr>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                                <td>Test content</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
