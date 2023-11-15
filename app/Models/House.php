<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const AREA = [
        "Gulshan",
        "Banani",
        "Baridhara",
        "Uttara",
        "Dhanmondi",
        "Mirpur",
        "Mohammadpur",
        "Motijheel",
        "Tejgaon",
        "Puran Dhaka",
        "Jatrabari",
        "Elephant Road",
        "Shyamoli",
        "Khilgaon",
        "Bashundhara",
        "Malibagh",
        "Farmgate",
        "Lalmatia",
        "New Market",
        "Wari",
        "Ramna",
        "Kakrail",
        "Moghbazar",
        "Niketon",
        "Hazaribagh",
        "Kamrangirchar",
        "Badda",
        "Rampura",
        "Keraniganj",
        "Gendaria",
        "Shantinagar",
        "Kotwali",
        "Cantonment",
        "Agargaon",
        "Rayer Bazar",
        "Bosila",
        "Shewrapara",
        "Tongi",
        "Gopibagh",
        "Bongshal",
        "Kalyanpur",
        "Tikatuli",
        "Gendaria",
        "Banglamotor",
        "Armanitola",
    ];

    const PRICE_RANGE = [
        5000 => "5,000",
        10000 => "10,000",
        15000 => "15,000",
        20000 => "20,000",
        30000 => "30,000",
        40000 => "40,000",
        50000 => "50,000",
        70000 => "70,000",
        100000 => "1,00,000",
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Image model
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    // Define the relationship with the Image model
    public function firstImage()
    {
        return $this->hasOne(Image::class)->latestOfMany();
    }
}
