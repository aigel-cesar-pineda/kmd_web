<?php
  $this->assign('title', 'Dashboard | HolaSocio');
  echo $this->Html->css(
    array(
      '/vendors/select2/css/select2.min',
      '/vendors/datatables/css/scroller.bootstrap.min',
      '/vendors/datatables/css/colReorder.bootstrap.min',
      '/vendors/datatables/css/dataTables.bootstrap.min',
      'pages/dataTables.bootstrap',
      'pages/tables',
    ),
    array('inline'=>false)
  );
?>

<div class="outer">
  <div class="inner bg-light lter bg-container">
    <div class="row">
      <dov class="col-sm-12">
        <div class="card">
          <div class="card-header bg-white">
            <h5>Agregar nuevo tipo</h5>
          </div>
          <div class="card-block">
            <?= $this->Form->create('EventType');?>
              <div class="row">
                <div class="form-group">
                  <?= $this->Form->input('name',
                    array(
                      'label' => array('text'=>'Nombre'),
                      'div'   => array('class'=>'col-sm-12 col-md-6'),
                      'class' => 'form-control required',
                      'required'
                    )
                  )?>

                  <?= $this->Form->input('color', 
                        array(
                          'label'   => array('text'=>'Color'),
                          'div'     => array('class'=>'col-sm-12 col-md-6'),
                          'class'   => 'form-control required',
                          'required',
                          'options' => array(
                            'Blue'    => 'Blue',
                            'Red'     => 'Red',
                            'Pink'    => 'Pink',
                            'Purple'  => 'Purple',
                            'Orange'  => 'Orange',
                            'Green'   => 'Green',
                            'Gray'    => 'Gray',
                            'Black'   => 'Black',
                            'Brown'   => 'Brown'
                          )
                        )
                    );?>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <div class="col-sm-12">
                    <?= $this->Form->Submit('Guardar', array('class'=>'btn btn-success'));?>
                  </div>
                </div>
              </div>
            <?= $this->Form->end();?>
          </div>
        </div>
      </dov>
    </div>
  </div>
</div>
<?=
$this->Html->script(
  array(
    '/vendors/select2/js/select2',
    '/vendors/datatables/js/jquery.dataTables.min',
    'pluginjs/dataTables.tableTools',
    '/vendors/datatables/js/dataTables.colReorder.min',
    '/vendors/datatables/js/dataTables.bootstrap.min',
    '/vendors/datatables/js/dataTables.buttons.min',
    '/vendors/datatables/js/dataTables.responsive.min',
    '/vendors/datatables/js/dataTables.rowReorder.min',
    '/vendors/datatables/js/buttons.colVis.min',
    '/vendors/datatables/js/buttons.html5.min',
    '/vendors/datatables/js/buttons.bootstrap.min',
    '/vendors/datatables/js/buttons.print.min',
    '/vendors/datatables/js/dataTables.scroller.min',
    'pages/datatable',
  ),
  array('inline'=>false)
);
?>