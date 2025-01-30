<?php

   $numeros_serem_sorteados = 6;
   $sorteados = [$numeros_serem_sorteados];

   surpresinha();


    function apostar($idade): string
    {
        do 
        {
            print("Você tem mais de 18 anos?\n");
            $idade = readline("[1] Sim\n [2] Não\n");

            if ($idade == 2) 
            {
                print("Apostas são apenas para maiores de 18 anos.");
                exit();
            }

        } while ($idade != 1 || $idade != 2);

        return $idade;
    }

    function como_jogar()
    {
        // paqrte html que explica como jogar
    }

    function mega_sena()
    {
       // parte html que explica mega-sena

        
    }

    function sorteio_mega()
    {

    }


    function quina()
    {
        
    }
    function lotomania()
    {
        
    }

    function lotofacil()
    {
        
    }

    function surpresinha (): void
    {
        for($i=0; $i > 6; $i++)
        {
            $sorteados[$i] = rand(0, 60);

            for($j=0; $j > 6; $j++)
            {
                if ($sorteados[$i] == $sorteados[$j] && $j != $i)
                {
                    $sorteados[$i] = rand(0, 60);

                    $j--;
                }
            }
        }

        for ($i=0; $i < 6; $i++) 
        { 
            print($sorteados[$i]);
        }
    }

?>
