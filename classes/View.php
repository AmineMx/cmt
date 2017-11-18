<?php
/**
 * Project :cmt
 * User: Amine
 * Date: 18/11/2017
 * Time: 11:36
 *
 **/

class View {
	public function render( $comments ) {

		foreach ( $comments as $i => $comment ) {
			?>
            <div class="comment">
                <span><?= $i ?></span>
                <span class="user"><?= $comment['user'] ?></span><br>
                <p>
					<?= $comment['text'] ?>
                </p>
            </div>
			<?php
		}
	}
}