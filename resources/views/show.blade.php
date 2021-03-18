@extends('layouts.app')


@section('content')

<div class="container-fluid card card-default">
    <div class="row">
        <div class="col-3 card-body">
        </div>

        <div class="col-6">
            <a href="{{ $post->url }}">
            <img src="/developer/public/storage/{{ $post->image }}" class=" img-fluid " style="box-shadow:0 0 4px 9px rgb(177, 172, 172);  ">
        </a>

        
            <div style="padding-top:25px" class="text-center">
                {{ $post->title }}
               
            </div>

            <div class="text-center" style="padding:25px max-width:150px">{{ $post->caption }}</div> 
         
            <div class="text-center"><a href="{{ $post->url }}">Click to view</a></div>
         
            </div>
        
    
            <div class="col-3">
    
            

             
         </div>

         
    </div>

@stop