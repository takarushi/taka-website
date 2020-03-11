<?PHP
    use DynamicalWeb\DynamicalWeb;
    use DynamicalWeb\HTML;
use DynamicalWeb\Javascript;
use DynamicalWeb\Runtime;
    use Example\ExampleLibrary;

    Runtime::import('Example');

?>
<!doctype html>
<html lang="<?PHP HTML::print(APP_LANGUAGE_ISO_639); ?>">
    <head>
        <?PHP HTML::importSection('header'); ?>
        <title><?PHP HTML::print(TEXT_PAGE_TITLE); ?></title>
    </head>

    <body>

        <header>
            <?PHP HTML::importSection('navigation'); ?>
        </header>

        <main role="main" class="container">
            <h1 class="mt-5"><?PHP HTML::print(TEXT_HEADER); ?></h1>
            <p class="lead"><?PHP HTML::print(TEXT_CONTENT); ?></p>

            <hr/>
            <?PHP HTML::importMarkdown('example'); ?>
            <br/>
        </main>

        <?PHP HTML::importSection('footer'); ?>

        <?PHP HTML::importSection('js_scripts'); ?>
        <?PHP Javascript::importScript('simple', array("foo" => "bar"), false); ?>

    </body>
</html>
