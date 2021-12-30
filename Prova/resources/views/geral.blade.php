@extends('layouts.basic')

@section('content')

<div class="bg bg-light p-3 rounded position-absolute top-50 start-50 translate-middle conteudo conteudo-lg overflow-scroll">
    <h3>Área geral</h3>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col ">
                <table class="table ">
                    <thead>
                        <tr>
                        <th scope="col">Aplicação</th>
                        <th scope="col" class="text-center">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Dose única</th>
                            <td class="text-center">{{ $dose['unica']}}</td>
                        </tr>

                        <tr>
                            <th>Primeira dose</th>
                            <td class="text-center">{{ $dose['primeira']}}</td>
                        </tr>

                        <tr>
                            <th>Segunda dose</th>
                            <td class="text-center">{{ $dose['segunda']}}</td>
                        </tr>

                        <tr>
                            <th>Dose de reforço</th>
                            <td class="text-center">{{ $dose['reforco']}}</td>
                        </tr>

                        <tr>
                            <th>Cruzada<button type="button" class="btn align-baseline" data-bs-toggle="modal" data-bs-target="#cruzada">
                                <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                </svg>
                            </button></th>
                            <td class="text-center">{{ $dose['cruzada']}}</td>
                        </tr>

                        <tr>
                            <th>TOTAL GERAL</th>
                            <td class="text-center">{{ $dose['total']}}</td>
                        </tr>
    
                    </tbody>
                </table>
            </div>



            <div class="col ">

            <table class="table ">
                    <thead>
                        <tr>
                        <th scope="col">Vacina</th>
                        <th class="text-center">Quantidade</th>
                        <th class="text-end">Porcentagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vacinas as $vacina)
                        <tr>
                            <th>{{ $vacina[0] }}</th>
                            <td class="text-center">{{ $vacina[1] }}</td>
                            <td class="text-end">{{ $vacina[2] }}</td>
                        </tr>
                        @endforeach
                        

                        
    
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    
</div>

<!-- Modal -->
<div class="modal fade" id="cruzada" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vacinação cruzada.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vacinação cruzada acontece quando são aplicadas duas ou mais vacinas diferentes na mesma pessoa.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


@endsection