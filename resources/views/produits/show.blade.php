@extends('layouts.app')

@section('title', 'Show Produit')

@section('contents')

<h1 class="mb-0">Détail Produit</h1>
<hr>

<div class="row mb-3">
    <div class="col">
        <label for="">Titre</label>
        <input type="text" name="titre" value="{{$product->titre}}" class="form-control" placeholder="Titre" readonly>
    </div>
    <div class="col">
        <label for="">Prix</label>
        <input type="text" name="prix" value="{{$product->prix}}" class="form-control" placeholder="Prix" readonly>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <label for="">Code Produit</label>
        <input type="text" name="code_produit" value="{{$product->code_produit}}" class="form-control" placeholder="Code Produit" readonly>
    </div>
    <div class="col">
        <label for="">Description</label>
        <textarea name="description" class="form-control" placeholder="Description" readonly>{{$product->description}}</textarea>
    </div>
</div>

<div class="row">
    <div class="col">
        <label for="">Created At</label>
        <input type="text" name="created_at" value="{{$product->created_at}}" class="form-control" placeholder="created_at" readonly>
    </div>
    <div class="col">
        <label for="">Update At</label>
        <input type="text" name="updated_at" value="{{$product->updated_at}}" class="form-control" placeholder="updated_at" readonly>
    </div>
</div>

@endsection