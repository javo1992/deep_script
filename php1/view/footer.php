
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

<div class="modal fade" id="myModal_sri_error" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-2"><b>Estado</b> </div>
          <div class="col-xs-10" id="sri_estado"></div>          
        </div>
        <div class="row">
          <div class="col-xs-6"><b>Codigo de error</b> </div>
          <div class="col-xs-6" id="sri_codigo"></div>          
        </div>
        <div class="row">
          <div class="col-xs-2"><b>Fecha</b></div>
          <div class="col-xs-10" id="sri_fecha"></div>          
        </div>
        <div class="row">
          <div class="col-xs-12"><b>Mensaje</b></div>
          <div class="col-xs-12" id="sri_mensaje"></div>          
        </div>
        <div class="row">
          <div class="col-xs-12"><b>Info Adicional</b></div>
          <div class="col-xs-12" id="sri_adicional"></div>          
        </div>
      </div>
      <input type="hidden" id="txtclave" name="">

      <div class="modal-footer">
        <!-- <a type="button" class="btn btn-primary" href="#" id="doc_xml">Descargar xml</button>         -->
        <button type="button" class="btn btn-default" onclick="location.reload();">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="alertas" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modal-dialog-centered">  
        <!-- Modal body -->
        <div class="modal-body text-center">
          <img src="../img/facturando.gif" id="img_alerta" style="width: 30%;">
          <label id="tipo_alerta">Facturando..</label>
        </div>  
      </div>
    </div>
  </div>


    <script src="../js/app.js"></script>
    <script>
         function modal_error_seri(auto,carpeta)
          {
            var parametros = 
            {
                'clave':auto,
                'carpeta':carpeta,
            }
            $.ajax({
                data: {parametros:parametros},
                url:   '../controlador/lista_facturaC.php?error_sri=true',
                type:  'post',
                dataType: 'json',
                success:  function (data) { 
                $('#myModal_sri_error').modal('show');
                $('#sri_estado').text(data.estado[0]);
                $('#sri_codigo').text(data.codigo[0]);
                $('#sri_fecha').text(data.fecha[0]);
                $('#sri_mensaje').text(data.mensaje[0]);
                $('#sri_adicional').text(data.adicional[0]);
                        // $('#doc_xml').attr('href','')
                 console.log(data);
                 
                }
              });
          }

    </script>   
</body>

</html>


