@extends('layouts.app')

@section('title', 'Home Produit')

@section('contents')

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Produit</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">Add Produit</a>
    </div>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Prix</th>
                <th>Produit Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->titre }}</td>
                        <td class="align-middle">{{ $rs->prix }}</td>
                        <td class="align-middle">{{ $rs->code_produit }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic exemple">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-sm btn-secondary">Détail</a>
                                <a href="{{ route('products.edit', $rs->id) }}" type="button" class="btn btn-sm btn-warning">Modifier</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="post" type="button" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm m-0">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Pas de produit</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection