@extends('layout.main')
@section('title','Edit Outlet')
@section('judul','Form Edit Outlet')
@section('isi')
<form action="{{ route('outlet.update',['outlet'=>$outlet->id]) }}" method="post">
        @csrf
        <div class="form-group mb-2">
            <label>Nama Outlet</label>
            <input value="{{ $outlet->nama }}" type="text" name="nama" class="form-control">
          </div>
          <div class="form-group mb-2">
              <label>Alamat</label>
              <input value="{{ $outlet->alamat }}"type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group mb-2">
              <label>Telepon</label>
              <input value="{{ $outlet->telepon }}"type="text" name="telepon" class="form-control">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">EDIT</button>
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