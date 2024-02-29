<?php
declare(strict_types=1);

namespace CleanupBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AssetCleanupCommand extends Command
{
    protected static $defaultName = 'cleanup:assets';
    protected static $defaultDescription = 'cleanup assets';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setHidden(true);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return 0;
    }
}
