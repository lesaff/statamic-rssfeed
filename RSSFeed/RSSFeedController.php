<?php

namespace Statamic\Addons\Rssfeed;

use Statamic\Extend\Controller;
use Statamic\API\Config;

class RssfeedController extends Controller
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */

    public function saveSettings()
    {
        return $this->view('save', [
            'title' => 'Save RSS Feed Settings'
        ]);
    }

    public function getSettings()
    {

        return $this->view('edit', [
            'title'         => 'Edit RSS Feed Settings',
            'type'          => 'Type',
            'feed'          => 'Feed',
            'charset'       => 'Charset',
            'enable_cache'  => 'Enable Cache',
            'offset'        => 'Offset',
            'limit'         => 'Limit',
        ]);
    }

}
