# Statamic Rssfeed addon
Requirement: Statamic 2.x

### What is this?
It's an RSS Feed widget for Statamic 2.x

### Installation
- Copy `Rssfeed` folder to your `site/addons` folder
- Log on to your control panel, visit `/cp/system/addons`, make sure that `Rssfeed` is listed
- Click on the Refresh button on the top right of your browser to initialize new addon
- Alternatively, go to your terminal, `cd` to your website root and type `php please addon:refresh` and hit Enter.
- Copy the following settings into your `Settings/Control Panel`

```
widgets:
  - 
    type: rssfeed
    title: Hacker News
    feed: https://news.ycombinator.com/rss
    charset: utf-8
    enable_cache: true
    offset: 0
    limit: 6
    width: 50
```

### Changelog
- 1.0.1: Updated name to fix case-sensitive issue with namespacing
- 1.0.0: Initial commit