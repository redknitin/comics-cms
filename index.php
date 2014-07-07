<?php include('config.php'); include('functions.php'); ?><!doctype html>
<html>
<head>
<title>
<?php load_title(); ?>
</title>
<link rel="stylesheet" href="style.css" />
<?php if (!is_local()): ?>
<script type="text/javascript" language="javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35481111-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php endif; ?>
</head>
<body>
  <h1 class="logo"><a href="<?php echo KNRCOMIX_BASEURL; ?>">KNReddy Comics</a></h1>

<?php if (is_load_marked('teaching-a-class')) { ?>
  <div class="post" role="article">
    <h2><a href="<?php load_permalink('teaching-a-class'); ?>">Because we never questioned the master</a></h2>
    <p class="date">October 13, 2012</p>
    <p class="comic-strip">
      <img src="images/comics-teaching-a-class.png" alt="Because we never questioned the master" />
    </p>
  </div>
<?php } ?>

<?php if (is_load_marked('setting-own-job-titles')) { ?>
  <div class="post" role="article">
    <h2><a href="<?php load_permalink('setting-own-job-titles'); ?>">Setting your own job titles</a></h2>
    <p class="date">October 12, 2012</p>
    <p class="comic-strip">
      <img src="images/comics-setting-own-job-titles.png" alt="Setting your own job titles" />
    </p>
  </div>
<?php } ?>

<?php if (is_load_marked('joys-of-windows-user')) { ?>
  <div class="post" role="article">
    <h2><a href="<?php load_permalink('joys-of-windows-user'); ?>">The joys of a Windows user</a></h2>
    <p class="date">October 11, 2012</p>
    <p class="comic-strip">
      <img src="images/comics-joys-of-windows-user.png" alt="The joys of a Windows user" />
    </p>
  </div>
<?php } ?>

<?php if (is_load_marked('its-workingg')) { ?>
  <div class="post" role="article">
    <h2><a href="<?php load_permalink('its-workingg'); ?>">It's workingg!</a></h2>
    <p class="date">October 10, 2012</p>
    <p class="comic-strip">
      <img src="images/comics-its-workingg.png" alt="It's workingg!!" />
    </p>
    <p class="side-show" role="note">
<a href="https://www.facebook.com/shravya.shravz/posts/508305512512981" rel="nofollow">FB Post</a><br />
<b>SS:</b> Its workingg :D :D<br />
...and so this comic strip came into being
    </p>
  </div>
<?php } ?>

<?php if (is_load_marked('hiring-for-a-startup')) { ?>
  <div class="post" role="article">
    <h2><a href="<?php load_permalink('hiring-for-a-startup'); ?>">Hiring for a startup</a></h2>
    <p class="date">October 9, 2012</p>
    <p class="comic-strip">
      <img src="images/comics-hiring-for-a-startup.png" alt="Hiring for a startup" />
    </p>
    <p class="side-show" role="note">
<a href="https://www.facebook.com/krishnachaitanyakavuri/posts/538658042818423" rel="nofollow">FB Post</a><br />
<b>KCK:</b> Flirting is the only job in the world that a man cannot include in his resume despite having years of experience and number of references :( :(<br />
<b>KNR:</b> Don't be too sure that a man cannot include it in his resume <a href="http://imgur.com/xfu2G" rel="nofollow">http://imgur.com/xfu2G</a><br />
<b>KCK:</b>  sir suppose you offer me a job and i put my experience as 10 years..will you hire me???<br />
...and so this comic strip came into being
    </p>
  </div>
<?php } ?>

<?php if (is_load_marked('coming-soon')) { ?>
  <div class="post" role="article">
    <h2><a href="<?php load_permalink('coming-soon'); ?>">Coming soon!</a></h2>
    <p class="date">October 8, 2012</p>
    <p class="body">
      There's a new comic series coming to the web, right here. It is going to be developed with open-source software - Inkscape running on Ubuntu Linux and brought to you through PHP scripts.
    </p>
  </div>
<?php } ?>

<div class="footer">
  <p>
    <a href="<?php echo KNRCOMIX_BASEURL; ?>" role=”navigation”>Home</a> &nbsp; | &nbsp; <a href="javascript:void(alert('nitin-at-knreddy.com'));" role=”navigation”>Contact</a>
  </p>
</div>

</body>
</html>
