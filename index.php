<?php
    include 'header.php';
?>

<h1>Home</h1>

<h2>Articles</h2>
<a href="./article_create.php">Create Article</a>

<div class="articles-wrapper">
    <?php
        $sql = 'SELECT * FROM article';
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="article-wrapper">
                        <a href="article.php?title=' . $row['article_title'] . '&date=' . $row['article_date'] .'">  
                            <h3>' . $row['article_title'] . '</h3>
                        </a>
                        <div class="article_text">' . $row['article_text'] . '</div>
                        <div class="article-info-wrapper">
                            <div class="article_author">' . $row['article_author'] . '</div>
                            <div class="article-separator"> - </div>
                            <div class="article_date">' . $row['article_date'] . '</div>
                        </div>
                    </div>
                ';
            }

        } else {
            echo 'No Articles!';
        }

    ?>
</div>

<?php
    include 'footer.php';
?>
       