@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.conferencecraft.com/wp-content/uploads/2020/01/instagram-1581266_1920-1200x1191.jpg" class='rounded-circle' style="height: 100px; width: 100px;">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user -> username}}</h1>
            </div>
            <div class="d-flex">
                <div class='pr-5'><strong>153</strong> posts</div>
                <div class='pr-5'><strong>23k</strong> followers</div>
                <div class='pr-5'><strong>212</strong> following</div>
            </div>
            <div class='pt-4 font-weight-bold'>Instagram</div>
            <div> A simple, fun & creative way to capture, edit & share photos, videos & messages with friends & family.</div>
            <div><a href="#">instagram.com</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.flnk2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/22802024_825693490945131_1483075816744026112_n.jpg?_nc_ht=instagram.flnk2-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=O8OXeeV1w8oAX_NlaU5&tp=1&oh=bb620b5e55f98ee6b9e97f1aa092be50&oe=60054FAB" class='w-100'>
        </div>
        <div class="col-4">
            <img src="https://instagram.flnk2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/26067002_175917946349293_6088151489660846080_n.jpg?_nc_ht=instagram.flnk2-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=isWpN8qCzSwAX_Q-lHR&tp=1&oh=d4105ac84fa001377156a21a92be9a9a&oe=60037580" class='w-100'>
        </div>
        <div class="col-4">
            <img src="https://instagram.flnk2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/47582170_2189181011143243_3507868761617944774_n.jpg?_nc_ht=instagram.flnk2-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=Kx4fbn410YQAX9Oaif5&tp=1&oh=742d7683d1eba5caee148e954840ce5b&oe=6005BA8E" class='w-100'>
        </div>
    </div>

</div>
@endsection
