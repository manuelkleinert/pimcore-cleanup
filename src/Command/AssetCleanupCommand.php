<?php
declare(strict_types=1);

namespace CleanupBundle\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'cleanup:asset',
    description: 'Awesome command'
)]
class AssetCleanCleanupCommand extends AbstractCommand
{
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
