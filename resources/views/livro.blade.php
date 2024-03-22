@extends('layouts.app')

@section('content')
      <h1>Livros</h1>
      <nav>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Livros</li>
          </ol>
      </nav>
    <section class="section"> 
        <div class="row">
          <div class="col-lg-12">  
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Dados dos livros</h5>
                  <div class ="container " > <!-- start conatiner -->
                      <div class="d-flex col-lg-12"> <!-- start d-flex -->
                          <div class="col-lg-8"> 
                            <button href="" class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#livroModal"> Adicionar Livros </button>
                          </div> 
                          
                          <div class="col-lg-3 mx-1" >     
                            <form class="form" action="" method="GET">                      
                                    <input type="text" class="form-control col-lg-2" name="" placeholder="Pesquisar livro">            
                          </div> 
                          <div class="col-lg-2 mx-1" > 
                                    <button type="submit" class="btn btn-secondary "><i class="bi bi-search"></i></button>
                            </form>
                          </div>                       
                      </div> <!-- end d-flex -->
                      <br> 
                    
                   
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                      @foreach ($Livros as $L)     
                        <div class="col">
                          <div class="border border-primary rounded">
                              <div class="border-end border-primary rounded" style="width: 98%;">
                              <div class="border-end border-primary rounded" style="width: 98%;">
                                  <div class="p-2 border-end border-primary rounded" style="width: 98%;">                          
                                          <h3 class="text-title d-flex justify-content-between">
                                              {{$L->titulo}}
                                          </h3>
                                          <ul class="card-text">
                                            <li>Autor: {{$L->autor}}</li>
                                            <li>Editora: {{$L->editora}}</li>
                                          </ul>
                                          <div class="card-text">
                                              <p>{{$L->observacao}}</p>
                                              <p class="text-muted">{{$L->GeneroLivro->descricao}}({{$L->ano_edicao}})</p>
                                          </div>  
                                          <div class="card-footer d-flex justify-content-between">
                                                <button class="btn btn-success "><i class="bi bi-eye-fill"></i></button> 
                                                <button class="btn btn-info" ><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                          </div>                                                    
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div> 
                      @endforeach  
                  </div>
                  </div><!-- end container -->               
              </div>
            </div>  
          </div>
        </div>
    </section>
    @include('livros.add',  ['generosLivro' => $Generos]) 
@endsection