<?php include 'header.php'; ?>
<?php include 'db.php'; ?>

<div class="container">
    <h1>My Projects</h1>
    <p>Explore my design work across packaging, branding, and digital media.</p>

    <!-- Filter Buttons -->
    <div class="filter-buttons">
        <button onclick="filterProjects('all')">All</button>
        <button onclick="filterProjects('packaging')">Packaging</button>
        <button onclick="filterProjects('digital')">Digital</button>
        <button onclick="filterProjects('marketing')">Marketing</button>
    </div>

    <!-- Project Grid -->
    <div class="portfolio-grid">
        <?php
        $sql = "SELECT * FROM projects ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "
                <div class='portfolio-item' data-category='{$row['category']}'>
                    <img src='{$row['image']}' alt='{$row['title']}'>
                    <h3>{$row['title']}</h3>
                    <p>{$row['description']}</p>
                </div>
                ";
            }
        } else {
            echo "<p>No projects available yet.</p>";
        }
        ?>
    </div>
</div>

<script>
function filterProjects(category) {
    const items = document.querySelectorAll('.portfolio-item');
    items.forEach(item => {
        if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>

<?php include 'footer.php'; ?>
