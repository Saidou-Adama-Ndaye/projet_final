@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Ajout de Trajets
                        <a class="btn btn-primary float-end" href="{{ url('admin/chauffeur') }}"> Retour</a>
                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/chauffeur') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <Label for="">Prenom Chauffeur</Label>
                                <input type="text" name="prenom" class="form-control">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Nom Chaffeur</Label>
                                <input type="text" name="nom" class="form-control">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Telephone Chauffeur</Label>
                                <input type="text" name="tel" class="form-control">
                                @error('phone number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Adresse Chauffeur</Label>
                                <input type="text" name="adresse" class="form-control">
                                @error('adresse')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Image Chauffeur</Label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <Label for=""></Label>
                                <button type="submit" class="btn btn-primary float-end">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
