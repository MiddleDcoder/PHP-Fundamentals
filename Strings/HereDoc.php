<?php

echo <<<EOT
    Be not afraid of greatness;
    some are born great,
    some achieve greatness,
    and other have greatness thrust upon them.

                        - William Shakespeare
EOT;

//always add enter space bellow ending EOT to avoid error
echo "\n"; //for html \n for console
//both the same result
echo <<< HTML
   Be not afraid of greatness;
    some are born great,
    some achieve greatness,
    and other have greatness thrust upon them.

                        - William Shakespeare
HTML;

