<footer>
    <div class="inner">
        <a href="/">Home</a>
        <a href="/"><img src="/src/img/logo.png" alt="logo"></a>
        <a href="/comics">Comics</a>
    </div>
</footer>
</body>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <?php if(!empty($JS)): ?>
        <script src="/dist/js/<?= $JS?>.js"></script>
    <?php endif ?>
</html>
