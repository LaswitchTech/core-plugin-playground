<style>
    .bd-placeholder-img{
        font-size:1.125rem;
        text-anchor:middle;
        -webkit-user-select:none;
        -moz-user-select:none;
        user-select:none
    }
    @media (min-width: 768px){
        .bd-placeholder-img-lg{
            font-size:3.5rem
        }
    }
    .b-example-divider{
        width:100%;
        height:3rem;
        background-color:#0000001a;
        border:solid rgba(0,0,0,.15);
        border-width:1px 0;
        box-shadow: inset 0 .5em 1.5em #0000001a, inset 0 .125em .5em #00000026
    }
    .b-example-vr{
        flex-shrink:0;
        width:1.5rem;
        height:100vh
    }
    .bi{
        vertical-align:-.125em;
        fill:currentColor
    }
    .nav-scroller{
        position:relative;
        z-index:2;
        height:2.75rem;
        overflow-y:hidden
    }
    .nav-scroller .nav{
        display:flex;
        flex-wrap:nowrap;
        padding-bottom:1rem;
        margin-top:-1px;
        overflow-x:auto;
        text-align:center;
        white-space:nowrap;
        -webkit-overflow-scrolling:touch
    }
    .btn-bd-primary{
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8
    }
    .bd-mode-toggle{
        z-index:1500
    }
    .bd-mode-toggle .bi{
        width:1em;
        height:1em
    }
    .bd-mode-toggle .dropdown-menu .active .bi{
        display:block!important
    }
    /* .app-content {
        scroll-behavior: smooth;
    } */

    /**
    * Bootstrap "Journal code" icon
    * @link https://icons.getbootstrap.com/icons/journal-code/
    */
    .bd-heading a::before {
        display: inline-block;
        width: 1em;
        height: 1em;
        margin-right: .25rem;
        content: "";
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23999' viewBox='0 0 16 16'%3E%3Cpath d='M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2z'/%3E%3Cpath d='M2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z'/%3E%3Cpath fill-rule='evenodd' d='M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z'/%3E%3C/svg%3E");
        background-size: 1em;
    }

    /* stylelint-disable-next-line selector-max-universal */
    .bd-heading + div > * + * {
        margin-top: 3rem;
    }

    /* Table of contents */
    .bd-aside a {
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: .3125rem;
        color: var(--bs-body-color);
    }

    .bd-aside a:hover,
    .bd-aside a:focus {
        color: var(--bs-body-color);
        background-color: rgba(121, 82, 179, .1);
    }

    .bd-aside .active {
        font-weight: 600;
        color: var(--bs-body-color);
    }

    .bd-aside .btn {
        padding: .25rem .5rem;
        font-weight: 600;
        color: var(--bs-body-color);
    }

    .bd-aside .btn:hover,
    .bd-aside .btn:focus {
        color: var(--bs-body-color);
        background-color: rgba(121, 82, 179, .1);
    }

    .bd-aside .btn:focus {
        box-shadow: 0 0 0 1px rgba(121, 82, 179, .7);
    }

    .bd-aside .btn::before {
        width: 1.25em;
        line-height: 0;
        content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ccc' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
        transition: transform .35s ease;

        /* rtl:raw:
        transform: rotate(180deg) translateX(-2px);
        */
        transform-origin: .5em 50%;
    }

    .bd-aside .btn[aria-expanded="true"]::before {
        transform: rotate(90deg)/* rtl:ignore */;
    }


    /* Examples */
    .scrollspy-example {
        height: 200px;
    }

    [id="modal"] .bd-example .btn,
    [id="buttons"] .bd-example .btn,
    [id="tooltips"] .bd-example .btn,
    [id="popovers"] .bd-example .btn,
    [id="dropdowns"] .bd-example .btn-group,
    [id="dropdowns"] .bd-example .dropdown,
    [id="dropdowns"] .bd-example .dropup,
    [id="dropdowns"] .bd-example .dropend,
    [id="dropdowns"] .bd-example .dropstart {
        margin: 0 1rem 1rem 0;
    }

    /* Layout */
    @media (min-width: 1200px) {
        /* .app-content {
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 1fr 4fr 1fr;
            gap: 1rem;
        } */

        .bd-header {
            position: fixed;
            top: 0;
            /* rtl:begin:ignore */
            right: 0;
            left: 0;
            /* rtl:end:ignore */
            z-index: 1030;
            grid-column: 1 / span 3;
        }

        .bd-aside {
            padding-top: 96px;
        }

        /**
        * 1. Too bad only Firefox supports subgrids ATM
        */
        .bd-cheatsheet,
        .bd-cheatsheet section,
        .bd-cheatsheet article {
            display: inherit; /* 1 */
            grid-template-rows: auto;
            grid-template-columns: 1fr 4fr;
            grid-column: 1 / span 2;
            gap: inherit; /* 1 */
        }

        .bd-aside {
            grid-area: 1 / 3;
            /* scroll-margin-top: 4rem; */
        }

        .bd-cheatsheet section,
        .bd-cheatsheet section > h2 {
            top: 2rem;
            scroll-margin-top: 2rem;
        }

        .bd-cheatsheet section > h2::before {
            position: absolute;
            /* rtl:begin:ignore */
            top: 0;
            right: 0;
            bottom: -2rem;
            left: 0;
            /* rtl:end:ignore */
            z-index: -1;
            content: "";
        }

        .bd-cheatsheet article,
        .bd-cheatsheet .bd-heading {
            top: 8rem;
            scroll-margin-top: 8rem;
        }

        .bd-cheatsheet .bd-heading {
            z-index: 1;
        }
    }
</style>
<nav class="navbar bg-gray-200 sticky-top justify-content-end align-items-center border-bottom py-3 px-4" id="toc" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width)); z-index: 1021;">
    <div class="dropdown mx-2">
        <button type="button" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false" data-bs-toggle="dropdown"><?= $this->Locale->get('Contents') ?></button>
        <ul class="dropdown-menu dropdown-menu-end shadow" style="z-index: 1024;">
            <li><a class="dropdown-item d-flex align-items-center" href="#typography"><?= $this->Locale->get('Typography') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#images"><?= $this->Locale->get('Images') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#tables"><?= $this->Locale->get('Tables') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#figures"><?= $this->Locale->get('Figures') ?></a></li>
        </ul>
    </div>
    <div class="dropdown mx-2">
        <button type="button" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false" data-bs-toggle="dropdown"><?= $this->Locale->get('Forms') ?></button>
        <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><a class="dropdown-item d-flex align-items-center" href="#overview"><?= $this->Locale->get('Overview') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#disabled-forms"><?= $this->Locale->get('Disabled forms') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#sizing-forms"><?= $this->Locale->get('Sizing forms') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#input-group"><?= $this->Locale->get('Input group') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#floating-labels"><?= $this->Locale->get('Floating labels') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#validation"><?= $this->Locale->get('Validation') ?></a></li>
        </ul>
    </div>
    <div class="dropdown mx-2">
        <button type="button" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false" data-bs-toggle="dropdown"><?= $this->Locale->get('Components') ?></button>
        <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><a class="dropdown-item d-flex align-items-center" href="#accordion"><?= $this->Locale->get('Accordion') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#alerts"><?= $this->Locale->get('Alerts') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#badge"><?= $this->Locale->get('Badge') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#breadcrumb"><?= $this->Locale->get('Breadcrumb') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#buttons"><?= $this->Locale->get('Buttons') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#button-group"><?= $this->Locale->get('Button group') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#calendar"><?= $this->Locale->get('Calendar') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#card"><?= $this->Locale->get('Card') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#carousel"><?= $this->Locale->get('Carousel') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#dropdowns"><?= $this->Locale->get('Dropdowns') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#feed"><?= $this->Locale->get('Feed') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#list-group"><?= $this->Locale->get('List group') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#modal"><?= $this->Locale->get('Modal') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#navs"><?= $this->Locale->get('Navs') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#navbar"><?= $this->Locale->get('Navbar') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#pagination"><?= $this->Locale->get('Pagination') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#popovers"><?= $this->Locale->get('Popovers') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#progress"><?= $this->Locale->get('Progress') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#ribbon"><?= $this->Locale->get('Ribbon') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#scrollspy"><?= $this->Locale->get('Scrollspy') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#spinners"><?= $this->Locale->get('Spinners') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#timeline"><?= $this->Locale->get('Timeline') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#toasts"><?= $this->Locale->get('Toasts') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#tooltips"><?= $this->Locale->get('Tooltips') ?></a></li>
        </ul>
    </div>
    <div class="dropdown mx-2">
        <button type="button" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false" data-bs-toggle="dropdown"><?= $this->Locale->get('Utilities') ?></button>
        <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><a class="dropdown-item d-flex align-items-center" href="#animations"><?= $this->Locale->get('Animations') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#background"><?= $this->Locale->get('Background') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#cursors"><?= $this->Locale->get('Cursors') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#emphasis"><?= $this->Locale->get('Emphasis') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#opacity"><?= $this->Locale->get('Opacity') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#position"><?= $this->Locale->get('Position') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#sizing"><?= $this->Locale->get('Sizing') ?></a></li>
            <li><a class="dropdown-item d-flex align-items-center" href="#spacing"><?= $this->Locale->get('Spacing') ?></a></li>
        </ul>
    </div>
</nav>
<main class="pb-5">
    <section id="content">
        <h2 class="sticky-top py-3 px-4 mx-2" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width)); width: fit-content; z-index: 1022;"><?= $this->Locale->get('Contents') ?></h2>
        <div class="row m-0">
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Typography') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#typography" data-bs-highlight="4-9,14-19,24-26,31-38,43,48-51,56-69,74-78"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="typography">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <p class="display-1">Display 1</p>
                            <p class="display-2">Display 2</p>
                            <p class="display-3">Display 3</p>
                            <p class="display-4">Display 4</p>
                            <p class="display-5">Display 5</p>
                            <p class="display-6">Display 6</p>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <p class="h1">Heading 1</p>
                            <p class="h2">Heading 2</p>
                            <p class="h3">Heading 3</p>
                            <p class="h4">Heading 4</p>
                            <p class="h5">Heading 5</p>
                            <p class="h6">Heading 6</p>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <p class="lead">
                                This is a lead paragraph. It stands out from regular paragraphs.
                            </p>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p><u>This line of text will render as underlined.</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <hr>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <ul class="list-unstyled">
                                <li>This is a list.</li>
                                <li>It appears completely unstyled.</li>
                                <li>Structurally, it's still a list.</li>
                                <li>However, this style only applies to immediate child elements.</li>
                                <li>Nested lists:
                                    <ul>
                                        <li>are unaffected by this style</li>
                                        <li>will still show a bullet</li>
                                        <li>and have appropriate left margin</li>
                                    </ul>
                                </li>
                                <li>This may still come in handy in some situations.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <ul class="list-inline">
                                <li class="list-inline-item">This is a list item.</li>
                                <li class="list-inline-item">And another one.</li>
                                <li class="list-inline-item">But they're displayed inline.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Images') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#images" data-bs-highlight="4-8,13-17"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="images">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <svg aria-label="Placeholder: Responsive image" class="bd-placeholder-img bd-placeholder-img-lg img-fluid" height="250" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96" />
                                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Responsive image</text>
                            </svg>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet mt-3">
                        <div class="bd-example m-0 border-0">
                            <svg aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200" class="bd-placeholder-img img-thumbnail" height="200" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                                <title>A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera</title>
                                <rect width="100%" height="100%" fill="#868e96" />
                                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Tables') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#tables" data-bs-highlight="4-33,38-67,72-127,132-161"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="tables">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <table class="table table-dark table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Class</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Default</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <th scope="row">Primary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <th scope="row">Secondary</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-success">
                                        <th scope="row">Success</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <th scope="row">Danger</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <th scope="row">Warning</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-info">
                                        <th scope="row">Info</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-light">
                                        <th scope="row">Light</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr class="table-dark">
                                        <th scope="row">Dark</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Figures') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#figures" data-bs-highlight="4-11"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="figures">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <figure class="figure">
                                <svg aria-label="Placeholder: 400x300" class="bd-placeholder-img figure-img img-fluid rounded" height="300" preserveAspectRatio="xMidYMid slice" role="img" width="400" xmlns="http://www.w3.org/2000/svg">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#868e96" />
                                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text>
                                </svg>
                                <figcaption class="figure-caption">A caption for the above image.</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section id="forms">
        <h2 class="sticky-top py-3 px-4 mx-2" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width)); width: fit-content; z-index: 1022;"><?= $this->Locale->get('Forms') ?></h2>
        <div class="row m-0">
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Overview') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#overview" data-bs-highlight="6-8,11-12,15-21,24-25,28-36,39-50,53-54,57-58,61-62,64"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="overview">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleSelect" class="form-label">Select menu</label>
                                    <select class="form-select" id="exampleSelect">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <fieldset class="mb-3">
                                    <legend>Radios buttons</legend>
                                    <div class="form-check">
                                        <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
                                        <label class="form-check-label" for="exampleRadio1">Default radio</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
                                        <label class="form-check-label" for="exampleRadio2">Another radio</label>
                                    </div>
                                </fieldset>
                                <fieldset class="mb-3">
                                    <legend>IDE - Code Editor</legend>
                                    <div class="ide form-control" data-bs-highlight="4-6,9">
                                        <textarea name="bio" autocomplete="off"># Lorem Ipsum&#13;&#10;&#13;&#10;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&#13;&#10;# Lorem Ipsum&#13;&#10;&#13;&#10;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&#13;&#10;# Lorem Ipsum&#13;&#10;&#13;&#10;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</textarea>
                                    </div>
                                </fieldset>
                                <div class="mb-3">
                                    <label class="form-label" for="customFile">Upload</label>
                                    <input type="file" class="form-control" id="customFile">
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>
                                    <label class="form-check-label" for="switchCheckChecked">Checked switch checkbox input</label>
                                </div>
                                <div class="mb-3">
                                    <label for="customRange3" class="form-label">Example range</label>
                                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Disabled forms') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#disabled-forms" data-bs-highlight="7-8,11-14,18-19,23-31,34-35,38-39,42-43,45"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="disabled-forms">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <form>
                                <fieldset disabled aria-label="Disabled fieldset example">
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">Disabled input</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                        <select id="disabledSelect" class="form-select">
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                            <label class="form-check-label" for="disabledFieldsetCheck">Can't check this</label>
                                        </div>
                                    </div>
                                    <fieldset class="mb-3">
                                        <legend>Disabled radios buttons</legend>
                                        <div class="form-check">
                                            <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled>
                                            <label class="form-check-label" for="disabledRadio1">Disabled radio</label>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled>
                                            <label class="form-check-label" for="disabledRadio2">Another radio</label>
                                        </div>
                                    </fieldset>
                                    <div class="mb-3">
                                        <label class="form-label" for="disabledCustomFile">Upload</label>
                                        <input type="file" class="form-control" id="disabledCustomFile" disabled>
                                    </div>
                                    <div class="mb-3 form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="disabledSwitchCheckChecked" checked disabled>
                                        <label class="form-check-label" for="disabledSwitchCheckChecked">Disabled checked switch checkbox input</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledRange" class="form-label">Disabled range</label>
                                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Sizing forms') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#sizing-forms" data-bs-highlight="5,8-13,16,23,26-31,34"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="sizing-forms">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                            </div>
                            <div class="mb-3">
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control form-control-lg" aria-label="Large file input example">
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="mb-3">
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                            </div>
                            <div class="mb-3">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control form-control-sm" aria-label="Small file input example">
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Input group') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#input-group" data-bs-highlight="4-25"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="input-group">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                            <label for="basic-url" class="form-label">Your vanity URL</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">With textarea</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Floating labels') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#floating-labels" data-bs-highlight="5-12"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="floating-labels">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <form>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Validation') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#validation" data-bs-highlight="6-8,11-13,16-21,24-26,29-34,37-39,42-46,49"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="validation">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">First name</label>
                                    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationServer02" class="form-label">Last name</label>
                                    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationServerUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                        <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
                                        <div class="invalid-feedback">Please choose a username.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationServer03" class="form-label">City</label>
                                    <input type="text" class="form-control is-invalid" id="validationServer03" required>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationServer04" class="form-label">State</label>
                                    <select class="form-select is-invalid" id="validationServer04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid state.</div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationServer05" class="form-label">Zip</label>
                                    <input type="text" class="form-control is-invalid" id="validationServer05" required>
                                    <div class="invalid-feedback">Please provide a valid zip.</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                        <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section id="components">
        <h2 class="sticky-top py-3 px-4 mx-2" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width)); width: fit-content; z-index: 1022;"><?= $this->Locale->get('Components') ?></h2>
        <div class="row m-0">
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Accordion') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#accordion" data-bs-highlight="4-35"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="accordion">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Accordion Item #1</button>
                                    </h4>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2</button>
                                    </h4>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accordion Item #3</button>
                                    </h4>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Alerts') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#alerts" data-bs-highlight="4-35,40-45"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="alerts">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-light alert-dismissible fade show" role="alert">
                                A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Badge') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#badge" data-bs-highlight="4-11,16-23,28-37"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="badge">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <p class="h1">Example heading <span class="badge bg-primary">New</span></p>
                            <p class="h2">Example heading <span class="badge bg-secondary">New</span></p>
                            <p class="h3">Example heading <span class="badge bg-success">New</span></p>
                            <p class="h4">Example heading <span class="badge bg-danger">New</span></p>
                            <p class="h5">Example heading <span class="badge text-bg-warning">New</span></p>
                            <p class="h6">Example heading <span class="badge text-bg-info">New</span></p>
                            <p class="h6">Example heading <span class="badge text-bg-light">New</span></p>
                            <p class="h6">Example heading <span class="badge bg-dark">New</span></p>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <span class="badge rounded-pill bg-primary">Primary</span>
                            <span class="badge rounded-pill bg-secondary">Secondary</span>
                            <span class="badge rounded-pill bg-success">Success</span>
                            <span class="badge rounded-pill bg-danger">Danger</span>
                            <span class="badge rounded-pill text-bg-warning">Warning</span>
                            <span class="badge rounded-pill text-bg-info">Info</span>
                            <span class="badge rounded-pill text-bg-light">Light</span>
                            <span class="badge rounded-pill bg-dark">Dark</span>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <span class="badge rounded-pill text-bg-blue">Blue</span>
                            <span class="badge rounded-pill text-bg-indigo">Indigo</span>
                            <span class="badge rounded-pill text-bg-purple">Purple</span>
                            <span class="badge rounded-pill text-bg-pink">Pink</span>
                            <span class="badge rounded-pill text-bg-red">Red</span>
                            <span class="badge rounded-pill text-bg-orange">Orange</span>
                            <span class="badge rounded-pill text-bg-yellow">Yellow</span>
                            <span class="badge rounded-pill text-bg-green">Green</span>
                            <span class="badge rounded-pill text-bg-teal">Teal</span>
                            <span class="badge rounded-pill text-bg-cyan">Cyan</span>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Breadcrumb') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#breadcrumb" data-bs-highlight="4-10"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="breadcrumb">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Buttons') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#buttons" data-bs-highlight="4-12,17-26,31-38,43-52,57-59"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="buttons">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-link">Link</button>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-blue">Blue</button>
                            <button type="button" class="btn btn-indigo">Indigo</button>
                            <button type="button" class="btn btn-purple">Purple</button>
                            <button type="button" class="btn btn-pink">Pink</button>
                            <button type="button" class="btn btn-red">Red</button>
                            <button type="button" class="btn btn-orange">Orange</button>
                            <button type="button" class="btn btn-yellow">Yellow</button>
                            <button type="button" class="btn btn-green">Green</button>
                            <button type="button" class="btn btn-teal">Teal</button>
                            <button type="button" class="btn btn-cyan">Cyan</button>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-light">Light</button>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-outline-blue">Blue</button>
                            <button type="button" class="btn btn-outline-indigo">Indigo</button>
                            <button type="button" class="btn btn-outline-purple">Purple</button>
                            <button type="button" class="btn btn-outline-pink">Pink</button>
                            <button type="button" class="btn btn-outline-red">Red</button>
                            <button type="button" class="btn btn-outline-orange">Orange</button>
                            <button type="button" class="btn btn-outline-yellow">Yellow</button>
                            <button type="button" class="btn btn-outline-green">Green</button>
                            <button type="button" class="btn btn-outline-teal">Teal</button>
                            <button type="button" class="btn btn-outline-cyan">Cyan</button>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-primary btn-sm">Small button</button>
                            <button type="button" class="btn btn-primary">Standard button</button>
                            <button type="button" class="btn btn-primary btn-lg">Large button</button>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Button group') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#button-group" data-bs-highlight="5-18"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="button-group">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-secondary">1</button>
                                    <button type="button" class="btn btn-secondary">2</button>
                                    <button type="button" class="btn btn-secondary">3</button>
                                    <button type="button" class="btn btn-secondary">4</button>
                                </div>
                                <div class="btn-group me-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-secondary">5</button>
                                    <button type="button" class="btn btn-secondary">6</button>
                                    <button type="button" class="btn btn-secondary">7</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-secondary">8</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Calendar') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#calendar" data-bs-highlight="4"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="calendar">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="calendar"></div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Card') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#card" data-bs-highlight="6-17,20-28,31-45,48-65"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="card">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="row  row-cols-1 row-cols-md-2 g-4">
                                <div class="col">
                                    <div class="card">
                                        <svg aria-label="Placeholder: Image cap" class="bd-placeholder-img card-img-top" height="180" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#868e96" />
                                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                        </svg>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">Featured</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                        <div class="card-footer text-body-secondary">2 days ago</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">An item</li>
                                            <li class="list-group-item">A second item</li>
                                            <li class="list-group-item">A third item</li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <svg aria-label="Placeholder: Image" class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Placeholder</title>
                                                    <rect width="100%" height="100%" fill="#868e96" />
                                                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
                                                </svg>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Carousel') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#carousel" data-bs-highlight="4-53"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="carousel">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <svg aria-label="Placeholder: First slide" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#777" />
                                            <text x="50%" y="50%" fill="#555" dy=".3em">First slide</text>
                                        </svg>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <svg aria-label="Placeholder: Second slide" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#666" />
                                            <text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text>
                                        </svg>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <svg aria-label="Placeholder: Third slide" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="400" preserveAspectRatio="xMidYMid slice" role="img" width="800" xmlns="http://www.w3.org/2000/svg">
                                            <title>Placeholder</title>
                                            <rect width="100%" height="100%" fill="#555" />
                                            <text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text>
                                        </svg>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Dropdowns') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#dropdowns" data-bs-highlight="5-37,43-108,113-147,152-163"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="dropdowns">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="btn-group w-100 align-items-center justify-content-between flex-wrap me-0">
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown button</button>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown button</button>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown button</button>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="btn-group w-100 align-items-center justify-content-between flex-wrap me-0">
                                <div class="dropend">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropend button</button>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="dropup">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropup button</button>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="dropstart">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropstart button</button>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">End-aligned menu</button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Feed') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#feed" data-bs-highlight="4-71"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="feed">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="feed">
                                <div class="post">
                                    <div class="title-block"><h2 class="title"></h2></div>
                                    <div class="user-block user-select-none">
                                        <img class="avatar img-circle rounded-circle img-bordered-sm" alt="Avatar" src="/avatar?username=<?= $this->Auth->user()->username ?>">
                                        <span class="username mt-2">
                                            <a class="text-decoration-none" href="/profile"><?= $this->Auth->user()->username ?></a>
                                        </span>
                                        <span class="description mt-1">
                                            <i class="bi-clock me-1"></i>
                                            <time class="timeago" datetime="12-31-2024 19:00:00"></time>
                                        </span>
                                    </div>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis, nibh et accumsan interdum, turpis sapien ultrices eros, consectetur bibendum elit augue a odio. Integer ut nunc commodo, condimentum massa nec, efficitur dolor. Mauris ut enim tellus. Fusce laoreet ultricies turpis et malesuada. Donec a congue nisl. Quisque et rhoncus justo. Integer commodo purus a aliquam finibus.</p>
                                    <p class="controls user-select-none">
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-hand-thumbs-up"></i><span>Like</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-share"></i><span>Share</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-sticky"></i><span>Note</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-chat-text"></i><span>Commments</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-pencil-square"></i><span>Edit</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-trash"></i><span>Delete</span></button>
                                    </p>
                                </div>
                                <div class="post">
                                    <div class="title-block"><h2 class="title">Lorem Ipsum</h2></div>
                                    <div class="user-block user-select-none">
                                        <img class="avatar img-circle rounded-circle img-bordered-sm" alt="Avatar" src="/avatar?username=<?= $this->Auth->user()->username ?>">
                                        <span class="username mt-2">
                                            <a class="text-decoration-none" href="/profile"><?= $this->Auth->user()->username ?></a>
                                        </span>
                                        <span class="description mt-1">
                                            <i class="bi-clock me-1"></i>
                                            <time class="timeago" datetime="12-31-2024 19:00:00"></time>
                                        </span>
                                    </div>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis, nibh et accumsan interdum, turpis sapien ultrices eros, consectetur bibendum elit augue a odio. Integer ut nunc commodo, condimentum massa nec, efficitur dolor. Mauris ut enim tellus. Fusce laoreet ultricies turpis et malesuada. Donec a congue nisl. Quisque et rhoncus justo. Integer commodo purus a aliquam finibus.</p>
                                    <p class="controls user-select-none">
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-hand-thumbs-up"></i><span>Like</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-share"></i><span>Share</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-sticky"></i><span>Note</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-chat-text"></i><span>Commments</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-pencil-square"></i><span>Edit</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-trash"></i><span>Delete</span></button>
                                    </p>
                                </div>
                                <div class="post">
                                    <div class="title-block"><h2 class="title"></h2></div>
                                    <div class="user-block user-select-none">
                                        <img class="avatar img-circle rounded-circle img-bordered-sm" alt="Avatar" src="/avatar?username=<?= $this->Auth->user()->username ?>">
                                        <span class="username mt-2">
                                            <a class="text-decoration-none" href="/profile"><?= $this->Auth->user()->username ?></a>
                                        </span>
                                        <span class="description mt-1">
                                            <i class="bi-clock me-1"></i>
                                            <time class="timeago" datetime="12-31-2024 19:00:00"></time>
                                        </span>
                                    </div>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis, nibh et accumsan interdum, turpis sapien ultrices eros, consectetur bibendum elit augue a odio. Integer ut nunc commodo, condimentum massa nec, efficitur dolor. Mauris ut enim tellus. Fusce laoreet ultricies turpis et malesuada. Donec a congue nisl. Quisque et rhoncus justo. Integer commodo purus a aliquam finibus.</p>
                                    <p class="controls user-select-none">
                                        <button class="text-decoration-none btn btn-sm btn-link me-1"><i class="bi me-1 bi-hand-thumbs-up"></i><span>Like</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link me-1"><i class="bi me-1 bi-share"></i><span>Share</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link me-1"><i class="bi me-1 bi-sticky"></i><span>Note</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link me-1"><i class="bi me-1 bi-chat-text"></i><span>Commments</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link me-1"><i class="bi me-1 bi-pencil-square"></i><span>Edit</span></button>
                                        <button class="text-decoration-none btn btn-sm btn-link me-1"><i class="bi me-1 bi-trash"></i><span>Delete</span></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('List group') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#list-group" data-bs-highlight="4-10,15-21,26-36"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="list-group">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <ul class="list-group">
                                <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                                <li class="list-group-item">A fourth item</li>
                                <li class="list-group-item">And a fifth one</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Modal') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#modal" data-bs-highlight="4-9,13-77"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="modal">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="d-flex justify-content-between flex-wrap">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">Launch demo modal</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">Launch static backdrop modal</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Vertically centered scrollable modal</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">...</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLiveLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalCenteredScrollableTitle">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                <p>This content should appear at the bottom after you scroll.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Full screen modal</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">...</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Navs') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#navs" data-bs-highlight="4-9,14-31,36-41"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="navs">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <nav class="nav">
                                <a class="nav-link active" aria-current="page" href="#">Active</a>
                                <a class="nav-link" href="#">Link</a>
                                <a class="nav-link" href="#">Link</a>
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </nav>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Active</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Navbar') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#navbar" data-bs-highlight="4-63"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="navbar">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#">
                                        <img src="<?= $this->Builder->logo(); ?>" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy" style="filter: invert(1) grayscale(100%) brightness(200%);">
                                    </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
                                        </ul>
                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-dark" type="submit">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                            <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-5">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#">
                                        <img src="<?= $this->Builder->logo(); ?>" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy">
                                    </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
                                        </ul>
                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-light" type="submit">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Pagination') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#pagination" data-bs-highlight="4-10,15-23,28-36"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="pagination">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <nav aria-label="Pagination example">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <nav aria-label="Standard pagination example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <nav aria-label="Another pagination example">
                                <ul class="pagination pagination-lg flex-wrap">
                                    <li class="page-item disabled"><a class="page-link">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Popovers') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#popovers" data-bs-highlight="3-5,9-12"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="popovers">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on end</button>
                            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
                            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on start</button>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Progress') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#progress" data-bs-highlight="4-18,23-30"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="progress">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar">0%</div>
                            </div>
                            <div class="progress mb-3" role="progressbar" aria-label="Success example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success w-25">25%</div>
                            </div>
                            <div class="progress mb-3" role="progressbar" aria-label="Info example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar text-bg-info w-50">50%</div>
                            </div>
                            <div class="progress mb-3" role="progressbar" aria-label="Warning example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar text-bg-warning w-75">75%</div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Danger example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger w-100">100%</div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="progress-stacked">
                                <div class="progress" role="progressbar" aria-label="Segment one - default example" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar"></div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Segment two - animated striped success example" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Ribbon') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#ribbon" data-bs-highlight="6-10,25-29,46-50,65-69"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="ribbon">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0 row">
                            <div class="col">
                                <div class="card">
                                    <div class="ribbon-wrapper ribbon-sm">
                                        <div class="ribbon text-bg-primary">
                                            <i class="me-1 bi bi-bookmark"></i><span>Ribbon - SM</span>
                                        </div>
                                    </div>
                                    <svg aria-label="Placeholder: Image cap" class="bd-placeholder-img card-img-top" height="180" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                    </svg>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon text-bg-success">
                                            <i class="me-1 bi bi-bookmark"></i><span>Ribbon</span>
                                        </div>
                                    </div>
                                    <svg aria-label="Placeholder: Image cap" class="bd-placeholder-img card-img-top" height="180" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                    </svg>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd-example m-0 border-0 row mt-3">
                            <div class="col">
                                <div class="card">
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon text-bg-warning">
                                            <i class="me-1 bi bi-bookmark"></i><span>Ribbon - LG</span>
                                        </div>
                                    </div>
                                    <svg aria-label="Placeholder: Image cap" class="bd-placeholder-img card-img-top" height="180" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                    </svg>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="ribbon-wrapper ribbon-xl">
                                        <div class="ribbon text-bg-danger">
                                            <i class="me-1 bi bi-bookmark"></i><span>Ribbon - XL</span>
                                        </div>
                                    </div>
                                    <svg aria-label="Placeholder: Image cap" class="bd-placeholder-img card-img-top" height="180" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                    </svg>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Scrollspy') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#scrollspy" data-bs-highlight="3-22"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="scrollspy">
                <div>
                    <div class="bd-example">
                        <nav id="navbar-example2" class="navbar bg-body-tertiary px-3">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#scrollspyHeading1">First</a></li>
                                <li class="nav-item"> <a class="nav-link" href="#scrollspyHeading2">Second</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example position-relative mt-2 overflow-auto" tabindex="0">
                            <h4 id="scrollspyHeading1">First heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading2">Second heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading3">Third heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading4">Fourth heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading5">Fifth heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Spinners') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#spinners" data-bs-highlight="4-63,68-127"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="spinners">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-secondary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-danger" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-warning" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-info" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-light" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-dark" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-blue" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-indigo" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-purple" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-pink" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-red" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-orange" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-yellow" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-green" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-teal" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-cyan" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-white" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-black" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="spinner-grow text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-secondary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-danger" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-warning" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-info" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-light" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-dark" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-blue" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-indigo" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-purple" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-pink" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-red" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-orange" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-yellow" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-green" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-teal" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-cyan" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-white" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-black" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Timeline') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#timeline" data-bs-highlight="4-129"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="timeline">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="timeline">
                                <div class="timeline-object">
                                    <i class="bi bi-clock text-bg-success"></i>
                                </div>
                                <div class="timeline-object">
                                    <i class="bi bi-chat-dots text-bg-primary"></i>
                                    <div class="timeline-item border rounded">
                                        <div class="tools">
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-hand-thumbs-up"></i><span>Like</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-share"></i><span>Share</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-sticky"></i><span>Note</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-chat-text"></i><span>Commments</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-pencil-square"></i><span>Edit</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-trash"></i><span>Delete</span></button>
                                            <span><i class="bi bi-clock me-1"></i><time class="timeago" datetime="2025-07-28 09:15:15"></time></span>
                                        </div>
                                        <div class="card-header border-0">
                                            <h5 class="card-title">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged.
                                                It was popularised in the 1960s with the release of
                                                Letraset sheets containing Lorem Ipsum passages, and
                                                more recently with desktop publishing software like
                                                Aldus PageMaker including versions of Lorem Ipsum.
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-object">
                                    <i class="bi bi-chat-text text-bg-primary"></i>
                                    <div class="timeline-item border rounded">
                                        <div class="tools">
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-hand-thumbs-up"></i><span>Like</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-share"></i><span>Share</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-sticky"></i><span>Note</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-chat-text"></i><span>Commments</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-pencil-square"></i><span>Edit</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-trash"></i><span>Delete</span></button>
                                            <span><i class="bi bi-clock me-1"></i><time class="timeago" datetime="2025-07-28 09:15:15"></time></span>
                                        </div>
                                        <div class="card-header border-0">
                                            <h5 class="card-title">Lorem Ipsum</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-object">
                                    <i class="bi bi-chat-text text-bg-primary"></i>
                                    <div class="timeline-item border rounded">
                                        <div class="tools">
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-hand-thumbs-up"></i><span>Like</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-share"></i><span>Share</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-sticky"></i><span>Note</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-chat-text"></i><span>Commments</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-pencil-square"></i><span>Edit</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-trash"></i><span>Delete</span></button>
                                            <span><i class="bi bi-clock me-1"></i><time class="timeago" datetime="2025-07-28 09:15:15"></time></span>
                                        </div>
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <svg aria-label="Placeholder: Image" class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                                        <title>Placeholder</title>
                                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
                                                    </svg>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-object">
                                    <i class="bi bi-chat-dots text-bg-primary"></i>
                                    <div class="timeline-item border rounded">
                                        <div class="tools">
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-hand-thumbs-up"></i><span>Like</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-share"></i><span>Share</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-sticky"></i><span>Note</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-chat-text"></i><span>Commments</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-pencil-square"></i><span>Edit</span></button>
                                            <button class="text-decoration-none btn btn-sm btn-link"><i class="bi me-1 bi-trash"></i><span>Delete</span></button>
                                            <span><i class="bi bi-clock me-1"></i><time class="timeago" datetime="2025-07-28 09:15:15"></time></span>
                                        </div>
                                        <div class="card">
                                            <svg aria-label="Placeholder: Image cap" class="bd-placeholder-img card-img-top" height="180" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                                <title>Placeholder</title>
                                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                                            </svg>
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="time-label">
                                    <span class="text-bg-primary" title="2025-07-28 12:00:00" data-bs-toggle="tooltip" data-bs-placement="right">July 28, 2025</span>
                                </div>
                                <div id="timeline14object1" class="timeline-object">
                                    <i class="bi bi-clock-history text-bg-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Toasts') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#toasts" data-bs-highlight="4-16"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="toasts">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0 bg-dark p-5 align-items-center">
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg aria-hidden="true" class="bd-placeholder-img rounded me-2" height="20" preserveAspectRatio="xMidYMid slice" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="100%" height="100%" fill="#007aff" />
                                    </svg>
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small class="text-body-secondary">11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Tooltips') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#tooltips" data-bs-highlight="4-8"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="tooltips">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0 tooltip-demo">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on end">Tooltip on end</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on start">Tooltip on start</button>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Tooltip with HTML</button>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section id="utilities">
        <h2 class="sticky-top py-3 px-4 mx-2" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width)); width: fit-content; z-index: 1022;"><?= $this->Locale->get('Utilities') ?></h2>
        <div class="row m-0">
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Animations') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#animations" data-bs-highlight="4-6,10-12,16-18,22-24,28-30,34-36,40-42,46-48,52-57,61-64"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="animations">
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Fade</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-fade">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-fade-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-fade-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Shake</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-shake">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-shake-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-shake-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Pulse</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-pulse">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-pulse-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-pulse-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Bounce</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-bounce">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-bounce-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-bounce-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Flip</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-flip">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-flip-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-flip-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Rotate</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-rotate">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-rotate-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-rotate-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Wobble</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-wobble">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-wobble-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-wobble-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Flicker</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-flicker">Continuously</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-flicker-once">Once</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-flicker-hover">Hover</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Tilt</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-tilt-15">15</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-tilt-30">30</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-tilt-45">45</button></div>
                        <div class="col"><button type="button" class="btn btn-success animate-tilt-60">60</button></div>
                        <div class="col"><button type="button" class="btn btn-warning animate-tilt-75">75</button></div>
                        <div class="col"><button type="button" class="btn btn-danger animate-tilt-90">90</button></div>
                    </div>
                    <div class="bd-example m-0 border-0 row">
                        <div class="col-12"><h4>Slide</h4></div>
                        <div class="col"><button type="button" class="btn btn-primary animate-slide-start-50">Start</button></div>
                        <div class="col"><button type="button" class="btn btn-secondary animate-slide-end-50">End</button></div>
                        <div class="col"><button type="button" class="btn btn-info animate-slide-top-50">Top</button></div>
                        <div class="col"><button type="button" class="btn btn-success animate-slide-bottom-50">Bottom</button></div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Background') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#background" data-bs-highlight="5-62"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="background">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="row row-cols-2">
                                <div class="col p-2 px-3 bg-primary">Primary</div>
                                <div class="col p-2 px-3 text-bg-primary">Primary</div>
                                <div class="col p-2 px-3 bg-secondary">Secondary</div>
                                <div class="col p-2 px-3 text-bg-secondary">Secondary</div>
                                <div class="col p-2 px-3 bg-success">Success</div>
                                <div class="col p-2 px-3 text-bg-success">Success</div>
                                <div class="col p-2 px-3 bg-danger">Danger</div>
                                <div class="col p-2 px-3 text-bg-danger">Danger</div>
                                <div class="col p-2 px-3 bg-warning">Warning</div>
                                <div class="col p-2 px-3 text-bg-warning">Warning</div>
                                <div class="col p-2 px-3 bg-info">Info</div>
                                <div class="col p-2 px-3 text-bg-info">Info</div>
                                <div class="col p-2 px-3 bg-light">Light</div>
                                <div class="col p-2 px-3 text-bg-light">Light</div>
                                <div class="col p-2 px-3 bg-dark">Dark</div>
                                <div class="col p-2 px-3 text-bg-dark">Dark</div>
                                <div class="col p-2 px-3 bg-blue">Blue</div>
                                <div class="col p-2 px-3 text-bg-blue">Blue</div>
                                <div class="col p-2 px-3 bg-indigo">Indigo</div>
                                <div class="col p-2 px-3 text-bg-indigo">Indigo</div>
                                <div class="col p-2 px-3 bg-purple">Purple</div>
                                <div class="col p-2 px-3 text-bg-purple">Purple</div>
                                <div class="col p-2 px-3 bg-pink">Pink</div>
                                <div class="col p-2 px-3 text-bg-pink">Pink</div>
                                <div class="col p-2 px-3 bg-red">Red</div>
                                <div class="col p-2 px-3 text-bg-red">Red</div>
                                <div class="col p-2 px-3 bg-orange">Orange</div>
                                <div class="col p-2 px-3 text-bg-orange">Orange</div>
                                <div class="col p-2 px-3 bg-yellow">Yellow</div>
                                <div class="col p-2 px-3 text-bg-yellow">Yellow</div>
                                <div class="col p-2 px-3 bg-green">Green</div>
                                <div class="col p-2 px-3 text-bg-green">Green</div>
                                <div class="col p-2 px-3 bg-teal">Teal</div>
                                <div class="col p-2 px-3 text-bg-teal">Teal</div>
                                <div class="col p-2 px-3 bg-cyan">Cyan</div>
                                <div class="col p-2 px-3 text-bg-cyan">Cyan</div>
                                <div class="col p-2 px-3 bg-white">White</div>
                                <div class="col p-2 px-3 text-bg-white">White</div>
                                <div class="col p-2 px-3 bg-black">Black</div>
                                <div class="col p-2 px-3 text-bg-black">Black</div>
                                <div class="col p-2 px-3 bg-gray-100">Gray 100</div>
                                <div class="col p-2 px-3 text-bg-gray-100">Gray 100</div>
                                <div class="col p-2 px-3 bg-gray-200">Gray 200</div>
                                <div class="col p-2 px-3 text-bg-gray-200">Gray 200</div>
                                <div class="col p-2 px-3 bg-gray-300">Gray 300</div>
                                <div class="col p-2 px-3 text-bg-gray-300">Gray 300</div>
                                <div class="col p-2 px-3 bg-gray-400">Gray 400</div>
                                <div class="col p-2 px-3 text-bg-gray-400">Gray 400</div>
                                <div class="col p-2 px-3 bg-gray-500">Gray 500</div>
                                <div class="col p-2 px-3 text-bg-gray-500">Gray 500</div>
                                <div class="col p-2 px-3 bg-gray-600">Gray 600</div>
                                <div class="col p-2 px-3 text-bg-gray-600">Gray 600</div>
                                <div class="col p-2 px-3 bg-gray-700">Gray 700</div>
                                <div class="col p-2 px-3 text-bg-gray-700">Gray 700</div>
                                <div class="col p-2 px-3 bg-gray-800">Gray 800</div>
                                <div class="col p-2 px-3 text-bg-gray-800">Gray 800</div>
                                <div class="col p-2 px-3 bg-gray-900">Gray 900</div>
                                <div class="col p-2 px-3 text-bg-gray-900">Gray 900</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Cursors') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#cursors" data-bs-highlight="3-38"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="cursors">
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example m-0 border-0">
                        <span class="badge me-2 text-bg-primary cursor-alias">Alias</span>
                        <span class="badge me-2 text-bg-primary cursor-all-scroll">All Scroll</span>
                        <span class="badge me-2 text-bg-primary cursor-auto">Auto</span>
                        <span class="badge me-2 text-bg-primary cursor-cell">Cell</span>
                        <span class="badge me-2 text-bg-primary cursor-col-resize">Column Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-context-menu">Context Menu</span>
                        <span class="badge me-2 text-bg-primary cursor-copy">Copy</span>
                        <span class="badge me-2 text-bg-primary cursor-crosshair">Crosshair</span>
                        <span class="badge me-2 text-bg-primary cursor-default">Default</span>
                        <span class="badge me-2 text-bg-primary cursor-e-resize">East Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-ew-resize">East-West Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-grab">Grab</span>
                        <span class="badge me-2 text-bg-primary cursor-grabbing">Grabbing</span>
                        <span class="badge me-2 text-bg-primary cursor-help">Help</span>
                        <span class="badge me-2 text-bg-primary cursor-move">Move</span>
                        <span class="badge me-2 text-bg-primary cursor-n-resize">North Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-ne-resize">North-East Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-nesw-resize">North-East-South-West Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-ns-resize">North-South Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-nw-resize">North-West Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-nwse-resize">North-West-South-East Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-no-drop">No Drop</span>
                        <span class="badge me-2 text-bg-primary cursor-none">None</span>
                        <span class="badge me-2 text-bg-primary cursor-not-allowed">Not Allowed</span>
                        <span class="badge me-2 text-bg-primary cursor-pointer">Pointer</span>
                        <span class="badge me-2 text-bg-primary cursor-progress">Progress</span>
                        <span class="badge me-2 text-bg-primary cursor-row-resize">Row Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-s-resize">South Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-se-resize">South-East Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-sw-resize">South-West Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-text">Text</span>
                        <span class="badge me-2 text-bg-primary cursor-url">URL</span>
                        <span class="badge me-2 text-bg-primary cursor-w-resize">West Resize</span>
                        <span class="badge me-2 text-bg-primary cursor-wait">Wait</span>
                        <span class="badge me-2 text-bg-primary cursor-zoom-in">Zoom In</span>
                        <span class="badge me-2 text-bg-primary cursor-zoom-out">Zoom Out</span>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Emphasis') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#emphasis" data-bs-highlight="4,9"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="emphasis">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <button type="button" class="btn btn-primary" data-bs-toggle="emphasize" data-bs-target="#emphasizeOne">Emphasize</button>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet mt-4">
                        <div class="bd-example m-0 border-0">
                            <figure class="figure" id="emphasizeOne">
                                <svg aria-label="Placeholder: 400x300" class="bd-placeholder-img figure-img m-0 img-fluid rounded" height="300" preserveAspectRatio="xMidYMid slice" role="img" width="400" xmlns="http://www.w3.org/2000/svg">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect>
                                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text>
                                </svg>
                            </figure>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Opacity') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#opacity" data-bs-highlight="5-15,18-22"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="opacity">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="row m-0">
                                <div class="col text-bg-primary opacity-0">Opacity 0</div>
                                <div class="col text-bg-primary opacity-10">Opacity 10</div>
                                <div class="col text-bg-primary opacity-20">Opacity 20</div>
                                <div class="col text-bg-primary opacity-30">Opacity 30</div>
                                <div class="col text-bg-primary opacity-40">Opacity 40</div>
                                <div class="col text-bg-primary opacity-50">Opacity 50</div>
                                <div class="col text-bg-primary opacity-60">Opacity 60</div>
                                <div class="col text-bg-primary opacity-70">Opacity 70</div>
                                <div class="col text-bg-primary opacity-80">Opacity 80</div>
                                <div class="col text-bg-primary opacity-90">Opacity 90</div>
                                <div class="col text-bg-primary opacity-100">Opacity 100</div>
                            </div>
                            <div class="row m-0">
                                <div class="col text-bg-primary opacity-0">Opacity 0</div>
                                <div class="col text-bg-primary opacity-25">Opacity 25</div>
                                <div class="col text-bg-primary opacity-50">Opacity 50</div>
                                <div class="col text-bg-primary opacity-75">Opacity 75</div>
                                <div class="col text-bg-primary opacity-100">Opacity 100</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Position') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#position" data-bs-highlight="5-10,17-25,32-40"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="position">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="card" style="min-height: 200px;">
                                <div class="position-absolute bg-primary rounded top-0 start-0" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-0 end-0" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-50 start-50" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded bottom-50 end-50" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded bottom-0 start-0" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded bottom-0 end-0" style="width: 2rem; height: 2rem;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet mt-4">
                        <div class="bd-example m-0 border-0">
                            <div class="card" style="min-height: 200px;">
                                <div class="position-absolute bg-primary rounded top-0 start-0 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-0 start-50 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-0 start-100 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-50 start-0 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-50 start-50 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-50 start-100 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-100 start-0 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-100 start-50 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-100 start-100 translate-middle" style="width: 2rem; height: 2rem;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet mt-4">
                        <div class="bd-example m-0 border-0">
                            <div class="card" style="min-height: 200px;">
                                <div class="position-absolute bg-primary rounded top-0 start-0" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-0 start-50 translate-middle-x" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-0 end-0" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-50 start-0 translate-middle-y" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-50 start-50 translate-middle" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded top-50 end-0 translate-middle-y" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded bottom-0 start-0" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded bottom-0 start-50 translate-middle-x" style="width: 2rem; height: 2rem;"></div>
                                <div class="position-absolute bg-primary rounded bottom-0 end-0" style="width: 2rem; height: 2rem;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Sizing') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#sizing" data-bs-highlight="5-9,16-20"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="sizing">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <div class="card card-body">
                                <div class="w-25 text-bg-primary p-3">Width 25%</div>
                                <div class="w-50 text-bg-primary p-3">Width 50%</div>
                                <div class="w-75 text-bg-primary p-3">Width 75%</div>
                                <div class="w-100 text-bg-primary p-3">Width 100%</div>
                                <div class="w-auto text-bg-primary p-3">Width auto</div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example-snippet bd-code-snippet mt-4">
                        <div class="bd-example m-0 border-0">
                            <div class="card card-body d-block" style="height: 200px;">
                                <div class="h-25 p-3 text-bg-primary d-inline-block" style="width: 19%;">Height 25%</div>
                                <div class="h-50 p-3 text-bg-primary d-inline-block" style="width: 19%;">Height 50%</div>
                                <div class="h-75 p-3 text-bg-primary d-inline-block" style="width: 19%;">Height 75%</div>
                                <div class="h-100 p-3 text-bg-primary d-inline-block" style="width: 19%;">Height 100%</div>
                                <div class="h-auto p-3 text-bg-primary d-inline-block" style="width: 19%;">Height auto</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-md-2">
                <h3 class="sticky-top py-3 px-4" style="top: calc(56px + var(--bs-spacer-2) + var(--bs-spacer-2) + var(--bs-border-width) + 38px + var(--bs-spacer-3) + var(--bs-spacer-3) + var(--bs-border-width));">
                    <?= $this->Locale->get('Spacing') ?>
                    <button type="button" class="ms-2 btn btn-sm btn-outline-primary" data-bs-toggle="source" data-bs-target="#spacing" data-bs-highlight="4-8"><i class="bi bi-code-slash"></i></button>
                </h3>
            </aside>
            <article class="col-12 col-md-10 my-3" id="spacing">
                <div>
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
</main>
<div class="modal modal-dark fade" id="source" tabindex="-1" aria-labelledby="sourceLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="sourceLabel"><i class="bi bi-code-slash me-2"></i><?= $this->Locale->get('Source') ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <fieldset>
                    <div class="ide form-control" data-bs-highlight="">
                        <textarea name="source" autocomplete="off"></textarea>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
<script>
    // Wait for the DOM to be fully loaded before executing the script
    document.addEventListener('DOMContentLoaded', () => {
        (() => {

            // Enable Source Code Modal
            document.querySelectorAll('[data-bs-toggle="source"]')
                .forEach(button => {
                    button.addEventListener('click', event => {
                        event.preventDefault()
                        const modal = document.getElementById('source')
                        const ide = modal.querySelector('.ide')
                        const textarea = ide.querySelector('textarea')
                        const source = button.getAttribute('data-bs-target')
                        const highlight = button.getAttribute('data-bs-highlight')

                        if (source) {
                            ide.setAttribute('data-bs-highlight', highlight || '')
                            textarea.value = document.querySelector(source).innerHTML.replace(/^\n+|\n+$/g, '') || ''
                        } else {
                            ide.removeAttribute('data-bs-highlight')
                            textarea.value = ''
                        }

                        // Show the modal
                        const bsModal = new bootstrap.Modal(modal)
                        bsModal.show()

                        // Trigger input event to update the editor
                        textarea.dispatchEvent(new Event('input'))
                    })
                });

            // Disable empty links and submit buttons
            document.querySelectorAll('[href="#"], [type="submit"]')
                .forEach(link => {
                    link.addEventListener('click', event => {
                        event.preventDefault()
                    })
                })

            // Set active item based on URL hash
            function setActiveItem() {
                const { hash } = window.location

                if (hash === '') {
                return
                }

                const link = document.querySelector(`.bd-aside a[href="${hash}"]`)

                if (!link) {
                return
                }

                const active = document.querySelector('.bd-aside .active')
                const parent = link.parentNode.parentNode.previousElementSibling

                link.classList.add('active')

                if (parent.classList.contains('collapsed')) {
                parent.click()
                }

                if (!active) {
                return
                }

                const expanded = active.parentNode.parentNode.previousElementSibling

                active.classList.remove('active')

                if (expanded && parent !== expanded) {
                expanded.click()
                }
            }
            setActiveItem()
            window.addEventListener('hashchange', setActiveItem)
        })()
    });
</script>
