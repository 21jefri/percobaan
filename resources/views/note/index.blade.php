@extends('layouts.app')
@section('content')
@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
    });
</script>
@endif
    <div class="modal fade" id="form-senin" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #1B3061">
                    <h5 class="modal-title text-white" id="myExtraLargeModalLabel">Tambah Pelatihan</h5>
                    <button type="button" class="btn-close" style="background-color: white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="form-create" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-xxl-12 col-lg-12 col-12">
                                <div class="mb-3">
                                    <label for="update-year">Nama</label>
                                    <input type="name" class="form-control" name="name" id="name"
                                        placeholder="masukan Judul Catatan">
                                    @error('name')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-12">
                                <div class="mb-3">
                                    <label for="update-source_found">Deskripsi</label>
                                    <textarea name="description" id="description" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
                                    @error('description')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex justify-content-header gap-3">
                            <div class="">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                                    Batal
                                </button>
                            </div>
                            <div class="">
                                <button type="submit" class="btn text-white"
                                    style="background-color: #1B3061">Simpan</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <div class="">
                        <ul class="nav nav-tabs nav-tabs-custom card-header-tabs ms-auto" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#post-senin" role="tab">
                                    Senin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#post-selasa" role="tab">
                                    Selasa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#post-rabu" role="tab">
                                    Rabu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#post-kamis" role="tab">
                                    Kamis
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#post-jumat" role="tab">
                                    Jumat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#post-sabtu" role="tab">
                                    Sabtu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#post-minggu" role="tab">
                                    Minggu
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card-body">

                    <div data-simplebar style="max-height: 500px;">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="post-senin" role="tabpanel">
                                <input type="hidden" value="senin" id="day" name="day">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h4 style="font-weight: 600" class="text-dark">
                                            Catatan Hari Senin
                                        </h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-2">
                                        <button data-bs-toggle="modal" data-bs-target="#form-senin"
                                            class="btn text-white" style="background-color: #1B3061">
                                            Tambah Note
                                        </button>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush" id="data-senin">

                                </ul>
                            </div>
                            <div class="tab-pane" id="post-selasa" role="tabpanel">
                                <input type="hidden" value="selasa" id="day" name="day">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h4 style="font-weight: 600" class="text-dark">
                                            Catatan Hari Selasa
                                        </h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-2">
                                        <button data-bs-toggle="modal" data-bs-target="#form-senin"
                                            class="btn text-white" style="background-color: #1B3061">
                                            Tambah Note
                                        </button>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush" id="data-selasa">

                                </ul>
                            </div>
                            <div class="tab-pane" id="post-rabu" role="tabpanel">
                                <input type="hidden" value="rabu" id="day" name="day">

                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h4 style="font-weight: 600" class="text-dark">
                                            Catatan Hari Rabu
                                        </h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-2">
                                        <button data-bs-toggle="modal" data-bs-target="#form-senin"
                                            class="btn text-white" style="background-color: #1B3061">
                                            Tambah Note
                                        </button>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush" id="data-rabu">

                                </ul>
                            </div>
                            <div class="tab-pane" id="post-kamis" role="tabpanel">
                                <input type="hidden" value="kamis" id="day" name="day">

                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h4 style="font-weight: 600" class="text-dark">
                                            Catatan Hari Kamis
                                        </h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-2">
                                        <button data-bs-toggle="modal" data-bs-target="#form-senin"
                                            class="btn text-white" style="background-color: #1B3061">
                                            Tambah Note
                                        </button>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush" id="data-kamis">

                                </ul>
                            </div>
                            <div class="tab-pane" id="post-jumat" role="tabpanel">
                                <div class="d-flex justify-content-between">
                                    <input type="hidden" value="jumat" id="day" name="day">
                                    <div class="">
                                        <h4 style="font-weight: 600" class="text-dark">
                                            Catatan Hari Jumat
                                        </h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-2">
                                        <button data-bs-toggle="modal" data-bs-target="#form-senin"
                                            class="btn text-white" style="background-color: #1B3061">
                                            Tambah Note
                                        </button>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush" id="data-jumat">
                                </ul>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="post-sabtu" role="tabpanel">
                                <div class="d-flex justify-content-between">
                                    <input type="hidden" value="sabtu" id="day" name="day">
                                    <div class="">
                                        <h4 style="font-weight: 600" class="text-dark">
                                            Catatan Hari Sabtu
                                        </h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-2">
                                        <button data-bs-toggle="modal" data-bs-target="#form-senin"
                                            class="btn text-white" style="background-color: #1B3061">
                                            Tambah Note
                                        </button>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush" id="data-sabtu">

                                </ul>
                            </div>
                            <div class="tab-pane" id="post-minggu" role="tabpanel">
                                <div class="d-flex justify-content-between">
                                    <input type="hidden" value="minggu" id="day" name="day">
                                    <div class="">
                                        <h4 style="font-weight: 600" class="text-dark">
                                            Catatan Hari Minggu
                                        </h4>
                                    </div>
                                    <div class="d-flex justify-content-end mt-1 mb-2">
                                        <button data-bs-toggle="modal" data-bs-target="#form-senin"
                                            class="btn text-white" style="background-color: #1B3061">
                                            Tambah Note
                                        </button>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush" id="data-minggu">

                                </ul>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-delete />
@endsection
@section('script')
    <script>
        get()

        function get() {
            $.ajax({
                url: "data.note",
                type: 'GET',
                dataType: "JSON",
                success: function(response) {
                    $('#data-senin').empty();
                    if (response.notes.length > 0) {
                        $.each(response.notes, function(index, item) {
                            var data = `
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-3">${item.name}</h4>
                                                <p class="text-muted">${item.description}</p>
                                                <div>
                                                    <button class="btn btn-delete btn-danger" id="${item.id}" data-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/jobs.png') }}" alt="" height="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#data-senin').append(data);
                        });
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `data.destroy/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                    } else {
                        var data = `<div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Masih kosong !!</h4>
                                        </div>
                                    </div>`;
                        $('#data-senin').append(data);
                    }
                }
            });
        }
        selasa()

        function selasa() {
            $.ajax({
                url: "data.selasa",
                type: 'GET',
                dataType: "JSON",
                success: function(response) {
                    $('#data-selasa').empty();
                    if (response.notes.length > 0) {
                        $.each(response.notes, function(index, item) {
                            var data = `
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-3">${item.name}</h4>
                                                <p class="text-muted">${item.description}</p>
                                                <div>
                                                    <button class="btn btn-delete btn-danger" id="${item.id}" data-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/jobs.png') }}" alt="" height="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#data-selasa').append(data);
                        });
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `data.destroy/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                    }  else {
                        var data = `<div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Masih kosong !!</h4>
                                        </div>
                                    </div>`;
                        $('#data-selasa').append(data);
                    }
                }
            });
        }
        rabu()

        function rabu() {
            $.ajax({
                url: "data.rabu",
                type: 'GET',
                dataType: "JSON",
                success: function(response) {
                    $('#data-rabu').empty();
                    if (response.notes.length > 0) {
                        $.each(response.notes, function(index, item) {
                            var data = `
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-3">${item.name}</h4>
                                                <p class="text-muted">${item.description}</p>
                                                <div>
                                                    <button class="btn btn-delete btn-danger" id="${item.id}" data-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/jobs.png') }}" alt="" height="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#data-rabu').append(data);
                        });
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `data.destroy/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                    }  else {
                        var data = `<div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Masih kosong !!</h4>
                                        </div>
                                    </div>`;
                        $('#data-rabu').append(data);
                    }
                }
            });
        }
        kamis()

        function kamis() {
            $.ajax({
                url: "data.kamis",
                type: 'GET',
                dataType: "JSON",
                success: function(response) {
                    $('#data-kamis').empty();
                    if (response.notes.length > 0) {
                        $.each(response.notes, function(index, item) {
                            var data = `
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-3">${item.name}</h4>
                                                <p class="text-muted">${item.description}</p>
                                                <div>
                                                    <button class="btn btn-delete btn-danger" id="${item.id}" data-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/jobs.png') }}" alt="" height="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#data-kamis').append(data);
                        });
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `data.destroy/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                    }  else {
                        var data = `<div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Masih kosong !!</h4>
                                        </div>
                                    </div>`;
                        $('#data-kamis').append(data);
                    }
                }
            });
        }
        jumat()

        function jumat() {
            $.ajax({
                url: "data.jumat",
                type: 'GET',
                dataType: "JSON",
                success: function(response) {
                    $('#data-jumat').empty();
                    if (response.notes.length > 0) {
                        $.each(response.notes, function(index, item) {
                            var data = `
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-3">${item.name}</h4>
                                                <p class="text-muted">${item.description}</p>
                                                <div>
                                                    <button class="btn btn-delete btn-danger" id="${item.id}" data-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/jobs.png') }}" alt="" height="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#data-jumat').append(data);
                        });
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `data.destroy/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                    }  else {
                        var data = `<div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Masih kosong !!</h4>
                                        </div>
                                    </div>`;
                        $('#data-jumat').append(data);
                    }
                }
            });
        }
        sabtu()

        function sabtu() {
            $.ajax({
                url: "data.sabtu",
                type: 'GET',
                dataType: "JSON",
                success: function(response) {
                    $('#data-sabtu').empty();
                    if (response.notes.length > 0) {
                        $.each(response.notes, function(index, item) {
                            var data = `
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-3">${item.name}</h4>
                                                <p class="text-muted">${item.description}</p>
                                                <div>
                                                    <button class="btn btn-delete btn-danger" id="${item.id}" data-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/jobs.png') }}" alt="" height="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#data-sabtu').append(data);
                        });
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `data.destroy/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                    } else {
                        var data = `<div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Masih kosong !!</h4>
                                        </div>
                                    </div>`;
                        $('#data-sabtu').append(data);
                    }
                }
            });
        }
        minggu()

        function minggu() {
            $.ajax({
                url: "data.minggu",
                type: 'GET',
                dataType: "JSON",
                success: function(response) {
                    $('#data-minggu').empty();
                    if (response.notes.length > 0) {
                        $.each(response.notes, function(index, item) {
                            var data = `
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-3">${item.name}</h4>
                                                <p class="text-muted">${item.description}</p>
                                                <div>
                                                    <button class="btn btn-delete btn-danger" id="${item.id}" data-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg></button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="{{ asset('assets/images/jobs.png') }}" alt="" height="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#data-minggu').append(data);
                        });
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `data.destroy/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                    }  else {
                        var data = `<div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Masih kosong !!</h4>
                                        </div>
                                    </div>`;
                        $('#data-minggu').append(data);
                    }
                }
            });
        }
        $('#form-create').submit(function(e) {
            $('.preloader').show();
            e.preventDefault();
            var targetTab = $('.nav-link.active').attr("href"); // Mendapatkan ID tab yang aktif
            if (targetTab === "#post-senin") {
                var hiddenValue = $("#day").val(); // Mendapatkan nilai input hidden
                // Kirim nilai input hidden ke AJAX atau lakukan tindakan lain yang diinginkan
                $(this).append('<input type="hidden" name="day" value="senin">');
            } else if (targetTab === "#post-selasa") {
                var hiddenValue = $("#day").val(); // Mendapatkan nilai input hidden
                // Kirim nilai input hidden ke AJAX atau lakukan tindakan lain yang diinginkan
                $(this).append('<input type="hidden" name="day" value="selasa">');
            } else if (targetTab === "#post-rabu") {
                var hiddenValue = $("#day").val(); // Mendapatkan nilai input hidden
                // Kirim nilai input hidden ke AJAX atau lakukan tindakan lain yang diinginkan
                $(this).append('<input type="hidden" name="day" value="rabu">');
            } else if (targetTab === "#post-kamis") {
                var hiddenValue = $("#day").val(); // Mendapatkan nilai input hidden
                // Kirim nilai input hidden ke AJAX atau lakukan tindakan lain yang diinginkan
                $(this).append('<input type="hidden" name="day" value="kamis">');
            } else if (targetTab === "#post-jumat") {
                var hiddenValue = $("#day").val(); // Mendapatkan nilai input hidden
                // Kirim nilai input hidden ke AJAX atau lakukan tindakan lain yang diinginkan
                $(this).append('<input type="hidden" name="day" value="jumat">');
            } else if (targetTab === "#post-sabtu") {
                var hiddenValue = $("#day").val(); // Mendapatkan nilai input hidden
                // Kirim nilai input hidden ke AJAX atau lakukan tindakan lain yang diinginkan
                $(this).append('<input type="hidden" name="day" value="sabtu">');
            } else if (targetTab === "#post-minggu") {
                var hiddenValue = $("#day").val(); // Mendapatkan nilai input hidden
                // Kirim nilai input hidden ke AJAX atau lakukan tindakan lain yang diinginkan
                $(this).append('<input type="hidden" name="day" value="minggu">');
            }
            $.ajax({
                url: "data.store",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    get(1)
                    selasa(1)
                    rabu(1)
                    kamis(1)
                    jumat(1)
                    sabtu(1)
                    minggu(1)
                    $('.preloader').fadeOut();
                    Swal.fire({
                        title: 'Berhasil!',
                        icon: 'success',
                        text: response.message
                    })
                    $('#form-senin').modal('hide')
                    $('#day').val('');
                    $('#description').val('');
                    $('#name').val('');
                },
                error: function(response) {
                    $('.preloader').fadeOut();
                    Swal.fire({
                        title: 'Error!',
                        icon: 'error',
                        text: "Terdapat masalah saat input data"
                    });
                    var response = response.responseJSON
                    var status = response.meta.code
                    if (status == 422) {
                        handleValidate(response.data, 'create')
                    }
                }
            });
        });
    </script>
@endsection
