        <div class="col-md-4 ">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0"><?php the_author_meta('description'); ?></p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <?php wp_get_archives('type=monthly'); ?>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://vk.com/lilviewer">ВК</a></li>
                        <li><a href="https://steamcommunity.com/id/LilViewer">Steam</a></li>
                        <li><a href="https://www.instagram.com/tinyviewer/?hl=ru">Instagram</a></li>
                    </ol>
                </div>
            </div>
        </div>

