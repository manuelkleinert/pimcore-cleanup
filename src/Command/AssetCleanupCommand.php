<?php
declare(strict_types=1);

namespace CleanupBundle\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AssetCleanCleanupCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setHidden(false)
            ->setName('cleanup:asset')
            ->setDescription('Asset cleanup command')
            ->addArgument('mode', InputArgument::OPTIONAL, 'mode, forcereload or normal or singleid-<ID>', 'normal');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // dump
        $this->dump("Isn't that awesome?");

        // add newlines through flags
        $this->dump("Dump #2");

        // only dump in verbose mode
        $this->dumpVerbose("Dump verbose");

        // Output as white text on red background.
        $this->writeError('oh noes!');

        // Output as green text.
        $this->writeInfo('info');

        // Output as blue text.
        $this->writeComment('comment');

        // Output as yellow text.
        $this->writeQuestion('question');
    }
}
