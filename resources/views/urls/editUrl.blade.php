@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar url
                </div>

                <form style="padding-top: 25px" class="container form-group"  action="{{ route('urls.update', $url->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    @include('urls.urlForm')

                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-block btn-primary">Salvar</button>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
