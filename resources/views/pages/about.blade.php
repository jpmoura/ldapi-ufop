@extends('layout')

@section('title')
    Sobre
@endsection

@section('description')
    Um pouco sobre o sistema.
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <img src="{{url('public/img/stackholders.png')}}" alt="Stackholders do Sistema" class="center-block img-responsive"/>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="text-justify">
                O LD(AP)I é uma API desenvolvida por <a class="link-ufop" href="https://github.com/jpmoura" target="_blank">João Pedro Santos de Moura</a>
                e <a class="link-ufop" target="_blank" href="https://github.com/plinioroque">Plinio Roque De Almeida Pessoa</a> que tem como objetivo facilitar o
                processo de autenticação e busca de dados em servidores do tipo Active Directory (AD) usando o protocolo LDAP.
            </p>

            <p>
                Essa é uma versão adapatada do projeto original que contém uma interface de usuário customizada,
                com o intuito de usar o mesmo padrão dos sistemas internos existentes no campus do ICEA. Para saber mais sobre a API, clique
                <a class="link-ufop" target="_blank" href="https://github.com/jpmoura/ldapi#ldapi---ptbr">aqui</a>.
            </p>

            <h3 class="text-center">A Fazer</h3>
            <ul>
                <li>Otimizar carregamento de objetos javascript e CSS usando SASS ou LESS;</li>
                <li>Otimizar a "tradução" do apelido do campo em seu nome e vice-versa.</li>
            </ul>
            </p>
        </div>
    </div>
@endsection
