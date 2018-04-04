# tgStatistics

----
## How many members do I have?
I sure you have a [telegram](https://telegram.org/) account! and you have a [channel](https://telegram.org/tour/channels) too? maybe!

> Channels are a tool for broadcasting your messages to large audiences. They can have an unlimited number of subscribers, they can be public with a permanent URL and each post in a channel has its own view counter.

## usage
1. Upload `tgStatistics.zip` to the `/wp-content/plugins/` directory and extract it.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php tgStatistics($botAPI, $channelUsername); ?>` in your templates, or use the shortcode [tgstatistics] with two fields (botapi and username), and you can leave "botapi" because it has a default value.

## Examples
    <?php
        echo tgStatistics('532077202:AAHOXZ1kfsfz-jOfNGs6QxAteHfSaDaSrI4', 'WebPajooh');
    ?>

## Thanks
* [Kolahzary](https://github.com/Kolahzary)
