<div class="modal fade" id="estudanteModal" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">    
            <div class="container mt-4">    
                <h3>Novo Estudante <i class="bi bi-person-plus"></i></h3>
            </div>
            <form action="{{route('estudante.store')}}" method="POST" class="row p-lg-3 gy-2">
                @csrf
                <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="titulolivro" name="nome" required >
                        <label for="titulolivro">Nome Estudante</label>
                    </div>             
               </div>
               <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="processo" required  name="processo">
                        <label for="processo">Numero do Processo</label>
                    </div>             
                </div>
                <div class="col-lg-4">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="bilhete" required name="bilhete">
                        <label for="bilhete">Numero do Bilhete</label>
                    </div>             
                </div>
                <div class="col-lg-8">   
                    <div class="form-floating">
                        <input type="text" class="form-control" id="contacto" required name="contacto">
                        <label for="contacto">Contacto</label>
                    </div>             
                </div>
                <div class="col-lg-12">   
                    <div class="form-floating">
                        <input type="email" class="form-control" id="emaill" name="email" required >
                        <label for="emaill">Email</label>
                    </div>             
               </div>                
                <div class="col-lg-12 mb-3">  
                    <div class="form-floating">
                        <select class="form-select" id="curso" name="curso" aria-label="Floating label select example">
                            @foreach ($Cursos as $C)
                                <option value="{{$C->id}}">{{$C->descricao}}</option>
                            @endforeach  
                        </select>
                        <label for="curso">Curso</label>
                      </div>
                </div>
                <div class="col-12 ">
                    <button type="submit" name="add_livro" class="btn btn-primary">Adicionar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>    
        </div>
    </div>
</div>   <!-- end modal-qualifica-adicionar -->
