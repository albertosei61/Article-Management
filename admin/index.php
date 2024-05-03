<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$articles = Article::getAll($conn);

?>

<?php require '../includes/header.php'; ?>





<h2 style="color: blue; font-size: 20px;">Administration Page</h2>
	<p style="color: #001a33; font-size: 20px;"><a href="new-article.php">Add New Article</a></p>
	
		<?php if (empty($articles)): ?>
			<p>No articles found.</p>
		<?php else: ?>

		<table>
			<thead>
				<th style="color: #001a33; font-size: 20px;">Title</th>
			</thead>
			<tbody>
				<?php foreach ($articles as $article): ?>
					<tr>
						<td>
							<a href="article.php?id=<?= $article['id']; ?>"> <?=
							htmlspecialchars($article['title']); ?></a>
							
						</td>
					</tr>

					<?php endforeach; ?>
			</tbody>
		</table>    

		<?php endif; ?>

		<?php require '../includes/footer.php'; ?>