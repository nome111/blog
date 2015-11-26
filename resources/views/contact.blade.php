@extends('master')

@section('title', 'Contact me - Matheus Galdino')

@section('content')	
	<br><br>
	<div class="upSpacement">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<form class="form-horizontal" method="post">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<fieldset>
		                    <legend><center>Envie-me um email : D</center></legend>
	    	                <div class="form-group">
        	                	<label for="title" class="col-lg-2 control-label">Título</label>
            	        	    <div class="col-lg-10">
                		            <input type="text" class="form-control" id="title" placeholder="Título" name="title">
                	    	    </div>
	        	            </div>
    		                <div class="form-group">
    	    	                <label for="content" class="col-lg-2 control-label">Conteúdo</label>
	            	            <div class="col-lg-10">
                	            	<textarea class="form-control" rows="3" id="content" placeholder="Conteúdo" name="content"></textarea>
                    	    	    <span class="help-block">Por favor, fique a vontade.</span>
                        		</div>
	                	    </div>

	            	        <div class="form-group">
    	    	                <div class="col-lg-10 col-lg-offset-2">
        		                    <button class="btn btn-default">Cancelar</button>
    	        	                <button type="submit" class="btn btn-primary">Enviar</button>
	                	        </div>
                    		</div>
	                	</fieldset>
	                </form>
				</div>
				<div class="col-sm-4">
					<img src="/images/mail.png" width="40%">
				</div>
			</div>
		</div>
	</div>
@endsection