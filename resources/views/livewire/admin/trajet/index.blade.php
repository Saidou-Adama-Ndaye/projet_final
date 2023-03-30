<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression du Trajet </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyTrajet">
                    <div class="modal-body">
                        Est-ce que vous voulez vraiment supprimez ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Oui. Je confirme</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2>Trajets
                        <a class="btn btn-primary float-end" href="{{ url('admin/trajet/create') }}"> Ajout de
                            Tarjets</a>
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Départ</th>
                                <th>Arrivé</th>
                                <th>Heure</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trajets as $trajet)
                                <tr>
                                    <td>{{ $trajet->id }}</td>
                                    <td>{{ $trajet->depart }}</td>
                                    <td>{{ $trajet->arriver }}</td>
                                    <td>{{ $trajet->heure }}</td>
                                    <td>{{ $trajet->prix }}</td>
                                    <td>
                                        <a href="{{ url('admin/trajet/' . $trajet->id . '/edit') }}"
                                            class="btn btn-warning">Modifier ✏</a>
                                        <a href="#" wire:click="deleteTrajet({{ $trajet->id }})"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            class="btn btn-danger">Supprimer 🗑</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $trajets->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteModal').modal('hide');
        });
    </script>
@endpush
