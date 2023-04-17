@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">FORMULAIRE DE MODIFICATION</div>
                    <div class="card-body mx-32">
                        <form action="{{ route('update.post', $mobile->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group my-2">
                                <input type="hidden" name="id" value="{{ $mobile->id }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="exampleInputEmail1">Numero Matricule</label>
                                <input type="text" name="numeromatricule" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $mobile->numeromatricule }}">
                            </div>
                            <div class="form-group my-2">
                                <label for="exampleInputEmail1">Carte Grise</label>
                                <input type="text" name="cartegrise" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $mobile->cartegrise }}">
                            </div>


                            <div class="form-group
                                    my-2">
                                <label for="exampleInputEmail1">Telephone chauffeur</label>
                                <input type="text" name="telchauffeur" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $mobile->telchauffeur }}">
                            </div>
                            <div class="form-group
                                    my-2">
                                <label for="exampleInputEmail1">Telephone Proprietaire</label>
                                <input type="text" name="telproprietaire" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $mobile->telproprietaire }}">
                            </div>
                            <div class="form-group
                                    my-2">
                                <label for="exampleInputEmail1">Date inscription</label>
                                <input type="text" name="dateinscription" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $mobile->dateinscription }}">
                            </div>
                            <button type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
