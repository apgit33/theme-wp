<?php

use MonTheme\CommentsWalker;

$count = absint(get_comments_number());
?>  
    <div>
        <figure id="comms" class="image">
        <img class="separator" src="<?=PATH?>/images/notes.svg" alt="separateur">
        </figure>
    </div>
    <div class="columns">
        <div class="column">

            <h2 class="title is-4 has-text-centered">
                <?php if ($count > 0): ?>
                    <?=$count?> Commentaire<?= $count > 1 ? 's' :'' ?>
                <?php else: ?>
                    Laisser un commentaire
                <?php endif ?>
            </h2>
            </div>
    </div>

<?php if (comments_open()): ?>
    <div class="columns">
        <div class="column">
            <?php comment_form([
                'title_reply' => "",
                'class_submit' => "submit button",
                ])  ?>
        </div>
    </div>

<?php endif ?>
        <?php wp_list_comments(['style' => 'div', 'walker' => new CommentsWalker()]) ?>
        <div class="columns is-centered">
            <div class="column has-text-centered">
                <?php paginate_comments_links() ?>
            </div>
        </div>
       

        <div>
        <figure class="image">
            <img class="separator" src="<?=PATH?>/images/notes.svg" alt="separateur">
        </figure>
    </div>