<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //ISI HALAMAN AWAL
    public function home(){
        echo '<a href ="http://localhost:8000/category">halaman produk</a><br>';
        echo '<a href ="http://localhost:8000/berita">halaman news</a><br>';
        echo '<a href ="http://localhost:8000/program">halaman program</a><br>';
        echo '<a href ="http://localhost:8000/aboutus">halaman about us</a><br>';
        echo '<a href ="http://localhost:8000/contactus">halaman contact us</a><br>';
        echo '<br><a href="https://www.educastudio.com/">https://www.educastudio.com/</a>';
    }
    // halaman produk
    public function products(){
        echo '<a href ="http://localhost:8000/category/marbel-edu-games">marbel edu games</a><br>';
        echo '<a href ="http://localhost:8000/category/marbel-and-friends-kids-games">marbel and friends kids games</a><br>';
        echo '<a href ="http://localhost:8000/category/riri-story-books">riri story books</a><br>';
        echo '<a href ="http://localhost:8000/category/kolak-kids-songs">kolak kids songs</a><br>';
    }
    // halaman news
    public function news(){
        echo '<a href ="http://localhost:8000/berita/news">News</a><br>';
        echo '<a href ="http://localhost:8000/berita/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">educa studio berbagi untuk warga sekitar terdampak covid-19</a><br>';   
    }
    // halaman program
    public function program(){
        echo '<a href ="http://localhost:8000/program/karir">Karir</a><br>';
        echo '<a href ="http://localhost:8000/program/magang">Magang</a><br>';
        echo '<a href ="http://localhost:8000/program/kunjungan-industri">Kunjungan Industri</a><br>';
    }
} 
