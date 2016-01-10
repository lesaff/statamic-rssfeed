<?php namespace Statamic\Addons\Rssfeed;

use Statamic\Extend\Widget;

class RssfeedWidget extends Widget
{
    public function html()
    {
        // Get settings
        $settings = $this->config;

        // Define Simplepie
        $feed = new \SimplePie();
        $feed->set_feed_url($settings['feed']);
        $feed->enable_cache($settings['enable_cache']);
        $feed->set_cache_location(cache_path());
        $feed->set_cache_duration(60*60*12);
        $feed->set_output_encoding($settings['charset']);
        $feed->init();
        $title = $settings['title'];
        $data = [];

        foreach($feed->get_items($settings['offset'],$settings['limit']) as $key => $item)
        {
            $data[$key]['title']        = $item->get_title();
            $data[$key]['permalink']    = $item->get_permalink();
            $data[$key]['date']         = $item->get_date();
            $data[$key]['updated_date'] = $item->get_updated_date();
            $data[$key]['author']       = $item->get_author();
            $data[$key]['category']     = $item->get_category();
            $data[$key]['description']  = $item->get_description();
            $data[$key]['content']      = $item->get_content();
        }
        return $this->view('rssfeed', compact('title', 'data'));
    }
}
