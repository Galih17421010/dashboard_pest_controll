@extends('layouts.master')
@section('navhead')
@section('title','Services')
<div class="header header-fixed header-logo-center">
    @include('layouts.navhead')
</div>
@endsection
@section('content')
<div class="page-content header-clear-medium">
    <div class="card card-style">
        <div class="content">
            <h1><b> Categories </b>
            <button id="createCategorie" class="btn float-right btn-xxs mb-3 bg-highlight">Add New</button>
        </h1>
            <table id="categories" class="table table-borderless rounded-sm shadow-md">
                <thead class="bg-highlight">
                    <tr>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h1><b> Services </b>
            <button id="createServices" class="btn float-right btn-xxs mb-3 bg-highlight">Add New</button>
        </h1>
            <table id="services" class="table table-borderless rounded-sm shadow-md">
                <thead class="bg-highlight">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Categories</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>



<!-- Add Categorie Modal -->
<div class="modal fade" id="addNewCategorie" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-add-new-address">
      <div class="modal-content card">
        <div class="modal-body ">
          <div class="text-center mb-6">
            <h4 class="address-title mb-2" id="judulModal"></h4>
            <p class="address-subtitle" id="deskripsiModal"></p>
          </div>
          <form id="categorieForm" class="contactForm" name="categorieForm">
            <input type="hidden" name="id" id="id"> @csrf
            <div class="col-12">
              <div class="form-field form-name">
                <label for="name" class="color-theme">Name</label>
                <input type="text" oninput="listingslug(this.value)" id="name" name="name" class="round-small" required />
              </div>
            </div>
            <div class="col-12">
              <div class="form-field form-name">
                <label for="slug" class="color-theme">Description</label>
                <input type="text" id="description" name="description" class="round-small" required ></input>
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-xxs mb-3 bg-highlight" id="simpan" value="create">Submit</button>
              <button type="reset" class="btn btn-xxs mb-3 border-red-dark color-red-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<!--/ Add Categorie Modal -->

<!-- Add Services Modal -->
<div class="modal fade" id="addNewServices" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-add-new-address">
      <div class="modal-content">
        <div class="modal-body ">
          <div class="text-center mb-6">
            <h4 class="address-title mb-2" id="judulModalServices"></h4>
            <p class="address-subtitle" id="deskripsiModalServices"></p>
          </div>
          <form id="servicesForm" class="contactForm" name="servicesForm">
            <input type="hidden" name="idS" id="idS"> @csrf
            <div class="col-12">
              <div class="form-field form-name">
                <label for="name" class="color-theme">Name</label>
                <input type="text" id="nameServices" name="nameServices" class="round-small" required />
              </div>
            </div>
            <div class="col-12">
                <div class="form-field form-name">
                  <label for="price" class="color-theme">Price</label>
                  <input type="number" id="price" name="price" class="round-small" required />
                </div>
            </div>
            <div class="col-12">
                <label for="categories" class="color-theme">Categories</label>
                <div class="input-style has-borders ">

                  <select id="categories" name="categories" required>
                    <option value="default" selected disabled>Selected...</option>
                    <option value="1">Cleaning</option>
                    <option value="2">Laundry</option>
                    <option value="3">Mechanic</option>
                    <option value="4">Pest Control</option>
                  </select>

                </div>
            </div>
            <div class="col-12">
              <div class="form-field form-name">
                <label for="slug" class="color-theme">Description</label>
                <input type="text" id="descriptionServices" name="descriptionServices" class="round-small" required ></input>
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-xxs mb-3 bg-highlight" id="simpan" value="create">Submit</button>
              <button type="reset" class="btn btn-xxs mb-3 border-red-dark color-red-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<!--/ Add Services Modal -->
@endsection
@section('scripts')
<script type="text/javascript" src={{asset("assets/scripts/jquery.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/scripts/datatables-bootstrap5.js")}}></script>
<script type="text/javascript" src={{asset("assets/scripts/sweetalert2.js")}}></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        // Table Categorie
        $(document).ready(function(){
            let table = $('#categories').DataTable({
                processing: true,
                serverSide: true,
                searching: false, paging: false, info: false,
                ajax: "{{ route('categories.index') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#createCategorie').click(function () {
                $('#simpan').val("create-categorie");
                $('#id').val('');
                $('#categorieForm').trigger("reset");
                $('#judulModal').html("Create New Category ");
                $('#deskripsiModal').html("Add new category services");
                $('#addNewCategorie').modal('show');
            });

            $('body').on('click', '.editBtn', function () {
                var id = $(this).data('id');
                $.get("{{ route('categories.index') }}" +'/' + id +'/edit', function (data) {
                    $('#judulModal').html("Edit Categorie");
                    $('#deskripsiModal').html("Edit Categories Services");
                    $('#simpan').val("edit-categorie");
                    $('#addNewCategorie').modal('show');
                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#description').val(data.description);
                })
            });


            $('#categorieForm').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
                $('#simpan').html('Sending...');
                    $.ajax({
                        type:'POST',
                        url: "{{ route('categories.store') }}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: (response) => {
                            $('#simpan').html('Submit');
                            $('#categorieForm').trigger("reset");
                            $('#addNewCategorie').modal('hide');
                            Swal.fire({
                                title: "Success",
                                text: `${response.message}`,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            table.draw();
                        },
                        error: function(response){
                            $('#simpan').html('Submit');
                            $('#categorieForm').find(".print-error-msg").find("ul").html('');
                            $('#categorieForm').find(".print-error-msg").css('display','block');
                            $.each( response.responseJSON.errors, function( key, value ) {
                                $('#categorieForm').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                });

            });

            $('body').on('click', '.deleteBtn', function () {
                var id = $(this).data("id");
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, deleted",
                    customClass: {
                        confirmButton: "btn btn-xxs mb-3 bg-highlight",
                        cancelButton: "btn btn-xxs mb-3 border-red-dark color-red-dark",
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{route('categories.store')}}"+"/"+id,
                            type: "DELETE",
                            data: {id},
                            success: function(response) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: `${response.message}`,
                                    icon: "success",
                                    customClass: { confirmButton: "btn btn-success" },
                                });
                                table.draw();
                            }
                        });
                    }
                });
            });
        });

        // Table Services
        $(document).ready(function(){
            let table = $('#services').DataTable({
                processing: true,
                serverSide: true,
                searching: false, paging: false, info: false,
                ajax: "{{ route('services.index') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'price', name: 'price'},
                    {data: 'categories', name: 'categories'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('#createServices').click(function () {
                $('#simpan').val("create-services");
                $('#idS').val('');
                $('#servicesForm').trigger("reset");
                $('#judulModalServices').html("Create New Services ");
                $('#deskripsiModalServices').html("Add new services");
                $('#addNewServices').modal('show');
            });

            $('body').on('click', '.editBtnServices', function () {
                var id = $(this).data('id');
                $.get("{{ route('services.index') }}" +'/' + id +'/edit', function (data) {
                    $('#judulModalServices').html("Edit Services");
                    $('#deskripsiModalServices').html("Edit Services");
                    $('#simpan').val("edit-services");
                    $('#addNewServices').modal('show');
                    $('#idS').val(data.id);
                    $('#nameServices').val(data.name);
                    $('#price').val(data.price);
                    $('#categories').val(data.categories);
                    $('#descriptionServices').val(data.description);
                })
            });


            $('#servicesForm').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
                $('#simpan').html('Sending...');
                    $.ajax({
                        type:'POST',
                        url: "{{ route('services.store') }}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: (response) => {
                            $('#simpan').html('Submit');
                            $('#servicesForm').trigger("reset");
                            $('#addNewServices').modal('hide');
                            Swal.fire({
                                title: "Success",
                                text: `${response.message}`,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            table.draw();
                        },
                        error: function(response){
                            $('#simpan').html('Submit');
                            $('#servicesForm').find(".print-error-msg").find("ul").html('');
                            $('#servicesForm').find(".print-error-msg").css('display','block');
                            $.each( response.responseJSON.errors, function( key, value ) {
                                $('#servicesForm').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                });

            });

            $('body').on('click', '.deleteBtnServices', function () {
                var id = $(this).data("id");
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, deleted",
                    customClass: {
                        confirmButton: "btn btn-xxs mb-3 bg-highlight",
                        cancelButton: "btn btn-xxs mb-3 border-red-dark color-red-dark",
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{route('services.store')}}"+"/"+id,
                            type: "DELETE",
                            data: {id},
                            success: function(response) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: `${response.message}`,
                                    icon: "success",
                                    customClass: { confirmButton: "btn btn-success" },
                                });
                                table.draw();
                            }
                        });
                    }
                });
            });
        });
    });
    function slugify(text) {
        return text
            .toString()
            .toLowerCase()
            .normalize('NFD')
            .trim()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-');
        }

    function listingslug(text) {
            document.getElementById("description").value = slugify(text);
        }
</script>

@endsection
