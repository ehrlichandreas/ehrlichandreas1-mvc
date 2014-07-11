hallo 
<?php

$userParams = array
(
    'newsletter_id' => 17,
    'title'         => 'fasdf af asD',
);

$mvc = EhrlichAndreas_Mvc_FrontController::getInstance();

$router = $mvc->getRouter();

echo $router->assemble($userParams, 'newsletter', true, true);
        