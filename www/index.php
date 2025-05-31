<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CS248 LAMP Server</title>
        <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        Web &amp; Internet Programming: Local LAMP Server
                    </h1>
                    <h2 class="subtitle">
                        This is a self-contained LAMP setup running in a docker container that behaves exactly like an external server would.
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Environment</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    try {
                                        $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                        mysqli_close($link);
                                    } catch (e) {
                                        printf("MySQL connection failed: %s", e.getMessage());
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="/phpinfo.php">phpinfo()</a></li>
                                <li><a href="http://localhost:<?php print $_ENV['PMA_PORT']; ?>">phpMyAdmin</a></li>
                                <li><a href="/test_db.php">Test DB Connection with mysqli</a></li>
                                <li><a href="/test_db_pdo.php">Test DB Connection with PDO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    This container is based on one from <strong><a href="https://www.sprintcube.com" target="_blank">SprintCube</a></strong><br>
                    The source code is released under the
                    <a href="https://github.com/sprintcube/docker-compose-lamp/blob/master/LICENSE" target="_blank">
                        MIT license</a>.
                </p>
            </div>
        </footer>
    </body>
</html>
