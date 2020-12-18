@extends('layouts.app')

@section('content')


    <div class="card card-default">
        <div class="card-body">
            <table class="table table-hover">
                <thead><b>View Profile</b></thead>
                <thead>
                    <th>
                        image
                    </th>

                    <th>
                        title
                    </th>
                    
                    <th>
                        caption
                    </th>

                    <th>
                        image
                    </th>
                    
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>

                    <tbody>
                            @foreach($profile as $profile)
                              <tr>
                                     
                                    <td> <img src="/developer/public/storage/{{ $profile->image }}" style="width:100px">  </td>
                                    <td>{{ $profile->title }}</td>
                                    <td> {{ $profile->caption }}</td>

                                    <td> <img src="/developer/public/storage/{{ $profile->image2 }}" style="width:100px">  </td>
                                    
                                    <td>
                                        
                                        <a href="{{ route('profiles.edit', ['profile' => $profile->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('profiles.destroy', ['profile' => $profile->id ]) }}" method="post">

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