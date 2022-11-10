@extends('templates.default')

@section('Content')
<h1>Data Siswa</h1>
    <div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>class</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($students as $Student)
                          <tr>
                          <td>{{ $Student->name }}</td>
                          <td>{{ $Student->address }}</td>
                          <td>{{ $Student->phone_number }}</td>
                          <td>{{ $Student->class }}</td>
                          <td>
                            <a href="{{ route('students.edit', $Student->id)}}">Edit</a>
                            <form action="{{ route('students.destroy', $Student) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                    <button class="btn btn-danger"onclick="return confirm('Yakin DECK?')">Delete</button>
                                        </form>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection