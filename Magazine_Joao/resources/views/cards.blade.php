<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-6 g-4">

        @php
        $produtos = [
            'produto1' => [
                'nome' => 'Bigode Horroroso do F1',
                'preco' => '399.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto2' => [
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto3' => [
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto4' => [
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto5' => [
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto6' => [
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto7' => [
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto8' => [
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto9' => [
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto10' => [
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto11' => [
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto12' => [
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto13' => [
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto14' => [
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto15' => [
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto16' => [
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto17' => [
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto18' => [
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto19' => [
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto20' => [
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto21' => [
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto22' => [
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto23' => [
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto24' => [
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto25' => [
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto26' => [
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto27' => [
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto28' => [
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto29' => [
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto30' => [
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto31' => [
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto32' => [
                'nome' => 'Tênis Fedido do VAP',
                'preco' => '00.01',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto33' => [
                'nome' => 'Cabelo Abajur do João Ryan',
                'preco' => '1000.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto34' => [
                'nome' => 'Unhas ASMR Júlia',
                'preco' => '12999.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto35' => [
                'nome' => 'Paladar Infantil da Alyssa',
                'preco' => '199.90',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto36' => [
                'nome' => 'Shape do Inácio',
                'preco' => '00.99',
                'imagem' => asset('img/Magazine João.png')
            ],
            'produto37' => [
                'nome' => 'Veganismo da Jeni',
                'preco' => '99.99',
                'imagem' => asset('img/Magazine João.png')
            ]
        ]
        @endphp
        @foreach ($produtos as $produto)
        <div class="col-2 card float-start">
            <img src="{{$produto['imagem']}}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$produto['nome']}}</h5>
                <a href="#" class="btn btn-laranja float-start"><i class="bi bi-cart-plus-fill font-size-25"></i></a>
                <h5 class="align-middle padding-16 float-end">R${{$produto['preco']}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
