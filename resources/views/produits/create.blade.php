@extends('layouts.app')

@section('title', 'Créer Produit')

@section('contents')

    <div class="mb-0">Ajout Produit</div>
    <hr>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titre" id="" class="form-control" placeholder="Titre">
            </div>
            <div class="col">
                <input type="text" name="prix" id="" class="form-control" placeholder="Prix">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="code_produit" id="" class="form-control" placeholder="Code Produit">
            </div>
            <div class="col">
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection