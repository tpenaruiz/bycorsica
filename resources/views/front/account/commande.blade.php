<!-- Debut Panel Commandes -->
<div role="tabpanel" @if($anchor=='commandes') class="tab-pane commandes active" @else class="tab-pane commandes" @endif id="commandes">
    <div class="col-md-10 col-md-offset-1">
    	<table id="commandes_tab" class="table table-striped table-bordered" cellspacing="0" width="100%">
    		<thead>
    			<tr>
    				<td class="text-center">Référence</td>
                    <td class="text-center">Passé le</td>
    				<td class="text-center">Montant</td>
    				<td class="text-center">Status</td>
    			</tr>
    		</thead>
            <tbody>
                @foreach($listCommandes as $row)
                    <tr>
                        <td class="text-center"><a href="{{ url('/commande/'.$row->id)}}">{{$row->reference}}</a></td>
                        <td class="text-center">{{$row->getCreateddateAttribute()}}</td>
                        <td class="text-center">{{number_format($row->montant, 2, ',', ' ')}}</td>
                        <td class="text-center">{{$row->status}}</td>
                    </tr>
                @endforeach
            </tbody>
    	</table>
    </div>
</div>