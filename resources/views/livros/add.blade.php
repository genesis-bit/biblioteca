<div class="modal fade" id="Medicos" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">    
            <div class="container mt-4">    
                <h3>Adicionar livros  <i class='bx bxs-book'></i></h3>
            </div>
            <form action="{{route('livro.store')}}" method="POST" class="row p-lg-3 gy-2">
                @csrf
                <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="titulolivro" name="titulo" required >
                        <label for="titulolivro">Titulo do Livro</label>
                    </div>             
               </div>
               <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="autorlivro" required  name="autor">
                        <label for="autorlivro">Autor</label>
                    </div>             
                </div>
                <div class="col-lg-4">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="anoedicaolivro" required name="anoedicao">
                        <label for="anoedicaolivro">Ano de Edição</label>
                    </div>             
                </div>
                <div class="col-lg-8">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="editoralivro" required name="editora">
                        <label for="editoralivro">Editora</label>
                    </div>             
                </div>
                
                <div class="col-lg-12">  
                    <div class="form-floating">
                        <select class="form-select" id="categorialivro" name="genero" aria-label="Floating label select example">
                            @foreach ($generosLivro as $G)
                                <option value="{{$G->id}}">{{$G->descricao}}</option>
                            @endforeach  
                        </select>
                        <label for="categorialivro">Categoria</label>
                      </div>
                </div>
                <div class="col-lg-12">   
                    <div class="form-floating">
                        <textarea type="text" class="form-control" id="observacaolivro" required name="observacao"></textarea>
                        <label for="observacaolivro">Observação</label>
                    </div>             
                </div>
                <div class="col-12">
                    <button type="submit" name="add_livro" class="btn btn-primary">Adicionar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>    
        </div>
    </div>
</div>   <!-- end modal-qualifica-adicionar -->
