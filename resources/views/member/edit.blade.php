@extends('layout.main')
@section('title','Edit Member ')
@section('judul','Form Edit Member')
@section('isi')
<form action="{{ route('member.update',['member'=>$member->id]) }}" method="post">
        @csrf
        <div class="form-group mb-2">
            <label>Nama Member</label>
            <input value="{{ $member->nama }}" type="text" name="nama" class="form-control">
          </div>
          <div class="form-group mb-2">
              <label>Alamat</label>
              <input value="{{ $member->alamat }}"type="text" name="alamat" class="form-control">
            </div>

            <div class="form-group mb-2">
                    <label for="validationCustom01" class="form-label">Jenis Kelamin</label>
                    <select class="form-control"name="jenis_kelamin" id="validationCustom01"required>
                    <option value="{{ $member->jenis_kelamin }}">{{ $member->jenis_kelamin }}</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                    </select>
            </div>
            <div class="form-group mb-2">
              <label>Telepon</label>
              <input value="{{ $member->telepon }}"type="text" name="telepon" class="form-control">
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