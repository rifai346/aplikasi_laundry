@extends('layout.main')
@section('title','Edit Paket')
@section('judul','Form Edit Paket')
@section('isi')
    <form action="{{ route('paket.update', $paket->id) }}" method="post">
        @csrf
        <div class="form-group mb-2"> 
                <label for="validationCustom01" class="form-label">OUTLET</label>
                <select class="form-control " type="text" name="outlet_id" id="validationCustom01"required>
                  <option value="{{ $paket->id}}">{{$paket->outlets->nama}}</option>
                    @foreach ($outlets as $data)
                    <option value="{{ $data->id}}">{{$data->nama}}</option>    
                    @endforeach
                </select>
                <div class="valid-feedback">
                        Looks good!
            </div>
        </div>
        <div class="form-group mb-2">
                    <label for="validationCustom01" class="form-label">Jenis Paket</label>
                    <select class="form-control " name="jenis" id="validationCustom01"required>
                    <option value="{{ $paket->jenis }}">{{ $paket->jenis }}</option>
                    <option value="kiloan">Kiloan</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Bed Cover</option>
                    <option value="kaos">Kaos</option>
                    <option value="dll">Dll</option>
                    </select>
            </div>
        <div class="form-group mb-2">
          <label>Nama Paket</label>
      <input value="{{ $paket->nama_paket }}" type="text" name="nama_paket" 
          class="form-control">
        </div>
        <div class="form-group mb-2">
          <label>Harga</label>
      <input value="{{ $paket->harga }}" type="text" name="harga" 
          class="form-control">
        </div>
      
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>



    {{--  javascript untuk validasi form bootstrap di atas  --}}
    
    {{-- <script>// Example starter JavaScript for disabling form submissions if there are invalid fields
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