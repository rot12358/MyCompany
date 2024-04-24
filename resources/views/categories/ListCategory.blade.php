@extends('master.master')
@section('title')
    <div class="container">
        <div class="row">
            <div class="col-lg-9"> <!-- Phần nội dung, chiếm 75% -->
                @foreach($categories as $category)
                    <p>Danh mục : {{ $category->danhmuc }}</p>
                    @foreach($category->posts as $post)
                        <div class="title"><a href="{{ route('post.show',['id' => $post->id]) }}"><b>Tiêu đề : {{ $post->Danhmucbaiviet }}</b></a></div>
                        <div class="content"><p>{{ $post->baiviet }}</p></div>
                    @endforeach
                @endforeach
            </div>
            <div class="col-lg-3"> <!-- Phần logo, chiếm 25% -->
                <div class="logo-partner text-center">Logo đối tác</div>
                <div class="row">
                    @foreach($categories as $category)
                        @foreach($category->posts as $post)
                            <div class="col-lg-6">
                                <img src="{{$post->logodoitac}}" alt="" class="img-fluid">
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
