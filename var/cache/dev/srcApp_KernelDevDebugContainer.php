<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCogZtmB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCogZtmB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCogZtmB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCogZtmB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCogZtmB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CogZtmB',
    'container.build_id' => 'ff6701ff',
    'container.build_time' => 1571659889,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCogZtmB');
