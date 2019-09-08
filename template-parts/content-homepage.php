<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aoo
 */

?>

<?php $fields = get_fields(); ?>
<?php $colour = mt_rand(0,1) > 0.5 ? 'black' : 'white'; ?>


<?php //print_r($fields); ?>


<section class="homepage colour-mode-<?php echo $colour; ?>">


    <div class="wordmark">
        <img src="<?php echo $fields['aoo_wordmark'][$colour]['url']; ?>" alt="">
    </div>

    <div class="logo active">
        <img src="<?php echo $fields['aoo_logo'][$colour]['url']; ?>" alt="">
    </div>

    <div class="business-card">
        <div class="established">
            <img src="<?php echo $fields['established_graphic'][$colour]['url']; ?>" alt="">
        </div>
        <div class="location">
            <a href="<?php echo $fields['location_graphic']['url']; ?>" target="_blank">
                <img src="<?php echo $fields['location_graphic'][$colour]['url']; ?>" alt="">
            </a>
        </div>
        <div class="email">
            <a href="mailto:<?php echo $fields['email']['email']; ?>">
            <img src="<?php echo $fields['email'][$colour]['url']; ?>" alt=""> 
            </a>
        </div>
        <div class="links">
            <img src="<?php echo $fields['aoo_logo'][$colour]['url']; ?>" alt="">
            <ul>
                <?php foreach ($fields['links'] as $link): ?>
                    <?php if ($link['link']['active'] == 1) { ?>
                        <li><a href="<?php echo $link['link']['url']; ?>" class="js-link-<?php echo $link['link']['id']; ?>">- <?php echo $link['link']['label']; ?></a></li>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="rights">
        <img src="<?php echo $fields['all_rights_reserved'][$colour]['url']; ?>" alt="">
    </div>

   

    <div class="social">
        <div class="row">
        <?php foreach ($fields['icons'] as $icon): ?>
            <?php if ($icon['icon']['active'] == 1) { ?>
                <?php if ($icon['icon']['start_on_new_line'] == 1) { ?>
                    </div><div class="row">
                <?php } ?>
                <span style="width: <?php echo $icon['icon']['image'][$colour]['width']; ?>px"><a href="<?php echo $icon['icon']['url']; ?>" target="_blank"><img src="<?php echo $icon['icon']['image'][$colour]['url']; ?>" alt=""></a></span>
            <?php } ?>
        <?php endforeach; ?>
        </div>

    </div>

    <div class="catalogue">
        <?php $fields = get_fields(91); ?>
       
        <?php foreach ($fields['items'] as $item): ?>
            <?php if ($item['item']['active'] == 1) { ?>
                <div class="card">
                    <img src="<?php echo $item['item']['image']['url']; ?>" alt="">
                    <div class="info">
                        <h3><?php echo $item['item']['name']; ?></h3>
                        <p><?php echo $item['item']['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>

</section>

