<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container56jcbiw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container56jcbiw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container56jcbiw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container56jcbiw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container56jcbiw\appDevDebugProjectContainer(array(
    'container.build_hash' => '56jcbiw',
    'container.build_id' => 'adad83ab',
    'container.build_time' => 1528122105,
));
