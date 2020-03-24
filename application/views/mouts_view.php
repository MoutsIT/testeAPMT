<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Mout's</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>


<body>
<div class="container">

	<div class="row">
	<div class="col-12">

		<div class="col-md-12 text-right my-4 p-0">
			<a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add">
				<span class="fa fa-plus">
				</span>Novo Item
			</a>
		</div>

		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th>ID</th>
					<th>Campo Um</th>
					<th>Campo Dois</th>
					<th>Campo Três</th>
					<th>Campo Quatro</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			
			<tbody id="show_data">
			</tbody>

		</table>

	</div>
	</div>

</div>


<!-- MODAL DE ADIÇÃO -->
<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">

<form>

	<div class="modal-content">

		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Adicionar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
		</div>

		<div class="modal-body">
			<div class="form-group row">
				<label class="col-md-2 col-form-label">Campo Um</label>
					<div class="col-md-10">
						<input type="text" name="campo_um" id="campo_um" class="form-control" placeholder="Campo Um">
					</div>
			</div>

			<div class="form-group row">
				<label class="col-md-2 col-form-label">Campo Dois</label>
					<div class="col-md-10">
						<input type="text" name="campo_dois" id="campo_dois" class="form-control" placeholder="Campo Dois">
					</div>
			</div>

			<div class="form-group row">
				<label class="col-md-2 col-form-label">Campo Três</label>
					<div class="col-md-10">
						<input type="text" name="campo_tres" id="campo_tres" class="form-control" placeholder="Campo Três">
					</div>
			</div>

			<div class="form-group row">
				<label class="col-md-2 col-form-label">Campo Quatro</label>
					<div class="col-md-10">
						<input type="text" name="campo_quatro" id="campo_quatro" class="form-control" placeholder="Campo Quatro">
					</div>
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			<button type="button" type="submit" id="btn_save" class="btn btn-primary">Salvar</button>
		</div>

	</div>

</form>

</div>
</div>



<!-- MODAL DE EDIÇÃO -->
<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">

<form>
<input type="hidden" name="id_edit" id="id_edit" class="form-control" placeholder="ID" readonly>

	<div class="modal-content">

		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Edição</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
		</div>

		<div class="modal-body">
			<div class="form-group row">
				<label class="col-md-2 col-form-label text-nowrap">Campo Um</label>
					<div class="col-md-10">
						<input type="text" name="campo_um_edit" id="campo_um_edit" class="form-control" placeholder="Campo Um">
					</div>
			</div>

			<div class="form-group row">
				<label class="col-md-2 col-form-label text-nowrap">Campo Dois</label>
					<div class="col-md-10">
						<input type="text" name="campo_dois_edit" id="campo_dois_edit" class="form-control" placeholder="Campo Dois">
					</div>
			</div>

			<div class="form-group row">
				<label class="col-md-2 col-form-label text-nowrap">Campo Três</label>
					<div class="col-md-10">
						<input type="text" name="campo_tres_edit" id="campo_tres_edit" class="form-control" placeholder="Campo Três">
					</div>
			</div>

			<div class="form-group row">
				<label class="col-md-2 col-form-label text-nowrap">Campo Quatro</label>
					<div class="col-md-10">
						<input type="text" name="campo_quatro_edit" id="campo_quatro_edit" class="form-control" placeholder="Campo Quatro">
					</div>
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			<button type="button" type="submit" id="btn_update" class="btn btn-primary">Atualizar</button>
		</div>

	</div>

</form>

</div>
</div>


<!-- AVISO DE EXCLUSÃO -->
<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">

<form>

	<div class="modal-content">

		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
		</div>

		<div class="modal-body">
			<strong>Confirma a ação de exclusão?</strong>
		</div>

		<div class="modal-footer">
			<input type="hidden" name="id_delete" id="id_delete" class="form-control">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" type="submit" id="btn_delete" class="btn btn-primary">Sim</button>
		</div>

	</div>

</form>

</div>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"
				integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
				crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



<script type="text/javascript">
	$(document).ready(function(){
	show_data();
		

//função de listagem
		function show_data(){
			$.ajax({
				type  : 'ajax',
				url   : '<?php echo site_url('mouts/data')?>',
				async : false,
				dataType : 'json',
					success : function(data){
						var html = '';
						var i;
							for(i=0; i<data.length; i++){
								html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].campo_um+'</td>'+
											'<td>'+data[i].campo_dois+'</td>'+
											'<td>'+data[i].campo_tres+'</td>'+
											'<td>'+data[i].campo_quatro+'</td>'+
											'<td style="text-align:right;">'+
												'<div class="btn-group">'+
												'<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id+
													'" data-campo_um="'+data[i].campo_um+
													'" data-campo_dois="'+data[i].campo_dois+
													'" data-campo_tres="'+data[i].campo_tres+
													'" data-campo_quatro="'+data[i].campo_quatro+
												'">Editar</a>'+' '+

												'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Excluir</a>'+
												'</div>'+
											'</td>'+
										'</tr>';
							}
					$('#show_data').html(html);
					}
			});
		}


//salvar item
		$('#btn_save').on('click',function(){
			var campo_um		= $('#campo_um').val();
			var campo_dois		= $('#campo_dois').val();
			var campo_tres		= $('#campo_tres').val();
			var campo_quatro	= $('#campo_quatro').val();

				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('mouts/save')?>",
					dataType : "JSON",
					data : {	campo_um:campo_um,
								campo_dois:campo_dois,
								campo_tres:campo_tres,
								campo_quatro:campo_quatro },
						success: function(data){
							$('[name="campo_um"]').val("");
							$('[name="campo_dois"]').val("");
							$('[name="campo_tres"]').val("");
							$('[name="campo_quatro"]').val("");
							
							$('#Modal_Add').modal('hide');
						
						show_data();
						}
				});
		return false;
		});


//data p/ edição de item
		$('#show_data').on('click','.item_edit',function(){
			var id				= $(this).data('id');
			var campo_um		= $(this).data('campo_um');
			var campo_dois		= $(this).data('campo_dois');
			var campo_tres		= $(this).data('campo_tres');
			var campo_quatro	= $(this).data('campo_quatro');

				$('#Modal_Edit').modal('show');

				$('[name="id_edit"]').val(id);
				$('[name="campo_um_edit"]').val(campo_um);
				$('[name="campo_dois_edit"]').val(campo_dois);
				$('[name="campo_tres_edit"]').val(campo_tres);
				$('[name="campo_quatro_edit"]').val(campo_quatro);
		});


//atualizar item
		$('#btn_update').on('click',function(){
			var id				= $('#id_edit').val();
			var campo_um		= $('#campo_um_edit').val();
			var campo_dois		= $('#campo_dois_edit').val();
			var campo_tres		= $('#campo_tres_edit').val();
			var campo_quatro	= $('#campo_quatro_edit').val();

				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('mouts/update')?>",
					dataType : "JSON",
					data : {	id:id,
								campo_um	:campo_um,
								campo_dois	:campo_dois,
								campo_tres	:campo_tres,
								campo_quatro:campo_quatro },
						success: function(data){
							$('[name="id_edit"]').val("");
							$('[name="campo_um_edit"]').val("");
							$('[name="campo_dois_edit"]').val("");
							$('[name="campo_tres_edit"]').val("");
							$('[name="campo_quatro_edit"]').val("");

							$('#Modal_Edit').modal('hide');

						show_data();
						}
				});
		return false;
		});


//data p/ exclusão
		$('#show_data').on('click','.item_delete',function(){
			var id = $(this).data('id');

			$('#Modal_Delete').modal('show');
			
			$('[name="id_delete"]').val(id);
		});


//excluir item
		$('#btn_delete').on('click',function(){
			var id = $('#id_delete').val();

				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('mouts/delete')?>",
					dataType : "JSON",
					data : {id:id},
                		success: function(data){
							$('[name="id_delete"]').val("");
							$('#Modal_Delete').modal('hide');

						show_data();
						}
				});
		return false;
		});

	});

</script>

</body>
</html>
