<p><?php echo sprintf(__d('users', 'Hello %s,', true), $user['User']['username']); ?> <br />
<?php __d('users', 'to validate your account, you must visit the URL below within 24 hours'); ?></p> 

<p><?php echo Router::url(array('admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'verify', 'email', $user['User']['email_token']), true); ?></p>
