<div class="container schedule">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="<?php echo 'monday' == strtolower(gmdate("l")) ? 'active' : ''?>"><a href="#mon" role="tab" id="mon-tab" data-toggle="tab"><?php echo 'monday' == strtolower(gmdate("l")) ? 'Today' : 'Monday';?></a></li>
        <li role="presentation" class="<?php echo 'tuesday' == strtolower(gmdate("l")) ? 'active' : ''?>"><a href="#tue" role="tab" id="tue-tab" data-toggle="tab"><?php echo 'tuesday' == strtolower(gmdate("l")) ? 'Today' : 'Tuesday';?></a></li>
        <li role="presentation" class="<?php echo 'wednesday' == strtolower(gmdate("l")) ? 'active' : ''?>"><a href="#wed" role="tab" id="wed-tab" data-toggle="tab"><?php echo 'wednesday' == strtolower(gmdate("l")) ? 'Today' : 'Wednesday';?></a></li>
        <li role="presentation" class="<?php echo 'thursday' == strtolower(gmdate("l")) ? 'active' : ''?>"><a href="#thu" role="tab" id="thu-tab" data-toggle="tab"><?php echo 'thursday' == strtolower(gmdate("l")) ? 'Today' : 'Thursday';?></a></li>
        <li role="presentation" class="<?php echo 'friday' == strtolower(gmdate("l")) ? 'active' : ''?>"><a href="#fri" role="tab" id="fri-tab" data-toggle="tab"><?php echo 'friday' == strtolower(gmdate("l")) ? 'Today' : 'Friday';?></a></li>
        <li role="presentation" class="<?php echo 'saturday' == strtolower(gmdate("l")) ? 'active' : ''?>"><a href="#sat" role="tab" id="sat-tab" data-toggle="tab"><?php echo 'saturday' == strtolower(gmdate("l")) ? 'Today' : 'Saturday';?></a></li>
        <li role="presentation" class="<?php echo 'sunday' == strtolower(gmdate("l")) ? 'active' : ''?>"><a href="#sun" role="tab" id="sun-tab" data-toggle="tab"><?php echo 'sunday' == strtolower(gmdate("l")) ? 'Today' : 'Sunday';?></a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
	  <div role="tabpanel" class="tab-pane fade <?php echo 'monday' == strtolower(gmdate("l")) ? 'in active' : ''?>" id="mon">
	    <?php if(count($monday) > 0){ foreach ($monday as $k => $data) { ?>
	    	<div class="<?php echo gmdate('H:i') >= date('H:i',strtotime($data['PlanTime'])) && gmdate('H:i') <= date('H:i',strtotime('+'.timeToSeconds($data['PlanDuration']).' seconds', strtotime($data['PlanTime']) - 60)) && 'monday' == strtolower(gmdate("l")) ? 'active' : ''?>" data-plan-date="<?php echo $data['PlanDate']?>" date-plan-time="<?php echo $data['PlanTime']?>" data-plan-day="<?php echo $data['DayName']?>" data-duration="<?php echo $data['PlanDuration']?>"><h1><?php echo $data['PlanTime'].' '.$data['TitleName'] ?> </h1><p><?php echo $data['EPG'] ?></p></div>
	    <?php }}else{ echo "<h2>No Event Sheduled</h2>";} ?>
	  </div>
      <div role="tabpanel" class="tab-pane fade <?php echo 'tuesday' == strtolower(gmdate("l")) ? 'in active' : ''?>" id="tue">
        <?php if(count($tuesday) > 0){ foreach ($tuesday as $k => $data) { ?>
	    	<div class="<?php echo gmdate('H:i') >= date('H:i',strtotime($data['PlanTime'])) && gmdate('H:i') <= date('H:i',strtotime('+'.timeToSeconds($data['PlanDuration']).' seconds', strtotime($data['PlanTime']) - 60)) && 'tuesday' == strtolower(gmdate("l")) ? 'active' : ''?>" data-plan-date="<?php echo $data['PlanDate']?>" date-plan-time="<?php echo $data['PlanTime']?>" data-plan-day="<?php echo $data['DayName']?>" data-duration="<?php echo $data['PlanDuration']?>"><h1><?php echo $data['PlanTime'].' '.$data['TitleName'] ?> </h1><p><?php echo $data['EPG'] ?></p></div>
	    <?php }}else{ echo "<h2>No Event Sheduled</h2>";} ?>
	  </div>
      <div role="tabpanel" class="tab-pane fade <?php echo 'wednesday' == strtolower(gmdate("l")) ? 'in active' : ''?>" id="wed">
        <?php if(count($wednesday) > 0){ foreach ($wednesday as $k => $data) { ?>
	    	<div class="<?php echo gmdate('H:i') >= date('H:i',strtotime($data['PlanTime'])) && gmdate('H:i') <= date('H:i',strtotime('+'.timeToSeconds($data['PlanDuration']).' seconds', strtotime($data['PlanTime']) - 60)) && 'wednesday' == strtolower(gmdate("l")) ? 'active' : ''?>" data-plan-date="<?php echo $data['PlanDate']?>" date-plan-time="<?php echo $data['PlanTime']?>" data-plan-day="<?php echo $data['DayName']?>" data-duration="<?php echo $data['PlanDuration']?>"><h1><?php echo $data['PlanTime'].' '.$data['TitleName'] ?> </h1><p><?php echo $data['EPG'] ?></p></div>
	    <?php }}else{ echo "<h2>No Event Sheduled</h2>";} ?>
      </div>
      <div role="tabpanel" class="tab-pane fade <?php echo 'thursday' == strtolower(gmdate("l")) ? 'in active' : ''?>" id="thu">
        <?php if(count($thursday) > 0){ foreach ($thursday as $k => $data) { ?>
	    	<div class="<?php echo gmdate('H:i') >= date('H:i',strtotime($data['PlanTime'])) && gmdate('H:i') <= date('H:i',strtotime('+'.timeToSeconds($data['PlanDuration']).' seconds', strtotime($data['PlanTime']) - 60)) && 'thursday' == strtolower(gmdate("l")) ? 'active' : ''?>" data-plan-date="<?php echo $data['PlanDate']?>" date-plan-time="<?php echo $data['PlanTime']?>" data-plan-day="<?php echo $data['DayName']?>" data-duration="<?php echo $data['PlanDuration']?>"><h1><?php echo $data['PlanTime'].' '.$data['TitleName'] ?> </h1><p><?php echo $data['EPG'] ?></p></div>
	    <?php }}else{ echo "<h2>No Event Sheduled</h2>";} ?>
      </div>
      <div role="tabpanel" class="tab-pane fade <?php echo 'friday' == strtolower(gmdate("l")) ? 'in active' : ''?>" id="fri">
        <?php if(count($friday) > 0){ foreach ($friday as $k => $data) { ?>
	    	<div class="<?php echo gmdate('H:i') >= date('H:i',strtotime($data['PlanTime'])) && gmdate('H:i') <= date('H:i',strtotime('+'.timeToSeconds($data['PlanDuration']).' seconds', strtotime($data['PlanTime']) - 60)) && 'friday' == strtolower(gmdate("l")) ? 'active' : ''?>" data-plan-date="<?php echo $data['PlanDate']?>" date-plan-time="<?php echo $data['PlanTime']?>" data-plan-day="<?php echo $data['DayName']?>" data-duration="<?php echo $data['PlanDuration']?>"><h1><?php echo $data['PlanTime'].' '.$data['TitleName'] ?> </h1><p><?php echo $data['EPG'] ?></p></div>
	    <?php }}else{ echo "<h2>No Event Sheduled</h2>";} ?>
      </div>
      <div role="tabpanel" class="tab-pane fade <?php echo 'saturday' == strtolower(gmdate("l")) ? 'in active' : ''?>" id="sat">
      	<?php if(count($saturday) > 0){ foreach ($saturday as $k => $data) { ?>
	    	<div class="<?php echo gmdate('H:i') >= date('H:i',strtotime($data['PlanTime'])) && gmdate('H:i') <= date('H:i',strtotime('+'.timeToSeconds($data['PlanDuration']).' seconds', strtotime($data['PlanTime']) - 60)) && 'saturday' == strtolower(gmdate("l")) ? 'active' : ''?>" data-plan-date="<?php echo $data['PlanDate']?>" date-plan-time="<?php echo $data['PlanTime']?>" data-plan-day="<?php echo $data['DayName']?>" data-duration="<?php echo $data['PlanDuration']?>"><h1><?php echo $data['PlanTime'].' '.$data['TitleName'] ?> </h1><p><?php echo $data['EPG'] ?></p></div>
	    <?php }}else{ echo "<h2>No Event Sheduled</h2>";} ?>  
      </div>
      <div role="tabpanel" class="tab-pane fade <?php echo 'sunday' == strtolower(gmdate("l")) ? 'in active' : ''?>" id="sun">
      	<?php if(count($sunday) > 0){ foreach ($sunday as $k => $data) { ?>
	    	<div class="<?php echo gmdate('H:i') >= date('H:i',strtotime($data['PlanTime'])) && gmdate('H:i') <= date('H:i',strtotime('+'.timeToSeconds($data['PlanDuration']).' seconds', strtotime($data['PlanTime']) - 60)) && 'sunday' == strtolower(gmdate("l")) ? 'active' : ''?>" data-plan-date="<?php echo $data['PlanDate']?>" date-plan-time="<?php echo $data['PlanTime']?>" data-plan-day="<?php echo $data['DayName']?>" data-duration="<?php echo $data['PlanDuration']?>"><h1><?php echo $data['PlanTime'].' '.$data['TitleName'] ?> </h1><p><?php echo $data['EPG'] ?></p></div>
	    <?php }}else{ echo "<h2>No Event Sheduled</h2>";} ?>  
      </div>
	</div>
</div>