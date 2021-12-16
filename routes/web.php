<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');

// tentang jelantah

Route::get('/minyak', function () {
    return view('tentang-jelantah.minyak');
})->name('minyak');

Route::get('/dampak', function () {
    return view('tentang-jelantah.dampak');
})->name('dampak');

Route::get('/regulasi', function () {
    return view('tentang-jelantah.regulasi');
})->name('regulasi');

// produk
Route::get('/produk', function () {
    return view('produk.index');
})->name('produk');

// jelantah heroes
Route::get('/not-login', function () {
    return view('jelantah-heroes.jelantah-heroes-not-login');
})->name('not-login');

Route::get('/heroes-login', function () {
    return view('jelantah-heroes.jelantah-heroes-login');
})->name('heroes-login');

// about

Route::get('/about', function () {
    return view('about.index');
})->name('about');

// login
Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/signup', function () {
    return view('login.signup');
})->name('signup');

Route::get('/forget', function () {
    return view('login.forget');
})->name('forget');

Route::get('/change', function () {
    return view('login.change');
})->name('change');

Route::get('/join', function () {
    return view('login.join');
})->name('join');

// lainnya
Route::get('/informasi', function () {
    return view('lainnya.informasi');
})->name('informasi');

Route::get('/materi', function () {
    return view('lainnya.materi');
})->name('materi');

Route::get('/detail', function () {
    return view('lainnya.detail');
})->name('detail');

Route::get('/statistik', function () {
    return view('lainnya.statistik');
})->name('statistik');

Route::get('/sapa', function () {
    return view('lainnya.sapa-relawan');
})->name('sapa');

Route::get('/dokumentasi', function () {
    return view('lainnya.dokumentasi-kegiatan');
})->name('dokumentasi');

Route::get('/lihat-semuanya', function () {
    return view('lainnya.lihat-semuanya');
})->name('lihat-semuanya');

Route::get('/galeri', function () {
    return view('lainnya.galeri');
})->name('galeri');

// program
Route::get('/edukasi-kampanye', function () {
    return view('program.edukasi-kampanye');
})->name('edukasi-kampanye');

Route::get('/pengumpulan-jelantah', function () {
    return view('program.pengumpulan-jelantah');
})->name('pengumpulan-jelantah');

Route::get('/pengelolaan-jelantah', function () {
    return view('program.pengelolaan-jelantah');
})->name('pengelolaan-jelantah');

Route::get('/aksi-sosial', function () {
    return view('program.aksi-sosial');
})->name('aksi-sosial');

// blog
Route::get('/blog', function () {
    return view('blog.index');

})->name('blog');

Route::get('/blog/read', function () {
    return view('blog.read');

})->name('blog-read');

Route::get('/blog/read1', function () {
    return view('blog.read1');

})->name('blog-read1');

Route::get('/blog/read2', function () {
    return view('blog.read2');

})->name('blog-read2');

Route::get('/blog/read3', function () {
    return view('blog.read3');

})->name('blog-read3');

