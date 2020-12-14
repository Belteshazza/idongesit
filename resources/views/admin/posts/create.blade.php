@extends('layouts.app')


@section('content')

    @foreach($errors->all() as $error)

    <li class="text-danger list-group-item">{{$error}}</li>

    @endforeach

    <div class="card card-default">
        <div class="card-header"> 

           <div class="pt-2 text-center"> <b>Add portfoil Post</b></div>

        </div>

        <div class="card-body">
            <form action="{{ route ('posts.store') }}" enctype="multipart/form-data" method="post">
                @csrf


                <div class="form-group">
                    <label for="title">image</label>
                    <input type="file" name="image" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="title">Title</label>

                    <input type="text" name="title" id="title"  class="form-control" value="{{ old('title') }}">
                    
                </div>

                <div class="form-group">
                    <label for="url">URL</label>

                    <input type="text" name="url" id="url"  class="form-control" value="{{ old('url') }}">
                    
                </div>
                
                <div class="form-group">
                    <label for="title">Caption</label>
                    
                    <textarea name="caption" id="caption"  class="form-control"cols="5" rows="5"> {{ old('caption') }} </textarea>
                </div>

                

                <div class="for-group">
                    <div class="text-center">
                        <button class="btn btn-block btn-success" type=submit>Submit</button>
                    </div>
                </div>

                

            </form>
        </div>
    </div>
@stop