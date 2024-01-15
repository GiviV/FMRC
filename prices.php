<?php
    require_once 'dashboard/config/connect.php';
    $prices = mysqli_query($connect, "SELECT * FROM `prices`");
    $prices = mysqli_fetch_all($prices);
?>




    <?php
        require_once 'includes/header.php';
    ?>
    <section class="container doctors-section">
        <div class="search-title">
            <p class="gilroy-dark-48">Service Prices</p>

            <form class="search-box" method="get">
                <input name="search" type="text" value="<?= $_GET['search'] ?>" class="search-input" placeholder="Search Doctor...">
          
                <button class="search-button" type="submit">
                  <img src="imgs/search.svg" alt="Search">
                </button>
             </form>
        </div>

        <?php 
if (isset($_GET['search'])) { 
    
    $s = trim(htmlspecialchars($_GET['search'])); 
        $s_query ="WHERE `title` LIKE '%$s%' OR `prise` LIKE '%$s%'";
    }
 else { 
    $s = '';
    $s_query = ''; 
} 
?>
        <div class="prices-container">
                    <?php 
                            $sql_news = mysqli_query($connect, "SELECT * FROM `prices` $s_query"); 

                            while($row_news = mysqli_fetch_assoc($sql_news)) {
                    ?> 
            <div class="price">
            <p><?= $row_news['title']?> </p>
                <p><?= $row_news['prise']?>₾</p>
            </div>
            <?php 
                        }
                    ?>                 
        </div>
    </section>

    <?php
        require_once 'includes/footer.php';
    ?>

<script>
        function openClose() {
            document.getElementById("mobile-nav").classList.toggle("hidden");
            document.getElementById("menu-opener").classList.toggle("close");
        }
</script>

<script>
        function dissapear() {
            document.getElementById("scroll-down").classList.add("dissapear");
            setTimeout(function () { document.getElementById("scroll-down").classList.remove('dissapear') }, 500);
        }
</script>

</body>
</html>