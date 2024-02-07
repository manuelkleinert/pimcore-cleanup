<?php
declare(strict_types=1);

namespace CleanupBundle\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
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
        
        // $this
        //     ->addOption(
        //         'temp',
        //         't',
        //         InputOption::VALUE_NONE,
        //         'create tmp folder'
        //     )
        //     ->addOption(
        //         'all',
        //         'a',
        //         InputOption::VALUE_NONE,
        //         'Clear all'
        //     )
        // ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return 0;
    }

    /**
     * @param string[] $tags
     *
     * @return string[]
     */
    private function prepareTags(array $tags): array
    {
        $result = [];

        return $result;
    }
}
