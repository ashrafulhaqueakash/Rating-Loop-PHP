   <?php
                function star_rating($rating)
                {
                    $rating_round = round($rating * 2) / 2;
                    if ($rating_round <= 0.5 && $rating_round > 0) {
                        return '<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>';
                    }
                    if ($rating_round <= 1 && $rating_round > 0.5) {
                        return '<span class="dashicons dashicons-star-filled"></span>';
                    }
                    if ($rating_round <= 1.5 && $rating_round > 1) {
                        return '<span class="dashicons dashicons-star-filled"></span>';
                    }
                    if ($rating_round <= 2 && $rating_round > 1.5) {
                        return '<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>';
                    }
                    if ($rating_round <= 2.5 && $rating_round > 2) {
                        return '<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>';
                    }
                    if ($rating_round <= 3 && $rating_round > 2.5) {
                        return '<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>';
                    }
                    if ($rating_round <= 3.5 && $rating_round > 3) {
                        return '<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>';
                    }
                    if ($rating_round <= 4 && $rating_round > 3.5) {
                        return '<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>';
                    }
                    if ($rating_round <= 4.5 && $rating_round > 4) {
                        return '<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-half"></span>';
                    }
                    if ($rating_round <= 5 && $rating_round > 4.5) {
                        return '<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>';
                    }
                }
                ?>
