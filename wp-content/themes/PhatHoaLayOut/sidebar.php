<div class="sidebar clear">
    <?php if ( is_active_sidebar( 'block-after-content' ) ) : ?>
        <?php dynamic_sidebar( 'block-after-content' ); ?>
    <?php endif; ?>
    <style>
        .twitter{
            max-height: 400px!important;
            overflow: hidden;
            display: block;
            padding: 4px 0;
            margin-top: 4px;
        }
        .bdBlack{
            border: 1px solid black;
        }

    </style>

    <div class="twitter">
        <p class="cBlack " style="padding-left: 20px;">twitter</p><hr>
        <a class="twitter-timeline"
           href="https://twitter.com/twitterdev">
            Tweets by @TwitterDev
        </a>
    </div>
    <div class="twitter bdBlack">
        <p class="cBlack " style="padding-left: 20px;">INSTARGRAM</p><hr>
        <div style="height: 300px;">

        </div>
    </div>
</div><!--content_sidebar-->