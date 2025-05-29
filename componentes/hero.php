<?php
    $itens = [
        ['href' => 'http://', 'src' => '/img/twitter.png', "alt" => 'Twitter logo'],
        ['href' => 'http://', 'src' => '/img/facebook.png', "alt" => 'Facebook logo'],
        ['href' => 'http://', 'src' => '/img/linkedin.png', "alt" => 'LinkedIn logo'],
        ['href' => 'http://', 'src' => '/img/youtube.png', "alt" => 'Youtube logo'],
        
    ];

?>

<section class="flex gap-x-3">
    
            <!-- Título e Descrição -->
            <div class="w-2/3">
                <h1 class="text-3xl font-bold">Oi, meu nome é Anderson.</h1>
                <p class="text-xl leading-6 mt-6">
                    Atualmente trabalho como Analista programador no <a href="https://www.a12.com/santuario">Santuário Nacional de Nossa Senhora Aparecida.</a>  Concluí o curso de Análise e desenvolvimento de sistemas na <a href="https://www.fatecguaratingueta.edu.br/">Fatec Guaratinguetá.</a> Me considero uma pessoa que tem facilidade de aprendizado e trabalho bem em equipe, estou sempre disposto a novos desafios e oportunidades de crescimento pessoal e profissional. Estou em busca de aperfeiçoar os meus conhecimentos para que eu possa me tornar uma profissional mais completo.
                </p>
                <ul class="flex gap-x-3 mt-3">
                    <?php foreach ($itens as $item): ?>
                        <li>
                            <a href="<?=$item['href']?>" target="_blank">
                                <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>">
                            </a>
                    </li>

                    <?php endforeach; ?>

                </ul>
            </div>
    
            <!-- Imagem -->
            <div class="w-1/3 flex items-center justify-center">
                <div>
                    <img class="h-60 -mt-6 hover:animate-pulse" src="/img/avatar.svg" alt="Foto Anderson">
                </div>
            </div>
    
        </section>