<?php

namespace YourNameSpaceGoesHere\PageWrapper;

use PhoenixPhp\Core\BaseWrapper;
use PhoenixPhp\Core\Parser;

class PageWrapper extends BaseWrapper
{

    public function parseContent(): string
    {
        $this->registerCss('Style.css', true);
        $template = new Parser($this->getTemplatePath());

        $pageContent = $this->getPageContent();
        $template->parse('PAGE_CONTENT', $pageContent);

        $subTemplate = new Parser($this->getSubTemplatePath(), 'ADDITIONAL_META');
        $this->setAdditionalMeta($subTemplate->retrieveTemplate());
        
        $navigation = $this->callModule('navigation');
        $template->parse('NAVIGATION', $this->renderModule($navigation));

        $burgerIcon = $this->callModule('navigation', 'burger');
        $template->parse('BURGER_ICON', $this->renderModule($burgerIcon));

        return $template->retrieveTemplate();
    }

    public function parseVueComponents(): void
    {
        $this->registerVueMixin('util', true);
        $this->registerMainMixin('main');
    }

}