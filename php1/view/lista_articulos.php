<?php include('header.php'); ?>
<script src="../js/lista_articulos.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        list_articulos();
        categorias();
     });
</script>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Lista de Articulos</strong></h1>
        <div class="row">
            <div class="col-sm-4">
                <a class="btn btn-success btn-sm" style="border: 1px solid;" href="detalle_articulos.php"><i class="fa fa-plus"></i> Nuevo</a>     
                <a class="btn btn-primary btn-sm" style="border: 1px solid;" href="alimentar_stock.php"><i class="fa fa-plus"></i> Alimentar stock</a>
           
            </div>
            <div class="col-sm-8 text-end">
                  <button class="btn btn-primary btn-sm" style="border: 1px solid;" id="btnExportarArt"><i class="fa fa-file-excel"></i> Exportar Articulos</button>                
            </div>
        </div>

         <div class="row">
         <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-8">
                <div class="card-body">
                    <div class="row">
            <div class="col-sm-2">
                <label><input type="radio" name="opc" id="OpcP" checked value="P"  onclick="list_articulos()">Producto</label><br>
                <label><input type="radio" name="opc" id="OpcS" value="S" onclick="list_articulos()">Servicio</label>
            </div>
            <div class="col-sm-3">
                <b>Referencia</b>
                <input type="text" name="txt_ref" id="txt_ref" class="form-control form-control-sm" onkeyup="list_articulos()">
            </div>
            <div class="col-sm-4">
                <b>Producto</b>
                <input type="text" name="txt_query" id="txt_query" class="form-control form-control-sm" onkeyup="list_articulos()">
            </div>
            <div class="col-sm-3">
                <b>Categoria</b><br>
                <select class="form-control-sm form-control" style="width:100%" id="ddl_categoria" name="ddl_categoria" onchange="list_articulos()">
                    <option value="">Categoria</option>
                </select>
            </div>            
        </div>
                    <div class="row" style="overflow-y: scroll; height:450px">
                        <div class="col-sm-12">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <th width="10%">Referencia</th>
                                    <th width="10%">Cod Auxi</th>
                                    <th width="30%">Producto</th>
                                    <th width="7%">Stock</th>
                                    <th width="7">Medida</th>
                                    <th width="7%">Peso</th>
                                    <th>Localizacion</th>  
                                    <th>Categoria</th>                                    
                                </thead>
                                <tbody id="tbl_productos">
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>                        
    </div>
    </div>
</main>


<?php include('footer.php'); ?>