<?php

namespace CleanupBundle\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * @internal
 */
#[AsCommand(
    name: 'cleanup:asset',
    description: 'Cleanup assets'
)]

class AssetCleanCleanupCommand extends AbstractCommand
{
    public function __construct(private EventDispatcherInterface $eventDispatcher)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addOption(
                'temp',
                't',
                InputOption::VALUE_NONE,
                'create tmp folder'
            )
            ->addOption(
                'all',
                'a',
                InputOption::VALUE_NONE,
                'Clear all'
            )
        ;
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
