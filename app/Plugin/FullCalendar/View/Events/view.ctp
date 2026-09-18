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
									<h2><?php echo __('Event'); ?></h2>
									<dl><?php $i = 0; $class = ' class="altrow"';?>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Event Type'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $this->Html->link($event['EventType']['name'], array('controller' => 'event_types', 'action' => 'view', $event['EventType']['id'])); ?></dd>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Title'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['title']; ?></dd>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Details'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['details']; ?></dd>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Status'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['status']; ?></dd>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Start'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $event['Event']['start']; ?></dd>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('End'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php if($event['Event']['all_day'] != 1) { echo $event['Event']['end']; } else { echo "N/A"; } ?></dd>
								                <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('All Day'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php if($event['Event']['all_day'] == 1) { echo "Yes"; } else { echo "No"; } ?></dd>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $this->Date->fechaSimple($event['Event']['created']); ?></dd>
										<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified'); ?></dt>
										<dd<?php if ($i++ % 2 == 0) echo $class;?>><?php echo $this->Date->fechaSimple($event['Event']['modified']); ?></dd>
									</dl>
							    </div>
						    </div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>
