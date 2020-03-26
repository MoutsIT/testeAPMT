<!DOCTYPE html>
<html>
    <head>
      <title>Desafio MoutsTI</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  </head>

  <body>

  <div class="container">
    
    <div class="row">
      <div class="col-12">
        <h3>Livros</h3>
        <button class="btn btn-success float-right" onclick="add_book()"><i class="fa fa-plus-square"></i> Adicionar Livro</button>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
              <th>ID</th>
                <th>ISBN</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) : ?>
            <tr>
              <td><?php echo $book->book_id;?></td>
              <td><?php echo $book->book_isbn;?></td>
              <td><?php echo $book->book_title;?></td>
              <td><?php echo $book->book_author;?></td>
              <td><?php echo $book->book_category;?></td>
              <td>
                  <button class="btn btn-warning" onclick="edit_book(<?php echo $book->book_id;?>)"><i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger" onclick="delete_book(<?php echo $book->book_id;?>)"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
            <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>ISBN</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>Ações</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
 
  </div>
 
  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">      
      <div class="modal-header">
        <h3 class="modal-title"></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id" />
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">ISBN</label>
              <div class="col-md-9">
                <input name="book_isbn" placeholder="Book ISBN" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Título</label>
              <div class="col-md-9">
                <input name="book_title" placeholder="Título" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Autor</label>
              <div class="col-md-9">
                <input name="book_author" placeholder="Autor" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Categoria</label>
                <div class="col-md-9">
                    <input name="book_category" placeholder="Categoria" class="form-control" type="text">
                </div>
            </div>
 
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Salva</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  <!-- End Bootstrap modal -->
 
  </body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <script>
  $(document).ready( function () {
    $('#example').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
      }
    });
  });

    var save_method; //for save method string
    var table;
 
    function add_book()
    {
      save_method = 'add';
      $('#form')[0].reset();
      $('#modal_form').modal('show');
    }
 
    function edit_book(id)
    {
      save_method = 'update';
      $('#form')[0].reset();

      $.ajax({
        url : "<?php echo site_url('/bookController/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="book_id"]').val(data.book_id);
            $('[name="book_isbn"]').val(data.book_isbn);
            $('[name="book_title"]').val(data.book_title);
            $('[name="book_author"]').val(data.book_author);
            $('[name="book_category"]').val(data.book_category);

            $('#modal_form').modal('show');
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Erro ao resgatar os dados.');
          }
      })
    }
 
    function save()
    {
      var url;
      if (save_method == 'add')
      {
          url = "<?php echo site_url('/bookController/add')?>";
      }
      else
      {
        url = "<?php echo site_url('/bookController/update')?>";
      }
 
      $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            $('#modal_form').modal('hide');
          location.reload();// for reload a page
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Ocorreu um erro ao inserir / atualizar os dados.');
        }
      })
    }
 
    function delete_book(id)
    {
      if (confirm('Tem certetza que deseja remover este registro?'))
      {
          $.post({
            url : "<?php echo site_url('/bookController/delete')?>/".concat(id),
            dataType: "JSON",
            success: function(data)
            {
                
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Ocorreu um erro ao remover o registro!');
            }
        });
 
      }
    }
 
  </script>
</html>