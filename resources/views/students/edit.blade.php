@extends('templates.default')

@section('Content')
    <div class='card'>
        <div class='card-body'>
            <form action="{{route ('students.update', $student->id)}}"method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name='name' class="form-control" name="example-text-input" 
                    placeholder="Tulis namamu" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name='address' class="form-control" name="example-text-input" 
                    placeholder="Tulis alamat lengkapmu" value="{{ $student->address }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" name='phone_number' class="form-control" name="example-text-input" 
                    placeholder="Tulis nomor telepon" value="{{ $student->phone_number }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name='class' class="form-control" name="example-text-input" 
                    placeholder="Tulis kelas" value="{{ $student->class }}">
            </div>

            <div class="mb-3">
                <input type='submit' value='Simpan' class='btn btn-primary'>
            </div>
        </form>
    </div>
    </div>
                    
@endsection