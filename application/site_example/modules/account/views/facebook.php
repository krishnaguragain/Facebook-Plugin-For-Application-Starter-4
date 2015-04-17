<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <div class="page-header">
                <h1>Facebook Login</h1>
            </div>

	<?php if ( ! $this->facebook->logged_in()) : ?>

		<div class="login">
			<a href="<?php echo $this->facebook->login_url(); ?>">Login</a>
		</div>

	<?php else : ?>

		<div class="user-info">

			<p><strong>User information</strong></p>
	<?php var_dump($user); ?>

			<p>
				<a href="<?php echo $this->facebook->logout_url(); ?>">Logout</a>
			    </p>

		</div>

	<?php endif; ?>
