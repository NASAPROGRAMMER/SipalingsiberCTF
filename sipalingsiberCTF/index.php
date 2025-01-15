<?php 
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTF SipalingSiber</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo.png" type="image/x-icon"/>
</head>
<body>
    <header>
        <div class="left-links">
            <a href="about.html">About</a>
            <a href="rules.html">Rules</a>
            <a href="userregistered.php">User Registered</a>
            <a href="panitiadata.php">Data Panitia</a>
        </div>
        <div class="right-links">
        <a href="creategambar.php">Berikan Kritik dan Saran</a>   
        <a href="pemanggilangambar.php">Kritik dan Saran</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </header>
    
    <div class="container">
        <h1>Capture the Flag SipalingSiber</h1>
        <div class="image-grid">
        <img src="hacker6.png" width="350px" height="300px">
        <img src="hacker.png" width="350px" height="330px">
        <img src="hacker4.png" width="350px" height="300px">
        </div>
        <div class="category-container">
            <!-- Forensic Category -->
            <div class="category">
                <h2>Forensic</h2>
                <div class="challenges">
                    <div class="challenge-box">
                        <h3>Challenge 1</h3>
                        <div class="challenge-details">
                            <p>You are a State Intelligence Services Officer. Some Field Intelligent reported to you a Drug Dealer. They communicate using a secret technique, i dont know some people call it "STRINGS", Go find it!</p>
                            <p>Check out <a href="https://mega.nz/file/iZpG1bjY#377cskGG2-KA2ZC5lQLAc4Zwz0VhxvNiLwz4ePH1EN4" target="_blank">HERE</a>.</p>
                            <input type="text" id="flag1" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag1')">Submit</button>
                        </div>
                    </div>
                    <div class="challenge-box">
                        <h3>Challenge 2</h3>
                        <div class="challenge-details">
                            <p>My friend is addicted to a cartoon movies. He keep sending me a random picture like this. He thinks there is a something hidden on this picture. but what this is just an ordinary picture hmm exif?.</p>
			    <p>Check out <a href="https://mega.nz/file/3U43RZqK#cfbuDJm3_5sFPCJ-_ENCoIW8Mfenj3BY8856y6GKJJk" target="_blank">HERE</a>.</p>
                            <p>Points: 150</p>
                            <input type="text" id="flag2" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag2')">Submit</button>
                        </div>
                    </div>
                    <div class="challenge-box">
                        <h3>Challenge 3</h3>
                        <div class="challenge-details">
                            <p>HAHA WHAT IS THIS STEGANO?.</p>
			    <p>Check out <a href="https://mega.nz/file/mcBAibCT#bwY0WDtiWR4lX1Uz1R_4e3cRQ0QXd-cd4a7b-56QGHk" target="_blank">HERE</a>.</p>
                            <p>Points: 200</p>
                            <input type="text" id="flag3" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag3')">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cryptography Category -->
            <div class="category">
                <h2>Cryptography</h2>
                <div class="challenges">
                    <div class="challenge-box">
                        <h3>Challenge 4</h3>
                        <div class="challenge-details">
                            <p>You find an encrypted message written by a suspicious man. He is known to use a simple encryption method to secure his messages. Your task is to decrypt this message and find the flag hidden inside.</p>
				<p>Check out <a href="https://mega.nz/file/vNpGCYiS#GPha_giprJ6JkJSl3jLHDicUQfakV-fdp_u7N8Yo3Uc" target="_blank">HERE</a>.</p>
                            <input type="text" id="flag4" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag4')">Submit</button>
                        </div>
                    </div>
                    <div class="challenge-box">
                        <h3>Challenge 5</h3>
                        <div class="challenge-details">
                            <p>I have a really good analysis skills. I think the girl in my class likes me. She always sending me a motivate poem. Can you find me out what the meaning all of this?.</p>
			    <p>Check out <a href="https://mega.nz/file/uZpFkZSR#YSJxn2L7z9XBtWBEX4EbJj9tSHg1jUmvBCkkLzGYXlw" target="_blank">HERE</a>.</p>	
                            <p>Points: 150</p>
                            <input type="text" id="flag5" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag5')">Submit</button>
                        </div>
                    </div>
                    <div class="challenge-box">
                        <h3>Challenge 6</h3>
                        <div class="challenge-details">
                            <p>ALL I want to say is base..</p>
	 	 	    <p>Check out <a href="https://mega.nz/file/jdYwyJoI#AyPhFy3qxEJkBTW19DDlaGe8tJt9fLYmOTxouSLifg8" target="_blank">HERE</a>.</p>
                            <p>Points: 200</p>
                            <input type="text" id="flag6" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag6')">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Osint Category -->
            <div class="category">
                <h2>Osint</h2>
                <div class="challenges">
                    <div class="challenge-box">
                        <h3>Challenge 7</h3>
                        <div class="challenge-details">
                            <p>You are a Detective. Someone just reported to you there is a missing child. And the last place that the kid last seen was here.
                            <p>Check out <a href="https://mega.nz/file/aIhWyLYC#X0KwoiRQh5S_bdFz8iA8Jy18LFXXx9osCyHdHZlNC0c" target="_blank">HERE</a>.</p>
                            
                            <p>Points: 100</p>
                            <input type="text" id="flag7" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag7')">Submit</button>
                        </div>
                    </div>
                    <div class="challenge-box">
                        <h3>Challenge 8</h3>
                        <div class="challenge-details">
                         <p> Your best friend just go holiday without you. and he dont want to tell you where he going at. Just find where this place is! .
                            <p>Check out <a href="https://mega.nz/file/HRA20CyT#n9-RPsGCnBLZsBZfY19iWJzexDKyiD_08oWbLiO79vw" target="_blank">HERE</a>.</p>
                            <input type="text" id="flag8" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag8')">Submit</button>
                        </div>
                    </div>
                    <div class="challenge-box">
                        <h3>Challenge 9</h3>
                        <div class="challenge-details">
                         <p> Your grandma just getting car crash. The police send you this picture but they dont give more details about.
                            <p>Check out <a href="https://mega.nz/file/LcxWDB7A#37J4aSoWfBw4Go_qN7IjEARvV7A-lHVZlaxR27vuE_8" target="_blank">HERE</a>.</p>
                            <input type="text" id="flag9" placeholder="Enter flag here" />
                            <button onclick="submitFlag('flag9')">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
// Menghubungkan ke database
require 'function.php'; // Sesuaikan dengan nama file koneksi Anda

// Mengambil tantangan dari database
$challenges_query = "SELECT * FROM challenges";
$challenges_result = mysqli_query($conn, $challenges_query);

// Memeriksa apakah query berhasil
if (!$challenges_result) {
    die("Query Error: " . mysqli_error($conn));
}

// Menangani pengiriman komentar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {
    $challenge_id = $_POST['challenge_id'];
    $username = $_POST['username'];
    $comment = $_POST['comment'];

    $insert_comment_query = "INSERT INTO comments (challenge_id, username, comment) VALUES ('$challenge_id', '$username', '$comment')";
    if (!mysqli_query($conn, $insert_comment_query)) {
        die("Error inserting comment: " . mysqli_error($conn));
    }
}

// Mengambil komentar untuk setiap tantangan
$comments_query = "SELECT * FROM comments";
$comments_result = mysqli_query($conn, $comments_query);
$comments = [];
while ($row = mysqli_fetch_assoc($comments_result)) {
    $comments[$row['challenge_id']][] = $row;
}

?>

    <style>
        /* Tambahkan gaya untuk bagian komentar */
        .comment-section {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .comment {
            background: rgba(0, 255, 0, 0.1);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>

<body>
    <main class="content">
        <section class="post">
            <h2>Create Challenge</h2>
            <form action="create_challenge.php" method="POST">
                <input type="text" name="title" placeholder="Challenge Title" required><br>
                <textarea name="description" placeholder="Challenge Description" required></textarea><br>
                <input type="number" name="points" placeholder="Points" required><br>
                <input type="url" name="link" placeholder="Challenge Link" required><br>
                <button type="submit">Submit Challenge</button>
            </form>
        </section>

        <section class="comment">
           
            <?php while ($challenge = mysqli_fetch_assoc($challenges_result)) : ?>
                <div class="challenge-item">
                    <h3><?php echo htmlspecialchars($challenge['title']); ?></h3>
                    <p><?php echo htmlspecialchars($challenge['description']); ?></p>
                    <p><?php echo htmlspecialchars($challenge['points']); ?></p>
                    <p><a href="<?php echo htmlspecialchars($challenge['link']); ?>" target="_blank"><?php echo htmlspecialchars($challenge['link']); ?></a></p>

                    <!-- Form untuk mengirim komentar -->
                    <form action="" method="POST" class="comment-form">
                        <input type="hidden" name="challenge_id" value="<?php echo $challenge['id']; ?>">
                        <input type="text" name="username" placeholder="Your Username" required><br>
                        <textarea name="comment" placeholder="Your Comment" required></textarea><br>
                        <button type="submit" name="submit_comment">Submit Comment</button>
                    </form>

                    <!-- Menampilkan komentar -->
                    <div class="comment-section">
                        <?php if (isset($comments[$challenge['id']])): ?>
                            <?php foreach ($comments[$challenge['id']] as $comment): ?>
                                <div class="comment">
                                    <strong><?php echo htmlspecialchars($comment['username']); ?>:</strong>
                                    <p><?php echo htmlspecialchars($comment['comment']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No comments yet.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    </main>


<?php
// Menutup koneksi
mysqli_close($conn);
?>



    <br>
    <br>
    <p style="font-size: 24px; font-weight: bold;">©2024 SipalingSiber. All rights reserved.</p>


    <!-- Modal for Notifications -->
    <div id="notificationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="notificationMessage"></p>
        </div>
    </div>
    <!-- Notifikasi Bar -->
<div id="notificationBar" class="notification-bar"></div>


    <script src="script.js"></script>
</body>
</html>