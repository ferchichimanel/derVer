@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-10">
            <form action="{{ route('article.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header"><strong>Nouveau Article</strong></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="titre" style="color:#3358f4">Titre</label>
                                    <input class="form-control" id="titre" name="titre" type="text" placeholder="Titre de l'article" style="color: black">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="type"style="color:#3358f4">Categorie</label>
                                    <select name="type" id="type" class="form-control" style="color:black">
                                        @foreach(\App\Models\Categorie::all() as $type)
                                            <option value="{{ $type->id }}">{{ $type->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="contenu" style="color:#3358f4">Contenu</label>
                                    <textarea name="contenu" id="contenu" cols="30" rows="5" class="form-control" style="color: black"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-success">Créer</button>
                        <button type="reset" class="btn btn-sm btn-danger">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
