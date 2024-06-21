@extends('layout.main')
@section('title','Input Member')
@section('judul','Form Input Member')
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
    <form action="{{ route('member.store')}}" method="post" enctype="multipart/form-data">
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
                    <label for="validationCustom01" class="form-label">Jenis Kelamin</label>
                    <select value=" {{ old('jenis_kelamin')}}" class="form-control " name="jenis_kelamin">
                    <option value="">--Pilih Gender--</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                    </select>
                    <div class="valid-feedback">
                            Looks good!
                </div>
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