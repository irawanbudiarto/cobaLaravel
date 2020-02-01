@extends('layout.main')

@section('title', 'Daftar Member')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Member</h1>

                <table class="table">
                    <thead class="thead-dark">
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Irawan Budiarto</td>
                            <td>Pemalang, Jawa Tengah</td>
                            <td>087886791512</td>
                            <td>irawanbudiarto96@gmail.com</td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
