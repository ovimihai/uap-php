<?php
namespace UAParser\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use UAParser\Parser;

class ParserCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('ua-parser:parse')
            ->setDescription('Parses a user agent string and dumps the results.')
            ->addArgument(
                'user-agent',
                null,
                InputArgument::REQUIRED,
                'User agent string to analyze'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = $this->getParser()->parse($input->getArgument('user-agent'));

        $output->writeln(json_encode($result, JSON_PRETTY_PRINT));
    }

    private function getParser()
    {
        return new Parser();
    }
}
