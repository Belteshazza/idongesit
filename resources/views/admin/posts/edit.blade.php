@extends('layouts.app')


@section('content')

    @foreach($errors->all() as $error)

    <li class="text-danger list-group-item">{{$error}}</li>

    @endforeach

    <div class="card card-default">
        <div class="card-header">

           <div class="pt-2 text-center"> <b>Edit Portfoil Post</b></div>

        </div>

        <div class="card-body">
            <form action="{{ route ('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
        
                


                <div class="form-group">
                    <label for="title">image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="title">Title</label>

                    <input type="text" name="title" id="title"  class="form-control" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="url">Url</label>

                    <input type="text" name="url" id="url"  class="form-control" value="{{ $post->url }}">
                </div>

                <div class="form-group">
                    <label for="title">Caption</label>
                    
                    <textarea name="caption" id="caption"  class="form-control"cols="5" rows="5"> {{ $post->caption }}</textarea>
                </div>

                

                <div class="for-group">
                    <div class="text-center">
                        <button class="btn btn-block btn-success" type=submit>update Post</button>
                    </div>
                </div>

                

            </form>
        </div>
    </div>
@stop