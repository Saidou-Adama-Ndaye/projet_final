@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Modification de Chauffeur
                        <a class="btn btn-primary float-end" href="{{ url('admin/chauffeur') }}"> Retour</a>
                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/chauffeur/'.$chauffeur->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <Label for="">Prenom Chauffeur</Label>
                                <input type="text" name="prenom" value="{{$chauffeur->prenom}}" class="form-control">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Nom Chauffeur</Label>
                                <input type="text" name="nom"  value="{{$chauffeur->nom}}" class="form-control">
                                @error('destination')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Telephone Chauffeur</Label>
                                <input type="text" name="tel"  value="{{$chauffeur->tel}}" class="form-control">
                                @error('phone number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Adresse Chauffeur</Label>
                                <input type="text" name="adresse"  value="{{$chauffeur->adresse}}" class="form-control">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <Label for="">Image Chauffeur</Label>
                                <input type="file" name="image"  value="{{$chauffeur->image}}" class="form-control">
                                <img src="{{asset('/uploads/chauffeur/'.$chauffeur->image)}}" width="60px" height="60px" alt="">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <Label for=""></Label>
                                <button type="submit" class="btn btn-primary float-end">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
