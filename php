<?php

   $numeros_minimos_sortear;
   $numeros_maximos_sortear = 99;
   $sorteados = [];

   apostar($idade);

    function apostar($idade): string
    {
        do 
        {
            print("Você tem mais de 18 anos?\n");
            $idade = readline("[1] Sim\n [2] Não\n");

            if ($idade == 2) 
            {
                print("Apostas são apenas para maiores de 18 anos.");
                break;
            }
            else 
            {
                break;
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

       $numeros_minimos_sortear = 6;
       $numeros_maximos_sortear = 20;

       for ($i=0; $i <= $numeros_maximos_sortear; $i++)
        {
            $sorteados[$i] = readline("Insira o {$i}º número");

            for($j=0; $j > $i; $j++)
            {
               ($sorteados[$i] == $sorteados[$j] && $j != $i)
                {
                   $sorteados[$i] = rand(0, 60);
                   $j--;
                }
            }
        }

        print_r($sorteados);

    }

    function quina()
    {
        $numeros_minimos_sortear = 5;
       $numeros_maximos_sortear = 15;
    }
    function lotomania()
    {
        $numeros_minimos_sortear = 50;
       $numeros_maximos_sortear = 50;
    }

    function lotofacil()
    {
        $numeros_minimos_sortear = 15;
       $numeros_maximos_sortear = 20;
    }

    function surpresinha (): void
    {
        for($i=0; $i <= $numeros_maximos_sortear; $i++)
        {
            $sorteados[$i] = rand(0, 60);

            for($j=0; $j > $i; $j++)
            {
                ($sorteados[$i] == $sorteados[$j] && $j != $i)
                {
                    $sorteados[$i] = rand(0, 60);
                    $j--;
                }
            }
        }

        print_r($sorteados);
    }

?>
