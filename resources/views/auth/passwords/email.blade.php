@extends('front.layout.default')
@section('content')
    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row forgotPass">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Mot de passe oublié</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="email">Email *	</label>
                                <input type="email" class="form-control input-sm" id="email" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3 col-xs-6" >
                                <input type="submit" class="btn btn-primary btn-block pull-right" value="Annuler"/>
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-xs-6" >
                                <input type="submit" class="btn btn-primary btn-block" value="Valider"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop