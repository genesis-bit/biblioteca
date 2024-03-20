<div class="modal fade" id="Medicos" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">    
            <div class="container mt-4">    
                <h3>Adicionar livros  <i class='bx bxs-book'></i></h3>
            </div>
            <form action="" method="POST" class="row p-lg-3 gy-2">
                <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="titulolivro" required placeholder="name@example.com" name="descricao">
                        <label for="titulolivro">Titulo do Livro</label>
                    </div>             
               </div>
               <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="autorlivro" required placeholder="name@example.com" name="descricao">
                        <label for="autorlivro">Autor</label>
                    </div>             
                </div>
                <div class="col-lg-4">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="anoedicaolivro" required placeholder="name@example.com" name="descricao">
                        <label for="anoedicaolivro">Ano de Edição</label>
                    </div>             
                </div>
                <div class="col-lg-8">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="editoralivro" required placeholder="name@example.com" name="descricao">
                        <label for="editoralivro">Editora</label>
                    </div>             
                </div>
                
                <div class="col-lg-12">  
                    <div class="form-floating">
                        <select class="form-select" id="categorialivro" aria-label="Floating label select example">
                          <option></option>
                          <option value="1">One</option>
                        </select>
                        <label for="categorialivro">Categoria</label>
                      </div>
                </div>
                <div class="col-lg-12">   
                    <div class="form-floating">
                        <textarea type="text" class="form-control" id="observacaolivro" required placeholder="name@example.com" name="descricao"></textarea>
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
