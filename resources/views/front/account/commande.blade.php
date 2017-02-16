<!-- Debut Panel Commandes -->
<div role="tabpanel" @if($anchor=='commandes') class="tab-pane commandes active" @else class="tab-pane commandes" @endif id="commandes">
    <div class="col-md-10 col-md-offset-1">
    	<table id="commandes_tab" class="table table-striped table-bordered" cellspacing="0" width="100%">
    		<thead>
    			<tr>
    				<td>Référence :</td>
                    <td>Passé le :</td>
    				<td>Montant (€) :</td>
    				<td>Status :</td>
    			</tr>
    		</thead>
            <tbody>
                @foreach($listCommandes as $row)
                    <tr>
                        <td><a href="{{ url('/commande/'.$row->id)}}">{{$row->reference}}</a></td>
                        <td>{{$row->created_at}}</td>
                        <td>{{$row->montant}}</td>
                        <td>{{$row->status}}</td>
                    </tr>
                @endforeach
            </tbody>
    	</table>
    </div>
</div>