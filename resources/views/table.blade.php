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
                    <div class="table-responsive-lg">
                        <table class="table table-success table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Test Header</th>
                                    <th>Test Header</th>
                                    <th>Test Header</th>
                                    <th>Test Header</th>
                                    <th>Test Header</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='no'>1</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td><button class="btn btn-danger deleteBtn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td class='no'>2</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td><button class="btn btn-danger deleteBtn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td class='no'>3</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td><button class="btn btn-danger deleteBtn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td class='no'>4</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo placeat est qui
                                        ducimus molestias repellendus nesciunt assumenda corrupti. Sit mollitia dolorum
                                        eaque ipsum inventore fugiat saepe eveniet dolores quaerat harum.</td>
                                    <td><button class="btn btn-danger deleteBtn">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).on("click", ".deleteBtn", function(e) {

            var elem = $(this);
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this demand point again!",
                icon: "warning",
                buttons: {cancel: {
                    text: "Cancel",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: true,
                },
                confirm: {
                    text: "Yes, i'm sure!",
                    value: true,
                    visible: true,
                    className: "btn-danger",
                    closeModal: true
                }}
            }).then((value)=>{
                if(value==true){
                    elem.closest("tr").remove();
                    $.each($('.no'), function (indexInArray, valueOfElement) {
                        $(valueOfElement).text(indexInArray + 1);
                    });
                }
            });
        });
    </script>
@endsection
