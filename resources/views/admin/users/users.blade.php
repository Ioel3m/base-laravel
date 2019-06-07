@extends('layouts.app')

@section('content')

    <div class="table-responsive">
        <table class="table">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Creado</th>
                <th scope="col">Acci&#243n</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $index => $user)
                <tr>
                    <th scope="row">{{$index +1}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['created_at']}}</td>
                    <td>
                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                            {{method_field('DELETE')}}
                            @csrf
                            <button type="submit" class="border-0 btn-primary">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
