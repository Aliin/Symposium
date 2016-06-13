<?PHP

//is called when one clicks on a category. If one does that, a GET function is called that links to this page and holds in the superglobal the category id.

require '../config.php';
require $MUP . $HMOD_HEAD;
require $MUP . $HAND_POST;


$posts = get_posts($_GET['catId']);

foreach ($posts as $displayPost) {
	require('../views/posts/display_single_post.php');
	dPost($displayPost);
}

include('../views/page/standard_footer.php');