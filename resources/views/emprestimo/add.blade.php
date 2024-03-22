<div class="modal fade" id="emprestimoModal" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">    
            <div class="container mt-4">    
                <h3>Emprestar Livro</h3>
            </div>
            <form action="{{route('emprestimo.store')}}" method="POST" class="row p-lg-3 gy-2">
                @csrf
                <div class="col-lg-12">  
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="controloUsuarioemprestimo">
                        <label class="form-check-label" for="controloUsuarioemprestimo">Estudante</label>
                    </div>
                </div>
                <div class="col-lg-12" >   
                    <div class="form-floating" style="display: none;" id="divemprestimoestudante">
                        <select class="form-select" id="emprestimoestudante" name="estudante" aria-label="Floating label select example">
                             
                        </select>
                        <label for="emprestimoestudante">Estudante</label>
                    </div>             
               </div>
               <div class="col-lg-12" id="divemprestimodocente">   
                <div class="form-floating">
                    <select class="form-select" id="emprestimodocente" name="genero" aria-label="Floating label select example">
                         
                    </select>
                    <label for="emprestimodocente">Docente</label>
                </div>             
           </div>
               <div class="col-lg-12">   
                    <div class="form-floating">
                        <select class="form-select" id="categorialivro" name="genero" aria-label="Floating label select example">
                            
                        </select>
                        <label for="categorialivro">Livros</label>
                    </div>             
                </div>
                <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="date" class="form-control" id="datainicio" required name="bilhete">
                        <label for="datainicio">Data para Devolução</label>
                    </div>             
                </div>            
                <div class="col-lg-12 mb-3">  
                    <div class="form-floating">
                        <select class="form-select" id="tipoemprestimo" name="curso" aria-label="Floating label select example">
                            
                        </select>
                        <label for="tipoemprestimo">Tipo de Emprestímo</label>
                      </div>
                </div>
                <div class="col-12 ">
                    <button type="submit" name="add_livro" class="btn btn-primary">Adicionar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>    
        </div>
    </div>
</div>    
