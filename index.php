<?php
$exec = 'python hello.py';

echo 'Execute: '. $exec. "\n";

echo 'Return: ' . exec($exec);
