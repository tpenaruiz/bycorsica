{{-- MODAL Create Type Mail --}}
<div class="modal fade" id="createType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Création d'un type</h4>
            </div>
            <div class="modal-body">
                {{-- formulaire --}}
                {!! Form::open(['method' => 'post', 'url' => route('typeMail.store') ]) !!}
                {!! Form::label('type', 'Type du Mail *', array('class' => ' control-label')) !!}
                {!! Form::text('type', '', array('class'=>'form-control', 'name'=>'type', 'placeholder' => 'type du Mail', 'required'=>'required')) !!}

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    {!! Form::submit('create', ['class' => 'btn btn-primary', 'name' => 'create']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>