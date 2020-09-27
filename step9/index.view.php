<h1>Branch is open or close</h1>
<?php foreach($branch as $key => $value) :?>
            <li>
                <?php if($key == 'open') :?>
                    <?php if($value == true) :?>
                    
                        <strong><?= ucwords($key) ;?></strong>
                        <span class = "icon">&#9989;</span>

                    <?php else :?>
                        <strong><?= ucwords($key) ;?></strong>
                        <span class = "icon">&#10006;</span>
                    <?php endif ;?>
                <?php else :?>
                    <strong><?= ucwords($key) ;?></strong>: <?= $value ;?>
                <?php endif ;?>
            </li>
        <?php endforeach ;?>
