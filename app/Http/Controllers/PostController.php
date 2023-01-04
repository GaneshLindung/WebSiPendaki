<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function display()
    {

        return view('display',[
            'judul' => 'Gunung',
            'posts' => Post::all()
        ]);

    }

    public function show(Post $post)
    {
        return view('post',[
            'posts' => $post
        ]);
    }

    public function utama()
    {

        return view('Sipendaki',[
            'posts' => Post::all()
        ]);

    }

    // public function index()
    // {

    //     return view('post',[
    //     'nama' => 'Gunung Rinjani',
    //     'gambarU' => 'G.Rinjani.jpg',
    //     'detail' => 'Gunung Rinjani (3726 m) yang mendominasi dengan sebagian besar wilayahnya yang mengesankan di seluruh bagian utara Lombok, adalah gunung berapi tertinggi kedua di Indonesia.',
    //     'status' => 'Tidak Aktif',
    //     'rute' => '//umap.openstreetmap.fr/id/map/gunung-gede_849038?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false',
    //     'rutelink' => '//umap.openstreetmap.fr/id/map/gunung-gede_849038',
    //     'rutepdf' => 'PetaRinjani.pdf',
    //     'harga' => 'Rp. 50.000',
    //     'infodetail' => 'Gunung yang terakhir meletus tahun 2015 lalu ini berada di Pulau Lombok.
    //     Lokasi tepatnya di
    //     Lombok Utara.

    //     Untuk menjangkau lokasi ini, Anda bisa menggunakan transportasi umum seperti angkutan umum
    //     yang berangkat dari Kota Lombok. Anda hanya perlu menyampaikan lokasi tujuan Anda ke supir
    //     angkutan.<br>

    //     Apabila ingin lebih praktis lagi, gunakan mobil pribadi atau mobil sewa dari agen jasa
    //     rental mobil terbaik yang ada di Kota Lombok.',
    //     'foto1' => 'SpotRinjani1.jpg',
    //     'foto2' => 'SpotRinjani2.jpg',
    //     'foto3' => 'SpotRinjani3.jpg',
    //     'contactBC' => '6281809460647',
    //     'contactP' => '6281809460647',
    //     'contactTG' => '6281809460647',
    //     ]);



    // }


}
