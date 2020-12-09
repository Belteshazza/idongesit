@extends('layouts.app')

@section('content')


    <div class="card card-default">
        <div class="card-body">
            <table class="table table-hover">
                <thead><b>views Portfolio</b></thead>
                <thead>
                    <th>
                        image
                    </th>

                    <th>
                        title
                    </th>
                    
                    <th>
                        URL
                    </th>

                    <th>
                        caption
                    </th>
                    
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>

                    <tbody>
                            @foreach($posts as $post)
                              <tr>
                                     
                                    <td> <img src="/idee/public/storage/{{ $post->image }}" style="width:100px">  </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->url }}</td>
                                    <td> {{ $post->caption }}</td>
                                    
                                    <td>
                                        
                                        <a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                    </td>
                                    <td>
                                        
                                            
                                            <a href="{{ route('post.destroy', ['post' => $post->id ]) }}" class="btn btn-xs btn-danger" >Delete</a>
                                     
                                    </td>
                                </tr>
                            @endforeach
                         
                    </tbody>
            </table>

        </div>
    </div>

    @stop