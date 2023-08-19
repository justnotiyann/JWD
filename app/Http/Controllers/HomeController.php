<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // scope / jangakuan = PUBLIC PRIVATE PROTECTED
    // INHERITENCE / penurunan sifat
    // oop

    public function getRandomNumber()
    {
        $numbers = [3.4, 2.9];
        $randomNumber = $numbers[array_rand($numbers)]; // Memilih angka secara acak dari array
        return $randomNumber;
    }


    public function index()
    {
        $randomNumber = $this->getRandomNumber();
        return view('welcome', compact('randomNumber'));
    }

    public function hasil()
    {
        $result = Beasiswa::orderBy('created_at', 'desc')->get();
        return view('hasil', compact('result'));
    }


}
