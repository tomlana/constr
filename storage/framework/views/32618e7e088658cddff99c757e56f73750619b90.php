<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materiais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 4rem;">
            <div class="col-md-12">
                 <table id="table_id" class="display">
                     <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Marca</th>
                            <th>Quantidade</th>
                            <th>Inserido em</th>
                        </tr>
                     </thead>
                     <tbody>
                       
                     </tbody>
                 </table>
            </div>
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Novo
                  </button>
                  
            </div>
         </div>
     </div>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Registrar Material</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <Form id="form-materiais">
            <div class="mb-3">
                <label for="nome"  class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Ex.: Cimento">
              </div>
              <div class="mb-3">
                <label for="desc" class="form-label">Descrição</label>
                <textarea class="form-control" name="desc" placeholder="Ex.: A melhor viga de aço do mercado" id="desc" style="height: 100px"></textarea>
              </div>
              <div class="mb-3">
                <label for="marca"  class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control" id="marca" placeholder="Ex.: Itaú">
              </div>
              <div class="mb-3">
                <label for="quant"  class="form-label">Quantidade</label>
                <input type="number" name="quant" class="form-control" id="quant" placeholder="Ex.: 1">
              </div>
             <button type="submit" class="btn btn-primary">Salvar</button>

              </Form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</body>
   
<script>

    $(document).ready( function () {
        
        
        var table = $('#table_id').DataTable({
            ajax: 'api/materiais'
        });

        $("#form-materiais").submit(function(element) {
            
            element.preventDefault();
            data = {
                nome: $("#nome").val(),
                desc: $("#desc").val(),
                marca: $("#marca").val(),
                quant: $("#quant").val()
            }
            
            console.log(data);
            $.ajax({
                type: "POST", 
                url: 'api/materiais',
                data: data,
                success: function(response){
                    alert('Criado')
                    table.ajax.reload();
                    $("#nome").val("")
                    $("#desc").val("")
                    $("#marca").val("")
                    $("#quant").val("")
                    $('#staticBackdrop').modal("toggle")
                }
            })
            console.log(data);
        })
    
    } );

</script>
</html><?php /**PATH D:\wamp64\www\thomas\cons\constr\resources\views/materiais.blade.php ENDPATH**/ ?>