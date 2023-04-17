@extends('layouts.app')
@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Numero matricule</th>
                <th scope="col">Cartegrise</th>
                <th scope="col">Tel chauffeur</th>
                <th scope="col">Tel proprietaire</th>
                <th scope="col">Date inscription</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobiles as $mobile)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $mobile->numeromatricule }}</td>
                    <td>{{ $mobile->cartegrise }}</td>
                    <td>{{ $mobile->telchauffeur }}</td>
                    <td>{{ $mobile->telproprietaire }}</td>
                    <td>{{ $mobile->dateinscription }}</td>
                    <td>
                        <a href="/edit-post/{{$mobile->id}}">Edit</a>
                        <a href="/delete-post/{{$mobile->id}}">Delete</a>
                        <a href="{{ route('vue', $mobile->id) }}">Delete</a>
                </tr>
            @endforeach

        </tbody>
    </table>
    <form action="{{ route('recherche')}}" method="post">
        @csrf
        <div class="form-group my-2">
            <label for="exampleInputEmail1">Recherche</label>
            <input type="text" name="matricule" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp" placeholder="Faire une recherche">
        </div>
        <input type="submit" value="Envoyer">
    </form>
@endsection
