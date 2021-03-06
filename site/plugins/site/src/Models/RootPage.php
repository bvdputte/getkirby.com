<?php

namespace Kirby\Site\Models;

use Kirby\Cms\Field;
use Kirby\Cms\Page;

class RootPage extends Page
{

    public function title(): Field
    {
        return parent::title()->value('$kirby->root(\'' . $this->slug() . '\')');
    }

    public function example(): Field
    {
        return parent::example()->value('```php' . PHP_EOL . '<?= $kirby->root(\'' . $this->slug() . '\') ?>' . PHP_EOL . '```');
    }

}
