<?php include('includes/header.php'); ?>
<?php if($topics) : ?>
    <ul id="topics">
        <?php foreach ($topics as $topic) : ?>
            <li class="topic">
            <div class="row">
            <div class="col-md-2">
                <img class="avatar pull-left" src="images/avatars/<?php echo $topic['avatar']; ?>">
            </div>    
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><a href="topic.php?id=<?php echo $topic['id']; ?>"><?php echo $topic['title']; ?></a></h3>
                    <div class="topic-info">
                        <a href="topics.php?category=<?php echo urlFormat($topic['category_id']); ?>"><?php echo $topic['name']; ?></a> >> 
                        <a href="topics.php?user=<?php echo urlFormat($topic['user_id']); ?>"><?php echo $topic['username']; ?></a> >>
                        Posted on: <?php echo formatDate($topic['create_date']); ?>
                    <span class="badge pull-right"><?php echo replyCount($topic['id']); ?></span>
                    </div>
                </div>    
            </div>
            </div>
            </li>
    <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>No Topics to Display.</p>
<?php endif; ?>


<h3>Estadisticas del Foro</h3>
<ul>
    <li>Numero total de Usuarios: <strong><?php echo $totalUsers; ?></strong></li>
    <li>Número total de Topics: <strong><?php echo $totalTopics; ?></strong></li>
    <li>Numero total de Categorias: <strong><?php echo $totalCategories; ?></strong></li>
</ul>
<?php include('includes/footer.php'); ?>
