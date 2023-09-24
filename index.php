<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != TRUE){
    header("location: welcome.php");
    exit;
}
//echo $_SESSION['loggedin'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/website3new/css files/index.css">
    <title>UE</title>
</head>

<body>
    <nav class="navbar background-dark h-nav-resp">
        <div class="hide-icon">
            <img src="/website3new/imgs/logo.jpg" alt="">
            <p style="color: white; margin-left: 10px;">Unique Education</p>
        </div>
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="/website3new/imgs/logo.jpg" alt="logo.."></div>
            <a href="/website3new/php files/index.php"><li class="li-nav1 li-resp">Home</li></a>
            <a href="/website3new/php files/about.php"><li class="li-nav2 li-resp">About</li></a>
            <a href="/website3new/php files/services.php"><li class="li-nav3 li-resp">Services</li></a>
            <a href="/website3new/php files/contect.php"><li class="li-nav4 li-resp">Contect Us</li></a>
        </ul>
        <div class="rightnav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <div style="background: black; padding: 2px;">
        <div class="search2">
            <input type="text" name="search">
            <button>Search</button>
        </div>
    </div>
    <div style = "background: #000000e0; background: #000000e0; display: flex; align-items: center; justify-content: space-between; padding: 5px 15px;" class="buttons">
        <h3 style = "color: white; font-family: sans-serif;">Welcome <?php echo $_SESSION['userid'] ?></h3>
        <a href="/website3new/php files/loguot.php">
            <div style = "border-radius: 5px; padding: 4px 7px; margin: 1px; border: 1px solid white; background: white; color: black; font-family: sans-serif; font-size: 9px; display: flex;" >
                <p style = "font-size: 14px; margin-right: 6px;">log out</p>
                <i style = "font-size: 14px; position: inherit;" class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
            </div>
        </a>
    </div>
    <section class="background firstsection">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">The future of Education is here</p>
                <p class="text-small">In this world 7 billion people we need to educate all of them. this is the future of an educated world and we are proud to say that "The future of Education is here" </p>
            </div>
            <div class="secondhalf">
                <img src="/website3new/imgs/logo.jpg" alt="loding...">
            </div>
        </div>
    </section>
    <section class="secondsection ">
        <div class="button">
            <a href="/website3new/php files/notes.php">
                <div>
                    <img style="width: 170%;" src="/website3new/imgs/book2.jpg" alt="book-icon.." class="icons">
                    <h2>Notes</h2>
                </div>
            </a>
        </div>
        <div class="button">
            <a href="/website3new/php files/videos.php">
                <div>
                    <img style="width: 100%;" src="/website3new/imgs/videoicon.png" alt="book-icon.." class="icons">
                    <h2>Videos</h2>
                </div>
            </a>
        </div>
        <div class="button">
            <a href="/website3new/php files/liveclasses.php">
                <div>
                    <img style="width: 140%;" src="/website3new/imgs/liveclasses.jpg" alt="book-icon.." class="icons">
                    <h2>Live Classes</h2>
                </div>
            </a>
        </div>
        <div class="button">
            <a href="/website3new/php files/askyourdoubts.php">
                <div>
                    <img style="width: 160%;" src="/website3new/imgs/ask.jpg" alt="book-icon.." class="icons">
                    <h2>Ask Your Doubts</h2>
                </div>
            </a>
        </div>

    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">Why you select the Unique Education </p>
            <p class="sectionsubtag text-small">Education ipsum dolor, sit amet consectetur adipisicing elit. Placeat
                libero veritatis
                totam quas sit alias similique aut ea harum molestiae. Corporis ullam obcaecati necessitatibus,
                asperiores
                voluptas qui ipsam facere rem, quas soluta tempore amet nobis, facilis iste consequuntur? Optio autem
                atque
                ad! Non saepe similique eum accusantium alias, facilis architecto?</p>
        </div>
        <div class="thumbnail">
            <img src="/website3new/imgs/thumb1 (1).jpeg" alt="loding.." class="imgfluid">
        </div>
    </section>
    <section class="section sec-left">
        <div class="paras">
            <p class="sectiontag text-big">The end of your search is here </p>
            <p class="sectionsubtag text-small">Education ipsum dolor, sit amet consectetur adipisicing elit. Placeat
                libero veritatis
                totam quas sit alias similique aut ea harum molestiae. Corporis ullam obcaecati necessitatibus,
                asperiores
                voluptas qui ipsam facere rem, quas soluta tempore amet nobis, facilis iste consequuntur? Optio autem
            </p>
        </div>
        <div class="thumbnail">
            <img src="/website3new/imgs/thumb2.jpeg" alt="loding.." class="imgfluid">
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">The UE is No.1 coaching center </p>
            <p class="sectionsubtag text-small">Education ipsum dolor, sit amet consectetur adipisicing elit. Placeat
                libero veritatis
                ad! Non saepe similique Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dignissimos
                accusantium, numquam maiores corrupti officia sequi, dolore quo libero provident quas esse perferendis
                porro, perspiciatis totam vitae assumenda ad quae! eum accusantium alias, facilis architecto?</p>
        </div>
        <div class="thumbnail">
            <img src="/website3new/imgs/thumb3.jpeg" alt="loding.." class="imgfluid">
        </div>
    </section>
    <hr>
    <section class="bottom">
        <p class="mid-para-resp"><b> contect us :</b> uniqeeducation@gmail.com 18001805646 18001805646 </p>
    </section>
    <section class="contect-bottom background-dark">
        <a style=" border-left: 2px  solid rgb(160, 157, 157);" class="contect-logo-a" href=""><img class="contect-logo"
                src="/website3new/imgs/instagram.png" alt=""></a>
        <a class="contect-logo-a" href=""><img style="border-radius: 6px;" class="contect-logo" src="/website3new/imgs/facebook.jpg"
                alt=""></a>
        <a class="contect-logo-a" href=""><img class="contect-logo" src="/website3new/imgs/twit.png" alt=""></a>
        <a class="contect-logo-a" href=""><img style="background:white; border-radius: 10px;
            padding: 0px 3px;" class="contect-logo" src="/website3new/imgs/youtube.png" alt=""></a>
    </section>
    <section class="bottom-last">
        <p class="mid-para-resp">&copy; 2023 Unique Education. All rights reserved.</p>
    </section>
    <script src="/website3new/js files/resp.js"></script>
</body>

</html>