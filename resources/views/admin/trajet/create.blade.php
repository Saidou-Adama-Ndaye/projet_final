@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Ajout de Trajets
                        <a class="btn btn-primary float-end" href="{{ url('admin/trajet') }}"> Retour</a>
                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/trajet') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <Label for="">Lieu de Depart</Label>
                                <input type="text" name="depart" class="form-control">
                                @error('depart')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Lieu d'Arriver</Label>
                                <input type="text" name="arriver" class="form-control">
                                @error('destination')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Heure de Depart</Label>
                                <input type="text" name="heure" class="form-control">
                                @error('hour')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Prix du Trajet</Label>
                                <input type="number" name="prix" class="form-control">
                                @error('price')
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
