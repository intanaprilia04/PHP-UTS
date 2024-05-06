<?php

class Hewan
{
    public function bersuara()
    {
        echo "Suara hewan generik\n";
    }
}

class Kucing extends Hewan
{
    public function bersuara()
    {
        echo "Meow!\n";
    }
}

class Anjing extends Hewan
{
    public function bersuara()
    {
        echo "Woof!\n";
    }
}

$kucing = new Kucing();
$anjing = new Anjing();

$kucing->bersuara(); // Menampilkan "Meow!"
$anjing->bersuara(); // Menampilkan "Woof!"