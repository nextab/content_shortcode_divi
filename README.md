# content_shortcode_divi
This little plugin allows you to load any element in your Divi library and output it wherever you want (even inside another Divi module)

# How to use:
1. Install plugin (or copy / paste the plugin code in the functions.php of your child theme).
2. Save any kind of layout in the Divi library (can be a module, but can also be a row or even a section).
3. Once you're done editing your layout, refer to it with the shortcode [nxt_content id="123"] and replace "123" with the post ID of the saved layout (you can grab the post ID from the URL of the layout, which should look something like: https://yourdomain.com/wp-admin/post.php?post=6756&action=edit -> in this example, "6756" would be the post ID you want to reference)
