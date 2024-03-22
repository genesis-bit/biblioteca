@extends('layouts.app')

@section('content')
      <h1>Estudantes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Estudantes</li>
        </ol>
      </nav>
      <section class="section"> 
        <div class="row">
          <div class="col-lg-12">  
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Lista de Estudantes</h5>
                  <div class ="container " > <!-- start conatiner -->
                      <div class="d-flex col-lg-12"> <!-- start d-flex -->
                          <div class="col-lg-8"> 
                            <button href="" class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#estudanteModal"> Adicionar Estudantes </button>
                          </div> 
                          
                          <div class="col-lg-3 mx-1" >     
                            <form class="form" action="" method="GET">                      
                                    <input type="text" class="form-control col-lg-2" name="nome_medicos" placeholder="Pesquisar livro">            
                          </div> 
                          <div class="col-lg-2 mx-1" > 
                                    <button type="submit" class="btn btn-secondary "><i class="bi bi-search"></i></button>
                            </form>
                          </div>                       
                      </div> <!-- end d-flex -->
                      <br> 
                      <div class=" table-responsive">                    
                      <table id="dataid" class="table table-striped table-hover">                        
                          <thead>               
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Processo Nº</th>
                                <th>Numero Bilhete</th>
                                <th>Curso</th>
                                <th>Contacto</th>
                                <th colspan="3">Operações</th>
                            
                            </tr>
                          </thead>               
                          <tbody>  
                              @foreach ($Estudantes as $E)                              
                               <tr>
                                    <td>{{$E->id}}</td>
                                    <td>{{$E->nome}}</td>
                                    <td>{{$E->numero_estudante}}</td>
                                    <td>{{$E->numero_bilhete}}</td>
                                    <td>{{$E->Curso->descricao}}</td>
                                    <td>{{$E->contacto}}</td>   
                                    <td>
                                        <button class="btn btn-success "><i class="bi bi-eye-fill"></i></button>
                                    </td>               
                                    <td>
                                        <button class="btn btn-info" ><i class="bi bi-pencil"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>               
                                </tr>
                              @endforeach                         
                           
                          </tbody>
                      </table>
                    </div> 
                  </div><!-- end container -->               
              </div>
            </div>  
          </div>
        </div>
      </section>
      @include('estudantes.add') 
@endsection