<?php

$registrar->addInstance(new \ChildPagePermissions\Settings());
$registrar->addInstance(new \ChildPagePermissions\User(
    $registrar->getInstance(\ChildPagePermissions\Settings::class)
));
$registrar->addInstance(new \ChildPagePermissions\Permissions(
    $registrar->getInstance(\ChildPagePermissions\User::class),
    $registrar->getInstance(\ChildPagePermissions\Settings::class)
));
$registrar->addInstance(new \ChildPagePermissions\UI(
    $registrar->getInstance(\ChildPagePermissions\User::class),
    $registrar->getInstance(\ChildPagePermissions\Permissions::class),
    $registrar->getInstance(\ChildPagePermissions\Settings::class)
));
