<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBJ92LxZ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBJ92LxZ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBJ92LxZ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBJ92LxZ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBJ92LxZ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BJ92LxZ',
    'container.build_id' => 'c90b9efe',
    'container.build_time' => 1570304246,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBJ92LxZ');
