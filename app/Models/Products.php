<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;


    protected $table = 'products';

    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'cylinder_capacity',
        'power',
        'transmission',
        'cycle',
        'cooling',
        'cylinders',
        'start',
        'secondary_transmission',
        'wheelbase',
        'front_brake',
        'rear_brake',
        'seat_height',
        'weight',
        'tank_capacity',
        'image_url',
    ];



    /**
     * @return mixed
     */

    /**
     * create function to get all products from database and return them as an array
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */

    /**
     * create function to get a products from database and return it as an array
     *
     * @return mixed
     */
    public function getLowerPrice(): mixed
    {
        return $this->orderBy('price', 'asc')->first();
    }

    /**
     * create function to get a products by year
     *
     * @param integer $year
     * @return mixed
     */
    public function getProductsByYear($year): mixed
    {
        return $this->whereYear('year', $year)->get();
    }

}
