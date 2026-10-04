<?php
$pageTitle = "Главная";
require __DIR__ . "/includes/header.php";
?>

<div clas="layout">
    <section class="posts">
        <article>
            <header class="post-header">
                <h2>Первая статья</h2>
                <time datetime="2026-10-04" class="post-meta">4 октября 2026</time>
            </header>
            <p>Текст первой статьи. Здесь будет краткое описание, которое заинтересует читателя и заставит кликнуть «Читать далее».</p>
            <a href="#" class="read-more">Читать далее</a>
        </article>

        <article>
            <header class="post-header">
                <h2>Вторая статья</h2>
                <time datetime="2026-10-03" class="post-meta">3 октября 2026</time>
            </header>
            <p>Текст второй статьи. Просто чтобы сетка была видна.</p>
            <a href="#" class="read-more">Читать далее</a>
        </article>

        <article>
            <header class="post-header">
                <h2>Третья статья</h2>
                <time datetime="2026-10-02" class="post-meta">2 октября 2026</time>
            </header>
            <p>Текст третьей статьи. Теперь у нас три карточки — будет видна сетка.</p>
            <a href="#" class="read-more">Читать далее</a>
        </article>
    </section>

    <aside class="sidebar">
        <div class="widget">
            <h3 class="widget-title">Рубрики</h3>
            <ul class="widget-list">
                <li><a href="#">Программирование</a></li>
                <li><a href="#">Дизайн</a></li>
                <li><a href="#">Жизнь</a></li>
            </ul>
        </div>

        <div class="widget">
            <h3 class="widget-title">О блоге</h3>
            <p>Личный блог о веб-разработке. Пишу про PHP, HTML, CSS и не только.</p>
        </div>
    </aside>
</div>

<?php require __DIR__ . "/includes/footer.php"; ?>