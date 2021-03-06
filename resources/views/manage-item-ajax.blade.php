<!DOCTYPE html>
<html>
   <head>
       <title>Laravel Ajax Crud</title>
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
   </head>

   <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                    <h2>Laravel Ajax Crud</h2>
                 </div>

                 <div class="pull-right">
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Novo Item</button>
                 </div>
              </div>
          </div>

          <table class="table table-bordered">
                <thead>
                     <tr>
                         <th>Titulo</th>
                         <th>Descrição</th>
                         <th width="200px">Ação</th>
                     </tr>
                </thead>
                <tbody>
                </tbody>
          </table>

          <ul id="pagination" class="pagination-sm"></ul>

          <!--Modal Novo Item -->

          <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                        <h4 class="modal-title" id="myModalLabel">Novo Item</h4>
                    </div>

                    <div class="modal-body">
                        <form data-toggle="validator" action="{{ route('item-ajax.store') }}" method="POST">
                            <div class="form-group">
                               <label class="control-label" for="title">Titulo: </label>
                               <input type="text" name="title" class="form-control" data-error="Por favor entre com titulo." required />
                               <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                               <label class="control-label" for="title">Descrição: </label>
                               <textarea name="description" class="form-control" data-error="Por entree com a descrição." required></textarea>
                               <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn crud-submit btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
          </div>

          <!-- Modal Edit Item -->

          <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                         <h4 class="modal-title" id="myModalLabel">Editar Item</h4>
                     </div>

                     <div class="modal-body">
                        <form data-toggle="validator" action="/item-ajax/14" method="put">
                             <div class="form-group">
                                 <label class="control-label" for="title">Titulo: </label>
                                 <input type="text" name="title" class="form-control" data-error="Por favor entre com titulo." required />
                                 <div class="help-block with-errors"></div>
                             </div>

                              <div class="form-group">
                                 <label class="control-label" for="title">Descrição: </label>
                                 <textarea name="description" class="form-control" data-error="Por favor entre com uma descrição." required></textarea>
                                 <div class="help-block with-errors"></div>
                             </div>

                             <div class="form-group">
                                 <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                             </div>
                        </form>
                     </div>
                 </div>
              </div>
          </div>
      </div>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
      <script type="text/javascript">
        var url = "<?php echo route('item-ajax.index')?>";
      </script>
      <script src="/js/item-ajax.js"></script>
   </body>
</html>
