<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP5gR8oj\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP5gR8oj/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP5gR8oj.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP5gR8oj\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerP5gR8oj\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'P5gR8oj',
    'container.build_id' => '71aeb57b',
    'container.build_time' => 1557316146,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP5gR8oj');