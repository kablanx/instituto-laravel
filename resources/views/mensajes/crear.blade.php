@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"> 
                    Crear nuevo mensaje.
                </div>

                @if(session("message"))
                <div class="alert alert-success">{{session("message")}}</div>
                @endif
                <div class="card-body">
                <form action="{{ route('mensajes.save') }}" method="post">
                        @csrf
                        
                        <div class="form-group row">

                            <label for="mensaje " class="col-md-3 col-form-label text-md-right">Mensaje</label>
                            <div class="col-md-7 " >
                                <textarea name="mensaje" class="form-control" required></textarea>

                                @if($errors->has('mensaje'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('mensaje')}}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>   
                        <div class="col-md-6 offset-md-3">
                            <input type="submit" class="btn btn-primary" value="Enviar mensaje">
                        </div>


                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

@endSection