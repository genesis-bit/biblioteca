@extends('layouts.app')

@section('content')
      <h1>Emprestimo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Emprestimo</li>
        </ol>
      </nav>
      <section class="section"> 
        <div class="row">
            <div class="col-lg-12">  
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Livros Emprestados</h5>
                    <div class ="container " > <!-- start conatiner -->
                        <div class="d-flex col-lg-12"> <!-- start d-flex -->
                            <div class="col-lg-8"> 
                              <button href="" class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#emprestimoModal"> Adicionar </button>
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
                                  <th>Emprestante<i class="bx bx-user"></i></th>
                                  <th>Livro<i class='bx bxs-book'></i></th>
                                  <th>Tipo Emprestimo</th>
                                  <th>Data do Emprestimo<i class="bi bi-calendar-plus"></i></th>
                                  <th>Data Devolução<i class="bi bi-calendar-x"></i></th>
                                  <th colspan="3">Operações</th>
                              
                              </tr>
                            </thead>               
                            <tbody>  
                                                         
                                
                            </tbody>
                        </table>
                      </div> 
                    </div><!-- end container -->               
                </div>
              </div>  
            </div>
          </div>
      </section>
      @include('emprestimo.add') 
@endsection
             