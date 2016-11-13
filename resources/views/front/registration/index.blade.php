@extends('front.layout.home')

@section('content')

<div class="container">
	<div class="row registration" style="">
		<div class="col-md-12">
			<ol class="breadcrumb">
			  	<li><a href="#">Home</a></li>
			  	<li class="active">Registration</li>
			</ol>

			<div class="panel">
				<div class="panel-heading">
			        	<h3 class="panel-title text-center">Création de votre compte</h3>
				</div>
				<div class="panel-body">
				    <form>
						<div class="col-md-6 col-sm-6">
							<div class = "form-group col-md-12 col-sm-12">
		      					<label for="months">Titre *</label>	      
		      					<select class="form-control input-sm" id="title">
									<option>-- Selectionnez le titre --</option>
									<option>Mr.</option>
									<option>Mme.</option>
		      					</select>
							</div>
							<div class="form-group col-md-12 col-sm-12">
						        <label for="secondname">Prénom *	</label>
					            <input type="text" class="form-control input-sm" id="secondname" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="firstname">Nom *	</label>
					            <input type="text" class="form-control input-sm" id="firstname" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="email">Adresse Email *	</label>
					            <input type="text" class="form-control input-sm" id="email" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="birthday">Date de naissance *	</label>
					            <input type="text" class="form-control input-sm" id="birthday" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="password">Password *	</label>
					            <input type="password" class="form-control input-sm" id="password" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="re-password">Confirmation Password *	</label>
					            <input type="password" class="form-control input-sm" id="re-password" placeholder="">
					        </div>
						
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group col-md-12 col-sm-12">
						        <label for="address">Adresse *	</label>
					            <input type="text" class="form-control input-sm" id="address" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="city">ville *	</label>
					            <input type="text" class="form-control input-sm" id="city" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="pincode">Code postal *	</label>
					            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="country">Pays *	</label>
					            <input type="text" class="form-control input-sm" id="country" placeholder="">
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
						        <label for="phone">Téléphone fix *</label>
					            <input type="text" class="form-control input-sm" id="phone" placeholder="">
					        </div>

					        <div class="form-group col-md-12 col-sm-12">
						        <label for="cellular">Téléphone portable*</label>
					            <input type="text" class="form-control input-sm" id="cellular" placeholder="">
					        </div>
							<div class="form-group col-md-12 col-sm-12">						  	
						  		<div class="checkbox">
						    		<label for="newsletter">
						      			<input type="checkbox" class="newsletter" name="newsletter" id="newsletter" value="1">
						      			S'inscrire à la newsletter
						    		</label>
								</div>
							</div>
							<div class="form-group col-md-12 col-sm-12">						  	
						  		<div class="checkbox">
						    		<label for="offers">
						      			<input type="checkbox" class="offers" name="offers" id="offers" value="1">
						      			Recevez les offres spéciales de nos partenaires
						    		</label>
								</div>
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
</div>
@stop
	