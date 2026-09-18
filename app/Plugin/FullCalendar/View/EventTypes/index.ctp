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
            <h5>Eventos</h5>
          </div>
          <div class="card-block">
            <div class="row">
              <div class="col-sm-12">
                <div class="table-responsive m-t-35">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Color</th>
                          <th class="actions"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 0;
                      foreach ($eventTypes as $eventType):
                        $class = null;
                        if ($i++ % 2 == 0) {
                          $class = ' class="altrow"';
                        }
                      ?>
                        <tr<?= $class;?>>
                          <td><?php echo $eventType['EventType']['name']; ?>&nbsp;</td>
                              <td><?php echo $eventType['EventType']['color']; ?>&nbsp;</td>
                          <td class="actions">
                            <?php echo $this->Html->link(__('View', true), array('plugin' => 'full_calendar', 'action' => 'view', $eventType['EventType']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit', true), array('plugin' => 'full_calendar', 'action' => 'edit', $eventType['EventType']['id'])); ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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