@extends('layout.head')

@section('title','Users - myMeds')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Usuarios</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Nuevo Usuario</a>

                        <table class="table table-bordered" id="user_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Nombre de Usuario</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->user_name }}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('users.destroy', $user->id) }}" id="delete_form"
                                            method="POST"
                                            onsubmit="return confirm('Esta seguro que desea eliminar el registro?')"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
    $(document).ready(function() {
        $('#user_table').DataTable();
    });
</script>
@endsection