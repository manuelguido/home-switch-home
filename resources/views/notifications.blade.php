@extends('layouts.full')

@section('title','Notificaciones')

@section('content')

<div class="container card simple-div">
    <div class="row">
        <div class="col-md-12">
            <h1><i class="fa fa-bell"></i>&nbsp;Notificaciones</h1>
            <hr>
            <br>
            <div class="card">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="row py-4">
                            <div class="col-md-4">
                                Notificaciones
                            </div>
                        </div>
                    @endfor
                </tbody>
            </div>
        </div>
    </div>
</div>

@endsection