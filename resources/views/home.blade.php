@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">error 419               
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Nothing to see here please log out!
                </div>
            </div>
       
@endsection
