<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($name, $params)->html();
} elseif ($_instance->childHasBeenRendered('g6FyCKB')) {
    $componentId = $_instance->getRenderedChildComponentId('g6FyCKB');
    $componentTag = $_instance->getRenderedChildComponentTagName('g6FyCKB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('g6FyCKB');
} else {
    $response = \Livewire\Livewire::mount($name, $params);
    $html = $response->html();
    $_instance->logRenderedChild('g6FyCKB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH D:\juc\desaPHP\entornovirtual\code\tdd\vendor\livewire\livewire\src\Testing/../views/mount-component.blade.php ENDPATH**/ ?>