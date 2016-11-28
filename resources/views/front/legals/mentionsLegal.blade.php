@extends('front.layout.default')
@section('content')
    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row cgu">
            <div class="panel">
                <div class="panel-heading">
                    @foreach($cgv as $row)
                        @if(session('locale') == 'fr')
                            <h3 class="panel-title text-center">{{$row->title}}</h3>
                        @elseif(session('locale') == 'en')
                            <h3 class="panel-title text-center">{{$row->title}}</h3>
                        @endif
                        <h3 class="panel-title text-center">{{$row->title}}</h3>
                    @endforeach
                </div>

                <div class="panel-body">
                    <div class="row cgu">
                        <div class="col-xs-12">
                            @foreach($cgv as $row)
                                @if(session('locale') == 'fr')
                                    {!! $row->contenue !!}
                                @elseif(session('locale') == 'en')
                                    {!! $row->contenue !!}
                                @endif
                                {!! $row->contenue !!}
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop