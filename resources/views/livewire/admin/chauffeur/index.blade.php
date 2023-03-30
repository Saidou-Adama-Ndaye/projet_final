<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression du Chauffeur </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyChauffeur">
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
                    <h2>Chauffeurs
                        <a class="btn btn-primary float-end" href="{{ url('admin/chauffeur/create') }}"> Ajout de
                            Chauffeurs</a>
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>PRENOM</th>
                                <th>NOM</th>
                                <th>TELEPHONE</th>
                                <th>ADRESSE</th>
                                <th>IMAGE</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chauffeurs as $chauffeur)
                                <tr>
                                    <td>{{ $chauffeur->id }}</td>
                                    <td>{{ $chauffeur->prenom }}</td>
                                    <td>{{ $chauffeur->nom }}</td>
                                    <td>{{ $chauffeur->tel }}</td>
                                    <td>{{ $chauffeur->adresse }}</td>
                                    <td><img src="{{ asset('/uploads/chauffeur/' . $chauffeur->image) }}" width="200px"
                                            height="200px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/chauffeur/' . $chauffeur->id . '/edit') }}"
                                            class="btn btn-warning">Modifier ✏</a>
                                        <a href="#" wire:click="deleteChauffeur({{ $chauffeur->id }})"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            class="btn btn-danger">Supprimer 🗑</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $chauffeurs->links() }}
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
