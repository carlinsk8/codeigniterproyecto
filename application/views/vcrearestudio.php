<section class="content">
	<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Estudio</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Cliente</label>
                <select class="form-control select2" style="width: 100%;">
                  <option value="disabled" selected="selected">Cliente</option>
                  
                  
                </select>
              </div>
             <div class="form-group">
                <label>Año de Analisis</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">2015</option>
                  <option>2014</option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Año Fiscal</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">2015</option>
                  <option>2014</option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Tipo de Estudio</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Actualización búsqueda y/o comparables</option>
                  <option>Análisis de regresión</option>
                  <option>Carta de actualización rango</option>
                  <option>Carta de diagnóstico</option>
                  <option>Informe de precios de transferencia</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-12">
            <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
      </div>
      <div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Listado de Estudio</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">
                <label>Cliente</label>
                <select class="form-control select2" style="width: 100%;">
                  <option value="disabled" selected="selected">Cliente</option>
                  
                  
                </select>
              </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Tipo de Estudio</th>
                      <th>Año fiscal</th>
                      <th>Acción</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5
                      </td>
                      <td>Win 95+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6
                      </td>
                      <td>Win 98+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      
                    </tr>
                    
                    
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Tipo de Estudio</th>
                      <th>Año fiscal</th>
                      <th>Acción</th>
                      
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
        </div>
      </div>
  </div>
</section>
    <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>