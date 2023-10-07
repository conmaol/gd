<?php

namespace controllers;

require_once '../includes/htmlHeader.php';
require_once '../includes/include.php';

echo <<<HTML
  <main>
    <div class="container-fluid">
HTML;

new module();

echo <<<HTML
      </div>
    </main>
    <footer>
      <div class="container-fluid">
        <hr/>
        <hr/>
        <p class="small text-muted">Ungrammatical usages are marked as follows – <span style="color: green">*<span
      style="font-style: italic; text-decoration-line: underline; text-decoration-style: wavy; text-decoration-color: green;"
      title="gonny no!">chan do bha iad</span></span>. Copyright for example citations lies with the authors themselves and these are reproduced with permission where possible. 
        Translations (except where marked otherwise) are indicative, literal and approximate. <span class="text-danger">This page is, and will always be, a work in progress.</mark></p> 
        <hr/>
      </div>
    </footer>
    <script>
            $(function () {
                $('[data-bs-toggle="tooltip"]').tooltip();
            })
        </script>
  </body>
</html>
HTML;
