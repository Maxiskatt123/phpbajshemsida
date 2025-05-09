<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony Music Entertainment</title>
    <style>
        :root {
            --primary-color: #0072ce;
            --secondary-color: #f5f5f5;
            --dark-color: #222222;
            --light-color: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }
        
        body {
            background-color: var(--secondary-color);
            color: var(--dark-color);
        }
        
        header {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--light-color);
        }
        
        .logo span {
            color: var(--primary-color);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 1.5rem;
        }
        
        nav ul li a {
            color: var(--light-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: var(--primary-color);
        }
        
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/api/placeholder/1200/500') center/cover no-repeat;
            color: var(--light-color);
            padding: 5rem 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 800px;
            margin: 0 auto 2rem auto;
        }
        
        .btn {
            display: inline-block;
            background: var(--primary-color);
            color: var(--light-color);
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #005ba8;
            transform: translateY(-3px);
        }
        
        .featured-artists {
            padding: 4rem 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title h2 {
            display: inline-block;
            font-size: 2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .artist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .artist-card {
            background: var(--light-color);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .artist-card:hover {
            transform: translateY(-10px);
        }
        
        .artist-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }
        
        .artist-info {
            padding: 1.5rem;
        }
        
        .artist-info h3 {
            margin-bottom: 0.5rem;
            font-size: 1.4rem;
        }
        
        .artist-info p {
            color: #666;
            margin-bottom: 1rem;
        }
        
        .new-releases {
            padding: 4rem 0;
            background-color: var(--dark-color);
            color: var(--light-color);
        }
        
        .album-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 2rem;
        }
        
        .album-card {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
        }
        
        .album-card:hover {
            transform: scale(1.05);
            background: rgba(255,255,255,0.2);
        }
        
        .album-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .album-info {
            padding: 1rem;
        }
        
        .album-info h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        
        .album-info p {
            font-size: 0.9rem;
            opacity: 0.7;
        }
        
        .latest-news {
            padding: 4rem 0;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .news-card {
            background: var(--light-color);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .news-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        
        .news-info {
            padding: 1.5rem;
        }
        
        .news-date {
            color: var(--primary-color);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .news-info h3 {
            margin-bottom: 1rem;
        }
        
        .news-info p {
            color: #666;
            margin-bottom: 1.5rem;
        }
        
        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer-column ul li a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column ul li a:hover {
            color: var(--primary-color);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: var(--light-color);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            color: #aaa;
        }
        
        @media (max-width: 768px) {
            .logo-container {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 1rem;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0 0.7rem;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <?php
    // Database configuration - replace with actual credentials in production
    $dbConfig = [
        'host' => 'localhost',
        'username' => 'username',
        'password' => 'password',
        'database' => 'sony_music_db'
    ];

    // Function to establish database connection
    function connectDB($config) {
        try {
            $conn = new mysqli($config['host'], $config['username'], $config['password'], $config['database']);
            if ($conn->connect_error) {
                throw new Exception("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        } catch (Exception $e) {
            // In production, log this error instead of displaying
            return null;
        }
    }

    // Function to get featured artists
    function getFeaturedArtists($conn, $limit = 4) {
        $artists = [];
        
        // Mock data for demo purposes
        if (!$conn) {
            return [
                ['id' => 1, 'name' => 'Adele', 'genre' => 'Pop', 'image' => '/api/placeholder/250/250'],
                ['id' => 2, 'name' => 'Foo Fighters', 'genre' => 'Rock', 'image' => '/api/placeholder/250/250'],
                ['id' => 3, 'name' => 'Harry Styles', 'genre' => 'Pop', 'image' => '/api/placeholder/250/250'],
                ['id' => 4, 'name' => 'Doja Cat', 'genre' => 'Hip-Hop/R&B', 'image' => '/api/placeholder/250/250']
            ];
        }
        
        // Actual database query in production
        $sql = "SELECT id, name, genre, image_url FROM artists WHERE featured = 1 ORDER BY name LIMIT ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row = $result->fetch_assoc()) {
            $artists[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'genre' => $row['genre'],
                'image' => $row['image_url']
            ];
        }
        
        return $artists;
    }

    // Function to get new releases
    function getNewReleases($conn, $limit = 6) {
        $albums = [];
        
        // Mock data for demo purposes
        if (!$conn) {
            return [
                ['id' => 1, 'title' => 'Renaissance', 'artist' => 'Beyoncé', 'release_date' => '2024-04-15', 'image' => '/api/placeholder/200/200'],
                ['id' => 2, 'title' => 'Future Nostalgia', 'artist' => 'Dua Lipa', 'release_date' => '2024-04-10', 'image' => '/api/placeholder/200/200'],
                ['id' => 3, 'title' => 'Happier Than Ever', 'artist' => 'Billie Eilish', 'release_date' => '2024-04-05', 'image' => '/api/placeholder/200/200'],
                ['id' => 4, 'title' => 'An Evening With Silk Sonic', 'artist' => 'Silk Sonic', 'release_date' => '2024-03-28', 'image' => '/api/placeholder/200/200'],
                ['id' => 5, 'title' => '30', 'artist' => 'Adele', 'release_date' => '2024-03-20', 'image' => '/api/placeholder/200/200'],
                ['id' => 6, 'title' => 'Justice', 'artist' => 'Justin Bieber', 'release_date' => '2024-03-15', 'image' => '/api/placeholder/200/200']
            ];
        }
        
        // Actual database query in production
        $sql = "SELECT a.id, a.title, art.name as artist, a.release_date, a.cover_image 
                FROM albums a 
                JOIN artists art ON a.artist_id = art.id 
                ORDER BY a.release_date DESC 
                LIMIT ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row = $result->fetch_assoc()) {
            $albums[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'artist' => $row['artist'],
                'release_date' => $row['release_date'],
                'image' => $row['cover_image']
            ];
        }
        
        return $albums;
    }

    // Function to get latest news
    function getLatestNews($conn, $limit = 3) {
        $news = [];
        
        // Mock data for demo purposes
        if (!$conn) {
            return [
                ['id' => 1, 'title' => 'Sony Music Announces New Global Initiative', 'content' => 'Sony Music Entertainment launches a new global initiative to support emerging artists...', 'date' => '2024-04-28', 'image' => '/api/placeholder/300/200'],
                ['id' => 2, 'title' => 'Grammy Nominations Announced', 'content' => 'Several Sony Music artists receive multiple Grammy nominations, leading the industry...', 'date' => '2024-04-22', 'image' => '/api/placeholder/300/200'],
                ['id' => 3, 'title' => 'World Tour Dates Announced', 'content' => 'Sony Music artist announces world tour dates for 2025, tickets go on sale next month...', 'date' => '2024-04-15', 'image' => '/api/placeholder/300/200']
            ];
        }
        
        // Actual database query in production
        $sql = "SELECT id, title, content, DATE_FORMAT(published_date, '%Y-%m-%d') as date, image_url 
                FROM news 
                ORDER BY published_date DESC 
                LIMIT ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row = $result->fetch_assoc()) {
            $news[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'content' => substr($row['content'], 0, 150) . '...',
                'date' => $row['date'],
                'image' => $row['image_url']
            ];
        }
        
        return $news;
    }

    // Initialize database connection
    $conn = connectDB($dbConfig);
    
    // Get data for different sections
    $featuredArtists = getFeaturedArtists($conn);
    $newReleases = getNewReleases($conn);
    $latestNews = getLatestNews($conn);
    
    // Close connection
    if ($conn) {
        $conn->close();
    }
    ?>

    <header>
        <div class="container">
            <div class="logo-container">
                <div class="logo">SONY <span>MUSIC</span></div>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#artists">Artists</a></li>
                        <li><a href="#releases">New Releases</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h1>Discover the Sound of Tomorrow</h1>
            <p>Sony Music Entertainment brings you the finest artists and music from around the world. Explore our catalog of groundbreaking talent and chart-topping hits.</p>
            <a href="#releases" class="btn">Latest Releases</a>
        </div>
    </section>

    <section id="artists" class="featured-artists">
        <div class="container">
            <div class="section-title">
                <h2>Featured Artists</h2>
            </div>
            <div class="artist-grid">
                <?php foreach ($featuredArtists as $artist): ?>
                <div class="artist-card">
                    <img src="<?php echo htmlspecialchars($artist['image']); ?>" alt="<?php echo htmlspecialchars($artist['name']); ?>" class="artist-img">
                    <div class="artist-info">
                        <h3><?php echo htmlspecialchars($artist['name']); ?></h3>
                        <p><?php echo htmlspecialchars($artist['genre']); ?></p>
                        <a href="#" class="btn">View Profile</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="releases" class="new-releases">
        <div class="container">
            <div class="section-title">
                <h2>New Releases</h2>
            </div>
            <div class="album-grid">
                <?php foreach ($newReleases as $album): ?>
                <div class="album-card">
                    <img src="<?php echo htmlspecialchars($album['image']); ?>" alt="<?php echo htmlspecialchars($album['title']); ?>" class="album-img">
                    <div class="album-info">
                        <h3><?php echo htmlspecialchars($album['title']); ?></h3>
                        <p><?php echo htmlspecialchars($album['artist']); ?></p>
                        <p><?php echo htmlspecialchars($album['release_date']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="news" class="latest-news">
        <div class="container">
            <div class="section-title">
                <h2>Latest News</h2>
            </div>
            <div class="news-grid">
                <?php foreach ($latestNews as $news): ?>
                <div class="news-card">
                    <img src="<?php echo htmlspecialchars($news['image']); ?>" alt="<?php echo htmlspecialchars($news['title']); ?>" class="news-img">
                    <div class="news-info">
                        <p class="news-date"><?php echo htmlspecialchars($news['date']); ?></p>
                        <h3><?php echo htmlspecialchars($news['title']); ?></h3>
                        <p><?php echo htmlspecialchars($news['content']); ?></p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Sony Music</h3>
                    <p>Sony Music Entertainment is a global recorded music company with a roster of current artists that includes a broad array of both local artists and international superstars.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f">f</i></a>
                        <a href="#"><i class="fab fa-twitter">t</i></a>
                        <a href="#"><i class="fab fa-instagram">i</i></a>
                        <a href="#"><i class="fab fa-youtube">y</i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#artists">Artists</a></li>
                        <li><a href="#releases">New Releases</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Labels</h3>
                    <ul>
                        <li><a href="#">Columbia Records</a></li>
                        <li><a href="#">RCA Records</a></li>
                        <li><a href="#">Epic Records</a></li>
                        <li><a href="#">Arista Records</a></li>
                        <li><a href="#">Sony Classical</a></li>
                    </ul>
                </div>
                <div id="contact" class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Sony Music Entertainment</li>
                        <li>25 Madison Avenue</li>
                        <li>New York, NY 10010</li>
                        <li>Email: info@sonymusic.com</li>
                        <li>Phone: +1 (212) 555-1000</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> Sony Music Entertainment. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>