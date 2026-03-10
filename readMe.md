# Assignment 2 - Custom WordPress theme

## WordPress Theme Structure & Architecture

In this assignmenyt I created a custom WordPress theme using several template files. The theme includes files like header.php, footer.php, index.php, single.php, and page.php, which work together to build the layout of the website. In my theme, header.php opens the HTML document and displays the site title and navigation menu. footer.php closes the page and includes the wp_footer() hook. The functions.php file loads the stylesheet and enables important features like the title tag, featured images, and the navigation menu. These files together create the structure and design of the theme.

## The Loop & Template Tags

The Loop is the main way WordPress shows posts on a page. It checks if posts exist and then goes through each post to display the content. The Loop starts with have_posts(), which checks if there are posts available. Then the_post() prepares the post data so it can be displayed.

Inside the Loop I used template tags to show information from the posts. For example, the_title() shows the title of the post and the_content() shows the full article. I also used the_excerpt() to display a short preview of the post. Other template tags I used include the_author() to show the author name and the_time() to display the post date. These template tags help the theme show dynamic content from WordPress.