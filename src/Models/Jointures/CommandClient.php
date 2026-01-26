<?php
namespace App\Models\Jointures;


class CommandClient
{
    public int $id;
    public string $date_creation;
    public float $total_price;
    public string $status;
    public int $user_id;
    public string $name;
}