<?php
echo $this->Form->create(array('controller' => 'ClientsCopy', 'action' => 'searchperdate', 'type' => 'post'));
echo $this->Form->input('buscador', array('placeholder' => 'insert date yyyy-mm-dd', 'label' => false));
echo $this->Form->end('Buscar');
?>
<div class="col-md-9">
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th>Film</th>
                <th>Data de Devolucao</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $aluguer): ?>
                <tr>
                    <td><?php echo h($aluguer['ClientsCopy']['Copy_id']); ?>&nbsp;</td>
                    <td><?php echo h($aluguer['ClientsCopy']['devdate']); ?>&nbsp;</td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></small>
    </p>

   

</div> <!-- end col md 9 -->
</div><!-- end row -->


</div><!-- end containing of content -->