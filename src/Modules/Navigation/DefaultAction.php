<?php

namespace YourNameSpaceGoesHere\Modules\Navigation;

use PhoenixPhp\Core\BaseModule;
use PhoenixPhp\Core\Parser;

class DefaultAction extends BaseModule
{
    public function parseContent(): string
    {
        $template = new Parser($this->getTemplatePath());
        return $template->retrieveTemplate();
    }

    public function parseVueComponents(): void
    {
        $this->registerVueComponent('ph-navlist', true);
        $this->registerVueComponent('ph-navigation');
    }

}