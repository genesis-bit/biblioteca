@extends('layouts.app')

@section('content')
      <h1>Livros</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Livros</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section"> 
        <div class="row">
          <div class="col-lg-12">  
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Dados dos livros</h5>
                  <div class ="container " > <!-- start conatiner -->
                      <div class="d-flex col-lg-12"> <!-- start d-flex -->
                          <div class="col-lg-8"> 
                            <button href="" class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#Medicos"> Adicionar Livros </button>
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
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Editora</th>
                                <th>Ano_Edição</th>
                                <th>Categoria</th>
                                <th>Observação</th>
                                <th colspan="3">Operações</th>
                            
                            </tr>
                          </thead>               
                          <tbody>                         
                            <tr>
                              <td>01</td>
                              <td>Pai pobre, pai rico</td>
                              <td>Fernando Boa</td>
                              <td>Livros de Angola</td>
                              <td>2023</td>                  
                              <td>Educação Financeira</td>
                              <td></td>
                              <td>
                                  <button class="btn btn-success " href=""  data-bs-toggle="modal" data-bs-target="#mostrar"><i class="bi bi-eye-fill"></i></button>
                              </td>               
                              <td>
                                  <button class="btn btn-info" name="edit_btn"  id="editbtn"   data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil"></i></button>
                              </td>
                              <td>
                                  <button class="btn btn-danger" href=""  data-bs-toggle="modal" data-bs-target="#apagar"><i class="bi bi-trash"></i></button>
                              </td>               
                            </tr>
                          </tbody>
                      </table>
                    </div> 
                  </div><!-- end container -->               
              </div>
            </div>  
          </div>
        </div>
    </section>

    @include('livros.add') 
@endsection