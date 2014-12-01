<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo Yii::t('MostActiveUsersModule.base', '<strong>Most</strong> active people'); ?>
    </div>
    <div class="panel-body">
        <?php
        if (empty($users)) {
            echo '<div class="placeholder">' . Yii::t('MostActiveUsersModule.base', 'No users.') . '</div>';
        } else {
            ?>
			
                <?php
				
                // run through the array of arrays containing profile information and statistics/
                    foreach ($users as $profile) {
                        // check if the profile is valid
						if ($profile != null) {
                            // get the corresponding user
                            $user = User::model()->findByPk($profile['user_id']);?>
                 
							<a href="<?php echo $user->getProfileUrl(); ?>">
								<img src="<?php echo $user->getProfileImage()->getUrl(); ?>" class="img-rounded tt img_margin"
									 height="40" width="40" alt="40x40" data-src="holder.js/40x40" style="width: 40px; height: 40px;"
									 data-toggle="tooltip" data-placement="top" title=""
									 data-original-title="<strong><?php echo $user->displayName; ?></strong><br><?php echo $user->profile->title; ?>">
							</a>
				
                        <?php
                        }
                    }
        
                ?>
				<hr/>
             <?php
             //Button Get a list of most active users
            echo CHtml::link(Yii::t('MostActiveUsersModule.base', 'Get a list'), $this->createUrl('//mostactiveusers/mostActiveUsers/list'), array('class' => 'btn btn-info', 'data-toggle' => 'modal', 'data-target' => '#globalModal'));
            ?>
        <?php
        }
        ?>
    </div>
</div>
