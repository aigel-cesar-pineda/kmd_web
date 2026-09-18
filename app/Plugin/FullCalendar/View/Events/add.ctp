<div class="abs-layout-wrapper">
	<div class="abs-content-layout">
    	<div class="abs-content-layout-row">
        	<div class="abs-layout-cell abs-sidebar1">
	        	<div class="abs-vmenublock clearfix">
	        		<div class="abs-vmenublockheader">
	            		<h3 class="t">Eventos</h3>
	        		</div>
	        		<div class="abs-vmenublockcontent">
						<ul class="abs-vmenu">
							<li><?php echo $this->Html->link('<i class="fa fa-calendar"> Mostrar Calendario </i>', "/full_calendar/",array('escape' => false))?></li>
						</ul>
	                </div>
	           	</div>
	      	</div>
			<div class="abs-layout-cell abs-content">
				<article class="abs-post abs-article">
                	<div class="abs-postcontent abs-postcontent-0 clearfix">
						<div class="abs-content-layout layout-item-3">
						    <div class="abs-content-layout-row">
							    <div class="abs-layout-cell layout-item-2" style="width: 100%" >
									<?php echo $this->Form->create('Event');?>
										<fieldset>
									 		<legend><?php echo __('Crear Evento'); ?></legend>
										<?php
											echo $this->Form->input('event_type_id',array('label'=>'Tipo de evento'));
											echo $this->Form->input('title',array('label'=>'T&iacute;tulo'));
											echo $this->Form->input('details',array('label'=>'Detalles'));
											echo $this->Form->input('start' ,array('label'=>'Empieza','dateFormat'=>'DMY','minYear'=>date('Y'), 'maxYear'=>date('Y')+2));
											echo $this->Form->input('end',array('label'=>'Termina','dateFormat'=>'DMY','minYear'=>date('Y'), 'maxYear'=>date('Y')+2));
											echo $this->Form->input('all_day', array('checked' => 'checked','label'=>'Evento de todo el d&iacute;a'));
											echo $this->Form->input('created_by',array('type'=>'hidden','value'=>$this->Session->read('Auth.User.id')));
											echo $this->Form->input('executed_by',array('type'=>'select','options'=>$users,'label'=>'Asignado a'));
											echo $this->Form->input('status', array('options' => array(
														'Programado' => 'Programado','Confirmado' => 'Confirmado','En Proceso' => 'En Proceso',
														'Reprogramado' => 'Reprogramado','Completado' => 'Completado'
													),
													'label'=>'Estatus'
												)
											);
										?>
										</fieldset>
									<?php echo $this->Form->end(__('Crear Evento', true));?>
							    </div>
						    </div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

