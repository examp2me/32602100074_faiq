<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Skills</a></li>
        </ul>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>Footer</p>
    </footer>
</body>
</html>