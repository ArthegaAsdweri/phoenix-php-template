<?php

namespace YourNameSpaceGoesHere\Pages\Home;

use PhoenixPhp\Core\BasePage;
use PhoenixPhp\Core\Parser;

class DefaultAction extends BasePage
{
    protected string $title = 'Home - your first Page with Phoenix PHP';
    protected string $description = 'This is your perfect start for setting up your own project';

    public function parseContent(): string
    {
        $template = new Parser($this->getTemplatePath());
        return $template->retrieveTemplate();
    }

    public function parseVueComponents(): void
    {
        $this->registerVueComponent('ph-quote');
        $this->registerVueComponent('ph-treeview');
    }

}