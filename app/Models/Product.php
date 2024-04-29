<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'Name_sneaker',
        'Brand',
        'Color',
        'Origin',
        'Material',
        'Status_Sneaker',
        'Product_Code',
        'Price',
        'Description',
        'Image'
    ];
    public function checkBrands()
    {
        // Lấy danh sách các thương hiệu từ cơ sở dữ liệu
        $brands = Product::select('Brand')
            ->whereIn('Brand', ['Jordan', 'Nike', 'Adidas'])
            ->distinct()
            ->pluck('Brand');

        // Kiểm tra nếu danh sách thương hiệu không rỗng
        if ($brands->isNotEmpty()) {
            // Có ít nhất một thương hiệu được tìm thấy
            foreach ($brands as $brand) {
                echo $brand . " được tìm thấy trong cơ sở dữ liệu. <br>";
            }
        } else {
            // Không tìm thấy thương hiệu nào
            echo "Không tìm thấy thương hiệu Jordan, Nike hoặc Adidas trong cơ sở dữ liệu. <br>";
        }
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id');
    }
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
}
