<?PHP

//is called when one clicks on a category. If one does that, a GET function is called that links to this page and holds in the superglobal the category id.

include('../views/page/standard_header.php');

require '../database/displayed_posts.php';

$posts = get_posts($_GET['id']);

foreach ($posts as $displayPost) {
	require('../includes/posts/display_single_post.php');
	dPost($displayPost);
}

include('../views/page/standard_footer.php');