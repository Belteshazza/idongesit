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
                                     
                                    <td> <img src="/developer/public/storage/{{ $post->image }}" style="width:100px">  </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->url }}</td>
                                    <td> {{ $post->caption }}</td>
                                    
                                    <td>
                                        
                                        <a href="{{ route('posts.edit', ['post' => $post->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                    </td>
                                    <td>
                                        
                                        <form action="{{ route('posts.destroy', ['post' => $post->id ]) }}" method="post">

                                            @csrf
                                            @method('DELETE')
                                        
                                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                         
                    </tbody>
            </table>

        </div>
    </div>

    @stop