@extends('layouts.app')

@section('title', 'Sweet Alert & Popup Model')

@section('head')

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
    <li class="breadcrumb-item active">Sweet Alert & Popup Model</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sweet Alert</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" id="btnSweetAlert">Trigger Simple Sweet Alert</button>
                    <button type="button" class="btn btn-primary" id="btnIconSweetAlert">Trigger Icon Sweet Alert</button>
                    <button type="button" class="btn btn-danger" id="btnIconSweetAlertPromise">Trigger Sweet Alert with
                        promise</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Popup Modal</div>
        <div class="card-body">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal-create">
                Show Popup Model
            </button>

            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modelData"
                data-id="1452-1335-at45" data-name="Ahmad Kamal" data-phonenumber="0162084090">
                Popup Modal with data
            </button>

        </div>
    </div>

    <div class="modal fade" id="modal-create" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Daftar Jabatan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae error nostrum quaerat sit. Deserunt
                    fugit officia quas qui, autem quisquam dolorem, earum nihil iste cum eos odio id consequatur provident!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modelData" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Modal with data
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formModal">
                    <div class="modal-body">
                        <input type="text" class="form-control" name="user_uuid" id="user_uuid" placeholder="" />

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="form-control" required="required" placeholder="">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email"  value="{{ old('email') }}" class="form-control" required placeholder="eg: foo@bar.com">
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>

                        <div class="form-group {{ $errors->has('phoneNumber') ? 'has-error' : '' }}">
                            <label for="phoneNumber">No Telefon</label>
                            <input type="text" id="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber') }}"
                                class="form-control" required="required" placeholder="">
                            <small class="text-danger">{{ $errors->first('phoneNumber') }}</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" id="btnSimpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#btnSweetAlert').click(function(e) {
            e.preventDefault();
            swal("Simple Sweet alert");
        });

        $('#btnIconSweetAlert').click(function(e) {
            e.preventDefault();
            swal({
                title: "Success!",
                text: "Anda telah berjaya",
                icon: "error",
                //   icon: "success",
                //   icon: "warning",
            });
        });

        $('#btnIconSweetAlertPromise').click(function(e) {
            e.preventDefault();
            swal({
                title: "Adakah anda pasti?",
                text: "Tindakan ini tidak boleh dikembalikan!",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "Batal",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "Ya, saya pasti!",
                        value: true,
                        visible: true,
                        className: "btn-danger",
                        closeModal: true
                    }
                }
            }).then((value) => {
                if (value == true) {
                    swal("Deleted!", "Pengguna berjaya dipadam", "success");
                }
            });
        });

        $('#modelData').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var phonenumber = button.data('phonenumber');

            $('#user_uuid').val(id);
            $('#name').val(name);
            $('#phoneNumber').val(phonenumber);
        });

        $('#modelData').on('hide.bs.modal', function(event) {
            $('#formModal').trigger('reset');
        });

        $('#btnSimpan').click(function (e) {
            e.preventDefault();
            $.each($('.text-danger'), function (indexInArray, valueOfElement) {
                $(valueOfElement).text('');
            });
            $.each($('.is-invalid'), function (indexInArray, valueOfElement) {
                $(valueOfElement).removeClass('is-invalid');
            });
            $.ajax({
                type: "POST",
                url: "{{ route('form.store') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phoneNumber: $('#phoneNumber').val()
                },
                dataType: "json",
                success: function(response) {

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    var errors = xhr.responseJSON.errors;
                    console.log(errors);
                    $.each(errors, function(indexInArray, error) {
                        $('#' + indexInArray).addClass('is-invalid');
                        $('#' + indexInArray).parent().find('.text-danger').text(error[0]);
                    });
                }
            });
        });



        // swal({
        //     title: "Are you sure?",
        //     text: "You will not be able to recover this demand point again!",
        //     icon: "warning",
        //     buttons: {cancel: {
        //         text: "Cancel",
        //         value: null,
        //         visible: true,
        //         className: "",
        //         closeModal: true,
        //     },
        //     confirm: {
        //         text: "Yes, i'm sure!",
        //         value: true,
        //         visible: true,
        //         className: "btn-danger",
        //         closeModal: true
        //     }}
        // }).then((value)=>{
        //     // alert(value);
        //     if(value==true){
        //         $.ajax({
        //             type: "post",
        //             url: "route",
        //             data: {
        //                 _token: '{{ csrf_token() }}',
        //                 fields
        //             },
        //             dataType: "json",
        //             success: function (response) {
        //                 swal("Deleted!", "The demand point file has been deleted successfully.", "success");
        //             }
        //         });
        //     }
        // });
    </script>
@endsection
