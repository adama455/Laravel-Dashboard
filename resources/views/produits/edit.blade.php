@extends('layouts.app')

@section('title', 'Edit Produit')

@section('contents')

<h1 class="mb-0">Modifier Produit</h1>
<hr>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="titre" value="{{ $product->titre  }}" class="form-control" placeholder="Titre">
        </div>
        <div class="col">
            <input type="text" name="prix" value="{{ $product->prix  }}" class="form-control" placeholder="Prix">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="code_produit" value="{{ $product->code_produit  }}" class="form-control" placeholder="Code Produit">
        </div>
        <div class="col">
            <textarea name="description" class="form-control" placeholder="Description">{{ $product->description }}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-warning btn-sm">Modifier</button>
        </div>
    </div>
</form>

@endsection