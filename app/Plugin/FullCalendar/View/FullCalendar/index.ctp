<script type="text/javascript">
plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "full_calendar";
</script>
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
						<?php if ($this->Session->read('Auth.User.Group.AC')){?>
							<li><?php echo $this->Html->link('<i class="fa fa-plus-circle"> Agregar Evento </i>', "/full_calendar/events/add",array('escape' => false))?></li>
						<?php }?>
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
									<?php
									echo $this->Html->script(array('/full_calendar/js/jquery-1.5.min', '/full_calendar/js/jquery-ui-1.8.9.custom.min', '/full_calendar/js/fullcalendar.min', '/full_calendar/js/jquery.qtip-1.0.0-rc3.min', '/full_calendar/js/ready'), array('inline' => 'false'));
									echo $this->Html->css('/full_calendar/css/fullcalendar', null, array('inline' => false));
									?>
									
									
									<div class="Calendar index">
										<div id="calendar"></div>
									</div>
							    </div>
						    </div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<?php
/*
 * View/FullCalendar/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
