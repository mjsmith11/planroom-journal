<?php
   require __DIR__ . '/src/db/orchestrators/userOrch.php'; 
   require __DIR__ . '/tests/Functional/testDependenciesContainer.php';
   require __DIR__ . '/vendor/autoload.php';

   $user = array('email' => 'default@email.com', 'password' => password_hash('password', PASSWORD_BCRYPT));
   UserOrch::Create($user, TestContainer::getContainer());