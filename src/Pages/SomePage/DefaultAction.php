<?php

namespace YourNameSpaceGoesHere\Pages\SomePage;

use PhoenixPhp\Core\BasePage;
use PhoenixPhp\Core\Parser;

class DefaultAction extends BasePage
{
    protected string $title = 'Some Page - Some other page';
    protected string $description = 'This is an alternate page that shows how the URI works';

    public function parseContent(): string
    {
        $this->registerCss('SomePage.css');
        $template = new Parser($this->getTemplatePath());
        return $template->retrieveTemplate();
    }

    public function parseVueComponents(): void
    {
    }

}