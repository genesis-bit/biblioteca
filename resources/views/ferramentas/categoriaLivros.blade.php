  <!-- Modal -->
  <div class="modal fade" id="categorialivroModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-list"></i>Categoria de Livros</h5>
          <button type="button" class="btn btn-primary float-end"  data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
            <i class="bi bi-plus-circle-fill"></i>
            Nova Categoria</button>
        </div>
        <div class="modal-body">
           
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Operação</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($GeneroLivro as $G)
                        <tr>
                            <th scope="row">{{$G->id}}</th>
                            <td>{{$G->descricao}}</td>
                            <td> 
                                <button class="btn btn-outline-info"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach       
                </tbody>
              </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-bold" id="exampleModalToggleLabel2"> <i class="bi bi-plus-circle-fill"></i>Nova Categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('categoriaLivro.store')}}"  method="POST">
                @csrf
                   <div class="row g-2">
                        <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" required placeholder="name@example.com" name="descricao">
                            <label for="floatingInputGrid">Nova Categoria</label>
                        </div>
                        </div>
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
            </form>
         
        </div>
        <div class="modal-footer">
          <button class="btn btn-info" data-bs-target="#categorialivroModel" data-bs-toggle="modal" data-bs-dismiss="modal">Ver Lista</button>
        </div>
      </div>
    </div>
  </div>
