<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pharmacy $pharmacy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pharmacy->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pharmacy->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pharmacies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pharmacies form content">
            <?= $this->Form->create($pharmacy) ?>
            <fieldset>
                <legend><?= __('Edit Pharmacy') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('address');
                    echo $this->Form->control('status');
                    echo $this->Form->control('latitude');
                    echo $this->Form->control('length');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
