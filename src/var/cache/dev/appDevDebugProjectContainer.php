<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6lxvei6\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6lxvei6/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container6lxvei6.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container6lxvei6\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container6lxvei6\appDevDebugProjectContainer([
    'container.build_hash' => '6lxvei6',
    'container.build_id' => '423ee1cd',
    'container.build_time' => 1635760393,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6lxvei6');
