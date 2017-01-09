@extends('front.layout.default')
@section('content')
    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row cgu">
            <div class="panel">
                <div class="panel-heading">
                    @foreach($mention as $row)
                        <h3 class="panel-title text-center">{{$row->title}}</h3>
                    @endforeach
                </div>

                <div class="panel-body">
                    <div class="row cgu">
                        <div class="col-xs-12">
                            @foreach($mention as $row)
                                {!! $row->contenue !!}
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop