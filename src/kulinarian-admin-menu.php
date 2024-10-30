<?php

add_action('admin_menu', 'kulinarian_admin_menu');

if (!function_exists('kulinarian_admin_menu')) {
    function kulinarian_admin_menu()
    {
        add_menu_page(
            __('Kulinarian', 'kulinarian-admin'),
            __('Kulinarian', 'kulinarian-admin'),
            'activate_plugins',
            'kulinarian-admin',
            'kulinarian_admin_html',
            'dashicons-carrot',
            '61.58'
        );
    }
}

if (!function_exists('kulinarian_admin_html')) {
    function kulinarian_admin_html()
    {
echo <<<'EOL'
<h1>Kulinarian admin</h1>
<div style="width:auto;max-width:500px">
    <p><strong>IMPORTANT</strong>: The <em>Kulinarian.com Recipe Embed</em> plugin is a "<strong><em>Hosted Service</em></strong>." This means a FREE Kulinarian.com account is required to use this plugin and all of your recipes will be hosted on Kulinarian.com.</p>
    <p><strong>Why must my recipes be hosted on Kulinarian.com?</strong></p>
    <p>For performance and scalability! Wordpress can be very slow. Therefore this plugin uses the Kulinarian.com API's to store your recipe data in the Kulinarian.com databases, which are specifically optimized for storing and serving recipes.</p>
    <p>This means your website's database will remain optimized for serving blog posts and content, while Kulinarian.com handles your recipes.</p>
    <h3>How to add recipes to your blog posts</h3>
    <p>Follow these instructions for <a href="https://www.kulinarian.com/help/recipe-embed-wordpress">adding recipes to a Wordpress website</a></p>
    <p><strong>IMPORTANT</strong>: This plugin automatically adds the Kulinarian Recipe Embed code to your website's footer with <strong><em>wp_footer</em></strong></p>
    <p>Therefore, you do not have to follow the step for adding this code. You're now set up and ready to start linking to recipes in your blog posts.</p>
    <textarea style="height:100px; width:100%;">
<script>/* Kulinarian Recipe Embed (do not include newlines/breaks) */!function(e,n,t,a,i,c){function o(){getEmbed(typeof config == "undefined"?{}:config,a)}i=n.createElement(t),c=n.getElementsByTagName(t)[0],i.id="kaembed",i.async=1,i.src=a,c.parentNode.insertBefore(i,c),i.addEventListener?i.addEventListener("load",function(){o()},!1):i.attachEvent&&i.attachEvent("onload",function(){o()})}(window,document,"script","https://www.kulinarian.com/js/embed.js");</script>
    </textarea>
</div>
EOL;
    }
}