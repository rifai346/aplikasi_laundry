@extends('layout.main')
@section('title','Input Outlet')
@section('judul','Form Input Outlet')
@section('isi')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('outlet.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label class="form-label">Nama</label>
            <input value=" {{old('nama')}}" type="text" name="nama" class="form-control">
          </div>
          <div class="form-group mb-2">
              <label class="form-label">Alamat</label>
              <input value=" {{ old('alamat')}}" type="text" name="alamat" class="form-control"> 
            </div>
            <div class="form-group mb-2">
              <label class="form-label">Telepon</label>
              <input value=" {{ old('telepon')}}" type="text" name="telepon" class="form-control"> 
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
    </form>



    {{--  javascript untuk validasi form bootstrap di atas  --}}
    
  {{--<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
              'use strict'
            
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              const forms = document.querySelectorAll('.needs-validation')
            
              // Loop over them and prevent submission
              Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                  if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                  }
            
                  form.classList.add('was-validated')
                }, false)
              })
            })()
    </script> --}} 
@endsection                             