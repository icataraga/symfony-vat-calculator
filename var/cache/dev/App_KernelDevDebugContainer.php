<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP0qTXti\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP0qTXti/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP0qTXti.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP0qTXti\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerP0qTXti\App_KernelDevDebugContainer([
    'container.build_hash' => 'P0qTXti',
    'container.build_id' => '9d9d4a81',
    'container.build_time' => 1661790317,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP0qTXti');
