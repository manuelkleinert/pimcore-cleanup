<?php
declare(strict_types=1);

namespace CleanupBundle\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @internal
 */
class AssetCleanCleanupCommand extends AbstractCommand
{
    protected function configure(): void
    {
        $this->setName('cleanup:asset');
        $this->setDescription('Cleanup assets');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return 0;
    }
}
