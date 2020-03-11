<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <img style="max-width:24px; margin-top: 2px; margin-right: 5px;" src="/assets/images/logo.svg">

    <a class="navbar-brand" href="index">
        <?PHP use DynamicalWeb\DynamicalWeb;
        use DynamicalWeb\HTML;

        \DynamicalWeb\HTML::print(TEXT_NAVBAR_BRAND); ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?PHP if(APP_CURRENT_PAGE == 'index'){ \DynamicalWeb\HTML::print("active"); } ?>">
                <a class="nav-link" href="https://intellivoid.info/"><?PHP \DynamicalWeb\HTML::print(TEXT_NAVBAR_PAGE_HOME); ?></a>
            </li>
                </div>
            </li>
        </ul>
    </div>

</nav>