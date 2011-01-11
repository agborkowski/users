<p><?php echo __d('users', 'A request to reset your password was sent. To change your password click the link below.');?></p>

<p><?php echo Router::url(array('admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'reset_password', $token), true);?></p>
