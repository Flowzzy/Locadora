<?php
echo $this->Form->create(array('controller' => 'films', 'action' => 'searchtitulo', 'type' => 'post'));
echo $this->Form->input('buscador', array('placeholder' => 'insira filme', 'label' => false));
echo $this->Form->end('Buscar');
?>
<div class="col-md-9">
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Protagonista</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $film): ?>
                <tr>
                    <td><?php echo h($film['Film']['title']); ?>&nbsp;</td>
                    <td><?php echo h($film['Film']['protagonista']); ?>&nbsp;</td>
                    <td>
                    <td><?php echo h($film['Film']['Category_id']['designacao']); ?>&nbsp;</td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></small>
    </p>

    <?php
    $params = $this->Paginator->params();
    if ($params['pageCount'] > 1) {
        ?>
        <ul class="pagination pagination-sm">
            <?php
            echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
            echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
            ?>
        </ul>
    <?php } ?>

</div> <!-- end col md 9 -->
</div><!-- end row -->
<?php
print_r($films);
?>

</div><!-- end containing of content -->