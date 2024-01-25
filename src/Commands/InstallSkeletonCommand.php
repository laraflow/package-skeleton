<?php

namespace VendorName\Skeleton\Commands;

use Illuminate\Console\Command;

class InstallSkeletonCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
