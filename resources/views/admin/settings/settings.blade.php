@extends('layouts.app')


@section('content')

    @foreach($errors->all() as $error)

    <li class="text-danger list-group-item">{{$error}}</li>

    @endforeach

    <div class="card card-default">
        <div class="card-header"> 

           <div class="pt-2 text-center"> <b>Edit Services and About Settings</b></div>

        </div>

        <div class="card-body">
            <form action="{{ route ('setting.update', ['id' => $settings->id]) }} " enctype="multipart/form-data" method="post">
                @csrf


                <div class="form-group">
                    <label for="title">Web Development</label>                    
                    <textarea name="wdev" id="wdev"  class="form-control"cols="3" rows="3"> {{ $settings->wdev }} </textarea>
                </div>

                <div class="form-group">
                    <label for="title">Web Design</label>                    
                    <textarea name="wdesign" id="wdesign"  class="form-control"cols="3" rows="3"> {{ $settings->wdesign }} </textarea>
                </div>
                
                <div class="form-group">
                    <label for="title">Full Responsive</label>                    
                    <textarea name="frespon" id="frespon"  class="form-control"cols="3" rows="3"> {{ $settings->frespon }} </textarea>
                </div>

                <div class="form-group">
                    <label for="title">Ecommerce website</label>                    
                    <textarea name="ecom" id="ecom"  class="form-control"cols="3" rows="3"> {{ $settings->ecom }} </textarea>
                </div>

                <div class="form-group">
                    <label for="title">Personal Website</label>                    
                    <textarea name="pweb" id="pweb"  class="form-control"cols="3" rows="3"> {{ $settings->pweb }} </textarea>
                </div>

                <div class="form-group">
                    <label for="title">Costom Services</label>                    
                    <textarea name="customs" id="customs"  class="form-control"cols="3" rows="3"> {{ $settings->customs }} </textarea>
                </div>

                <hr>
                <div class="text-center"><b> Edit About Section <b> </div>
                <hr>

                <div class="form-group">
                    <label for="title">About1</label>                    
                    <textarea name="about1" id="about1"  class="form-control"cols="3" rows="3"> {{ $settings->about1 }} </textarea>
                </div>

                <div class="form-group">
                    <label for="title">About2</label>                    
                    <textarea name="about2" id="about2"  class="form-control"cols="3" rows="3"> {{ $settings->about2 }} </textarea>
                </div>

                <div class="form-group">
                    <label for="title">About3</label>                    
                    <textarea name="about3" id="about3"  class="form-control"cols="3" rows="3"> {{ $settings->about3 }} </textarea>
                </div>

                <div class="for-group">
                    <div class="text-center">
                        <button class="btn btn-block btn-success" type=submit>Update Settings</button>
                    </div>
                </div>

                

            </form>
        </div>
    </div>
@stop