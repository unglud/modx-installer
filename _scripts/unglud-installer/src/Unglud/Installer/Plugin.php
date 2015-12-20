<?php
namespace Unglud\Installer;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        echo <<<TEXT

                  ,-.-.,---.,--.         ,---.
                  | | ||   ||   |.  ,    |---',---..    ,,---.
                  | | ||   ||   | ><     |  \ |---' \  / |   |
                  ` ' '`---'`--' '  `    `   ``---'  `'  `---'


                   o          |         |    |
                   .,---.,---.|--- ,---.|    |    ,---.,---.
                   ||   |`---.|    ,---||    |    |---'|
                   ``   '`---'`---'`---^`---'`---'`---'`


TEXT;

        echo "\nBefore we begin, please specify database config data.\n";
        $db_name = $io->ask('Database name (may not exist): ');
        $db_user = $io->ask('Database user: ');
        $db_password = $io->ask('Database password: ');
        file_put_contents ('.env',
            "DB_NAME=$db_name"."\n".
            "DB_USER=$db_user"."\n".
            "DB_PASS=$db_password"."\n");
    }
}