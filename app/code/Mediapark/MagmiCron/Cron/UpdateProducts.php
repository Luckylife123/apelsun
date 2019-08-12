<?php

namespace Mediapark\MagmiCron\Cron;


class UpdateProducts
{

       public function execute()
        {
            exec('php magmi/cli/magmi.cli.php -profile="magento2" -mode="create"');
        }
}