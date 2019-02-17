<?php
	$this->assign('title','gerenciador | Eventos');
	$this->assign('nav','eventos');

	$this->display('_Header.tpl.php');
?>

<script type="text/javascript">
	$LAB.script("scripts/app/eventos.js").wait(function(){
		$(document).ready(function(){
			page.init();
		});
		
		// hack for IE9 which may respond inconsistently with document.ready
		setTimeout(function(){
			if (!page.isInitialized) page.init();
		},1000);
	});
</script>

<div class="container">

<h1>
	<i class="icon-th-list"></i> Eventos
	<span id=loader class="loader progress progress-striped active"><span class="bar"></span></span>
	<span class='input-append pull-right searchContainer'>
		<input id='filter' type="text" placeholder="Search..." />
		<button class='btn add-on'><i class="icon-search"></i></button>
	</span>
</h1>

	<!-- underscore template for the collection -->
	<script type="text/template" id="eventoCollectionTemplate">
		<table class="collection table table-bordered table-hover">
		<thead>
			<tr>
				<th id="header_Id">Id<% if (page.orderBy == 'Id') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Nome">Nome<% if (page.orderBy == 'Nome') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Local">Local<% if (page.orderBy == 'Local') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Endereco">Endereco<% if (page.orderBy == 'Endereco') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Observacao">Observacao<% if (page.orderBy == 'Observacao') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<th id="header_Data">Data<% if (page.orderBy == 'Data') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_IdCidade">Id Cidade<% if (page.orderBy == 'IdCidade') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Privado">Privado<% if (page.orderBy == 'Privado') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Link">Link<% if (page.orderBy == 'Link') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_Map">Map<% if (page.orderBy == 'Map') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
				<th id="header_IdTipoEvento">Id Tipo Evento<% if (page.orderBy == 'IdTipoEvento') { %> <i class='icon-arrow-<%= page.orderDesc ? 'up' : 'down' %>' /><% } %></th>
-->
			</tr>
		</thead>
		<tbody>
		<% items.each(function(item) { %>
			<tr id="<%= _.escape(item.get('id')) %>">
				<td><%= _.escape(item.get('id') || '') %></td>
				<td><%= _.escape(item.get('nome') || '') %></td>
				<td><%= _.escape(item.get('local') || '') %></td>
				<td><%= _.escape(item.get('endereco') || '') %></td>
				<td><%= _.escape(item.get('observacao') || '') %></td>
<!-- UNCOMMENT TO SHOW ADDITIONAL COLUMNS
				<td><%if (item.get('data')) { %><%= _date(app.parseDate(item.get('data'))).format('MMM D, YYYY h:mm A') %><% } else { %>NULL<% } %></td>
				<td><%= _.escape(item.get('idCidade') || '') %></td>
				<td><%= _.escape(item.get('privado') || '') %></td>
				<td><%= _.escape(item.get('link') || '') %></td>
				<td><%= _.escape(item.get('map') || '') %></td>
				<td><%= _.escape(item.get('idTipoEvento') || '') %></td>
-->
			</tr>
		<% }); %>
		</tbody>
		</table>

		<%=  view.getPaginationHtml(page) %>
	</script>

	<!-- underscore template for the model -->
	<script type="text/template" id="eventoModelTemplate">
		<form class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div id="idInputContainer" class="control-group">
					<label class="control-label" for="id">Id</label>
					<div class="controls inline-inputs">
						<span class="input-xlarge uneditable-input" id="id"><%= _.escape(item.get('id') || '') %></span>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="nomeInputContainer" class="control-group">
					<label class="control-label" for="nome">Nome</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="nome" placeholder="Nome" value="<%= _.escape(item.get('nome') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="localInputContainer" class="control-group">
					<label class="control-label" for="local">Local</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="local" placeholder="Local" value="<%= _.escape(item.get('local') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="enderecoInputContainer" class="control-group">
					<label class="control-label" for="endereco">Endereco</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="endereco" placeholder="Endereco" value="<%= _.escape(item.get('endereco') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="observacaoInputContainer" class="control-group">
					<label class="control-label" for="observacao">Observacao</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="observacao" placeholder="Observacao" value="<%= _.escape(item.get('observacao') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="dataInputContainer" class="control-group">
					<label class="control-label" for="data">Data</label>
					<div class="controls inline-inputs">
						<div class="input-append date date-picker" data-date-format="yyyy-mm-dd">
							<input id="data" type="text" value="<%= _date(app.parseDate(item.get('data'))).format('YYYY-MM-DD') %>" />
							<span class="add-on"><i class="icon-calendar"></i></span>
						</div>
						<div class="input-append bootstrap-timepicker-component">
							<input id="data-time" type="text" class="timepicker-default input-small" value="<%= _date(app.parseDate(item.get('data'))).format('h:mm A') %>" />
							<span class="add-on"><i class="icon-time"></i></span>
						</div>
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="idCidadeInputContainer" class="control-group">
					<label class="control-label" for="idCidade">Id Cidade</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="idCidade" placeholder="Id Cidade" value="<%= _.escape(item.get('idCidade') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="privadoInputContainer" class="control-group">
					<label class="control-label" for="privado">Privado</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="privado" placeholder="Privado" value="<%= _.escape(item.get('privado') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="linkInputContainer" class="control-group">
					<label class="control-label" for="link">Link</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="link" placeholder="Link" value="<%= _.escape(item.get('link') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="mapInputContainer" class="control-group">
					<label class="control-label" for="map">Map</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="map" placeholder="Map" value="<%= _.escape(item.get('map') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div id="idTipoEventoInputContainer" class="control-group">
					<label class="control-label" for="idTipoEvento">Id Tipo Evento</label>
					<div class="controls inline-inputs">
						<input type="text" class="input-xlarge" id="idTipoEvento" placeholder="Id Tipo Evento" value="<%= _.escape(item.get('idTipoEvento') || '') %>">
						<span class="help-inline"></span>
					</div>
				</div>
			</fieldset>
		</form>

		<!-- delete button is is a separate form to prevent enter key from triggering a delete -->
		<form id="deleteEventoButtonContainer" class="form-horizontal" onsubmit="return false;">
			<fieldset>
				<div class="control-group">
					<label class="control-label"></label>
					<div class="controls">
						<button id="deleteEventoButton" class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete Evento</button>
						<span id="confirmDeleteEventoContainer" class="hide">
							<button id="cancelDeleteEventoButton" class="btn btn-mini">Cancel</button>
							<button id="confirmDeleteEventoButton" class="btn btn-mini btn-danger">Confirm</button>
						</span>
					</div>
				</div>
			</fieldset>
		</form>
	</script>

	<!-- modal edit dialog -->
	<div class="modal hide fade" id="eventoDetailDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>
				<i class="icon-edit"></i> Edit Evento
				<span id="modelLoader" class="loader progress progress-striped active"><span class="bar"></span></span>
			</h3>
		</div>
		<div class="modal-body">
			<div id="modelAlert"></div>
			<div id="eventoModelContainer"></div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancel</button>
			<button id="saveEventoButton" class="btn btn-primary">Save Changes</button>
		</div>
	</div>

	<div id="collectionAlert"></div>
	
	<div id="eventoCollectionContainer" class="collectionContainer">
	</div>

	<p id="newButtonContainer" class="buttonContainer">
		<button id="newEventoButton" class="btn btn-primary">Add Evento</button>
	</p>

</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>
