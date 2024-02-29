<?php
declare(strict_types=1);

namespace CleanupBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Event\SystemEvents;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

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
            ->setHidden(false)
            ->addOption(
                'tags',
                't',
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Only specific tags (csv list of tags)'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return 0;
    }
}
