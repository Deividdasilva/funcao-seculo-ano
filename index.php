<?php 

    function seculoAno(int $ano) : int
    {
        if ($ano == 1)
        {
            return 1;
        }
        if ($ano > 2101 || $ano < 1)
        {
            return 0;
        }

        return intval(($ano - 2) / 100) + 1;
    }

    echo(seculoAno(1999));
?>