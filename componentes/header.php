<?php
    $itens = [
        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => '', 'texto' => 'Github'],
        ['href' => '', 'texto' => 'LinkedIn'],
        ['href' => '', 'texto' => 'Twitter'],
    ];

?>
 
 <!-- Cabeçalho -->
    <header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">

        <!-- Logo -->
        <div class="font-bold text-xl text-cyan-600 bg-red-400">
            🐧Meu Portifólio ...
        </div>
            
        <!-- Links -->
        <div>
            <ul class="flex gap-x-3 font-medium">
                
                <?php foreach ($itens as $item): ?>
                    <li><a href="<?=$item['href']?>" class="hover:underline"><?=$item['texto']?></a></li>

                <?php endforeach; ?>

            </ul>
        </div>

    </header>