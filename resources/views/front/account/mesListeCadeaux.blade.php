<!-- Debut Panel Liste Cadeaux -->
<div role="tabpanel" @if($anchor=='listCadeaux') class="tab-pane listCadeaux active" @else class="tab-pane listCadeaux" @endif id="listCadeaux">
    
    @if(count($listCadeaux) === 0)
        <div class="col-md-12 firstaddress">
            <p>{{\Lang::get('general.emptyListCadeaux')}}</p>
        </div>
    @endif

    @foreach($listCadeaux as $row)
        <div id="list_cadeaux_detail{{ $row->ProductForSurpriseId }}" class="list_cadeaux_detail col-md-3 col-xs-6 product-grille" data-id="{{ $row->ProductForSurpriseId }}">
            <div class="bloc">
                <div class="image">
                    <a href=""><img src="{{asset($row->chemin) }}" alt="{{$row->libelle}}" title="{{$row->libelle}}"></a> <!-- TODO Une fois que la page Produit/Le produit sera finalisé, on mettra à jour le lien ci présent pour rediriger directement sur le détail du produit en question !! -->
                </div>
                <div class="description">
                    <h3 class="title">{{$row->produitNom}}</h3>
                    <div class="libelle">{{$row->produitDescription}}</div>
                    <div class="price" style="">{{Lang::get('general.price')}} {{str_replace('.',',',$row->prix + ($row->prix * $row->valeur)/100)}} &euro;</div>
                    <div>
                        {!! Form::open(['method' => 'DEL', 'id'=>'form_list_cadeaux_destroy', 'route'=>['account.list_cadeaux.destroy', ':ID']]) !!}
                        <a href="#" class="btn_remove_liste_cadeaux btn btn-danger btn-block">
                            <i class="fa fa-trash" aria-hidden="true"></i> &nbsp Delete
                        </a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>