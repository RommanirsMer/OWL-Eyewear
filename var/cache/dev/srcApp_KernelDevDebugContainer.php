<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOhMiVZP\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOhMiVZP/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOhMiVZP.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOhMiVZP\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOhMiVZP\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OhMiVZP',
    'container.build_id' => '577cf1cf',
    'container.build_time' => 1571492819,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOhMiVZP');
