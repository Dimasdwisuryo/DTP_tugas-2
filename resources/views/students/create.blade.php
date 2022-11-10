@extends('templates.default')

@section('Content')
    <div class='card'>
        <div class='card-body'>
            <form action="{{route ("students.store")}}"method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name='name' class="form-control" name="example-text-input" 
                    placeholder="Tulis namamu">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name='address' class="form-control" name="example-text-input" 
                    placeholder="Tulis alamat lengkapmu">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" name='phone_number' class="form-control" name="example-text-input" 
                    placeholder="Tulis nomor telepon">
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name='class' class="form-control" name="example-text-input" 
                    placeholder="Tulis kelas">
            </div>

            <div class="mb-3">
                <input type='submit' value='Simpan' class='btn btn-primary'>
            </div>
        </form>
    </div>
    </div>
                    
@endsection