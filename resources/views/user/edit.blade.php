@extends('layout.main')
@section('title','Edit User')
@section('judul','Form Edit User')
@section('isi')
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        <div class="form-group mb-2">
          <label>Nama User</label>
      <input value="{{ $user->nama }}" type="text" name="nama" 
          class="form-control">
        </div>
        <div class="form-group mb-2">
          <label>Username</label>
      <input value="{{ $user->username }}" type="text" name="username" 
          class="form-control">
        </div>
        <div class="form-group mb-2">
          <label>Password</label>
      <input value="{{ $user->password }}" type="password" name="password" 
          class="form-control">
        </div>
              <div class="form-group mb-2"> 
                <label for="validationCustom01" class="form-label">Outlet</label>
                <select class="form-control " type="password" name="outlet_id" id="validationCustom01"required>
                  <option value="{{ $user->id}}">{{$user->outlets->nama}}</option>
                    @foreach ($outlets as $data)
                    <option value="{{ $data->id}}">{{$data->nama}}</option>    
                    @endforeach
                </select>
                <div class="valid-feedback">
                        Looks good!
            </div>
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