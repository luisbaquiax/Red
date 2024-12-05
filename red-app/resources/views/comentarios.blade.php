<!-- acordion comentario -->
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                Comentarios
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form class="row g-3" action="{{ route('enviarComentario') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $p->id }}" name="id">
                    <div class="col">
                        <input type="text" class="form-control" id="comentario"
                               placeholder="Ingrese un comentario..."
                               name="comentario" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark mb-3">
                            Comentar
                        </button>
                    </div>
                </form>
                @if ($p->comentarios->isEmpty())
                    <p>No hay comentarios.</p>
                @else
                    @foreach ($p->comentarios as $comentario)
                            <input class="form-control m-1" type="text" value="{{ $comentario->contenido }}" readonly>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- acordion comentario -->
