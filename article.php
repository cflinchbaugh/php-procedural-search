<?php
    include 'header.php';
?>

<h1>Article Details</h1>

<div class="articles-wrapper">
    <?php
        $title = mysqli_real_escape_string($conn, $_GET['title']);
        $publishDate = mysqli_real_escape_string($conn, $_GET['date']);

        $sql = "SELECT * FROM article WHERE
            article_title= '$title' AND
            article_date='$publishDate'";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="article-wrapper">
                        <h3>' . $row['article_title'] . '</h3>
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
       