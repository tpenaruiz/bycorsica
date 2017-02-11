<!-- Debut Panel Adresse -->
<div role="tabpanel" @if($anchor=='address') class="tab-pane address active" @else class="tab-pane address" @endif id="address">
    <div class="col-md-12 libelle">
        <p>{{ \Lang::get('general.addressLibelle') }}</p>
    </div>

    @if (count($adresses)==0)
        <div class="col-md-12 firstaddress">
            <p>Veuillez ajouter une <a href="{{ url('account/address/create') }}">première adresse</a></p>
        </div>
    @endif

    @foreach ($adresses as $ad)
        <div id="adress_details_{{ $ad->id }}" class="adress_details col-md-4  col-sm-6 address-details" data-id="{{ $ad->id }}">
            <div class="bloc">
                <h5 class="libelle">{{ $ad->libelle }}</h5>
                <div class="bloc-details">
                    <div class="name">{{ \Lang::get('general.name') }} : {{ $ad->prenom }} {{ $ad->nom }} </div>
                    <div class="addres">{{ \Lang::get('general.address') }} : {{ $ad->adresse }}</div>
                    <div class="adress2">{{ \Lang::get('general.address2') }} : {{$ad->adresse_suppl !== NULL || !empty($ad->adresse_suppl) ? $ad->adresse_suppl : 'Non renseigné' }} </div>
                    <div class="cpville">{{ \Lang::get('general.cpcity') }} : {{ $ad->villes->code_postal }} {{ $ad->villes->libelle }}</div>
                    <div class="country">{{ \Lang::get('general.country') }} : {{ $ad->pays->nom_fr_fr }}</div>
                    <div class="phone">{{ \Lang::get('general.phone') }} : @if (isset($ad->telephone)) {{ $ad->telephone }} @else  Non renseigné @endif</div>
                    <div class="phone2">{{ \Lang::get('general.phone2') }} : @if (isset($ad->telephone2) && !empty($ad->telephone2)) {{ $ad->telephone2 }} @else  Non renseigné @endif</div>
                    <div class="infosupp">{{ \Lang::get('general.infosupp') }} : @if (isset($ad->complement) && !empty($ad->complement)) {{ $ad->complement }} @else Non renseigné @endif</div>

                </div>
                <div class="bloc-btn">
                    <div class="row">
                        <div class="form-group col-xs-5 col-xs-offset-1">
                            <a href="{{ url('account/address/update/'.$ad->id) }}" class="btn btn-success btn-block">
                                <i class="fa fa-refresh fa-lg" aria-hidden="true"></i> &nbsp Update
                            </a>
                        </div>
                        <div class="form-group col-xs-5">
                            {!! Form::open(['method' => 'DEL', 'id'=>'form_address_destroy', 'route'=>['account.address.destroy', ':ID']]) !!}
                            <a href="#" class="btn_remove btn btn-danger btn-block">
                                <i class="fa fa-trash" aria-hidden="true"></i> &nbsp Delete
                            </a>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @if (count($adresses)>0)
        <div class="col-md-12 col-sm-12 address-new">
            <a href="{{ url('account/address/create') }}" class="btn btn-primary .btn-block">
                {{ \Lang::get('general.addressCreate') }}
            </a>
        </div>
    @endif
</div>