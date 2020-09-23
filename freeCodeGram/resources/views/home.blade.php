@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ftas2-2.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.ftas2-2.fna.fbcdn.net&_nc_ohc=X9KyPasyhJkAX8D_cGd&oh=f45993727dee162766f65b1dc54ec4a1&oe=5F95E867" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{ Auth::user()->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.ftas2-2.fna.fbcdn.net/v/t51.2885-15/e35/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.ftas2-2.fna.fbcdn.net&_nc_cat=103&_nc_ohc=7rtyNFk7IX4AX9ZMrvE&_nc_tp=18&oh=e4e21243908841133b670a00faa60821&oe=5F934D21" class="w-100 h-75">
        </div>
        <div class="col-4">
            <img src="https://instagram.ftas2-2.fna.fbcdn.net/v/t51.2885-15/e35/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.ftas2-2.fna.fbcdn.net&_nc_cat=103&_nc_ohc=NWJlG3aVs3kAX-krqcf&_nc_tp=18&oh=f5aff687f765f9ef2a04b4d689b86646&oe=5F9636B9" class="w-100 h-75">
        </div>
        <div class="col-4">
            <img src="https://instagram.ftas2-2.fna.fbcdn.net/v/t51.2885-15/e35/118614410_230664505046765_5604987870734821551_n.jpg?_nc_ht=instagram.ftas2-2.fna.fbcdn.net&_nc_cat=105&_nc_ohc=X48ECvQEHFIAX-gh5BN&_nc_tp=18&oh=3fc1da39ebafb88dd219f50d12002c9e&oe=5F96AAAA" class="w-100 h-75">
        </div>
    </div>

</div>
@endsection
