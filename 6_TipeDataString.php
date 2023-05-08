<?php
// Single Quote
echo 'Nama : ';
echo 'Indra Rizkiawan' . PHP_EOL;

// Double Quote
echo "Nama : ";
echo "Indra Rizkiawan" . PHP_EOL;

// Heredoc
echo <<<Indra
    Ini adalah Contoh string sangat
    panjang , dan juga ga perlu enter secara
    manual, "Bisa Quote" juga
Indra;

// Heredoc
echo <<<'Indra'
    Ini adalah Contoh string sangat
    panjang , dan juga ga perlu enter secara
    manual, "Bisa Quote" juga
Indra;
