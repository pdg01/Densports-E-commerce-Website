<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSxuR1zT\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSxuR1zT/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerSxuR1zT.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerSxuR1zT\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerSxuR1zT\srcApp_KernelProdContainer([
    'container.build_hash' => 'SxuR1zT',
    'container.build_id' => 'c7ff552a',
    'container.build_time' => 1719581388,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSxuR1zT');