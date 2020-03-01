@extends('layouts.app')

@section('content')

<div class="container">
            <div class="card">
                <div class="card-header">¡Bienvenido!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(auth()->check())
                        Hola, {{Auth::user()->name}}
                    @else
                        Si no tienes cuenta, ¿a qué esperas?
                    @endif
                    <br>
                    <br>
                    <div class="text-right">
                        &copy; S.P.R.
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
