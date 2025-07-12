<?php

namespace Console;

use System\Core\Console;

class Welcome extends Console
{
    protected static string $name = 'welcome';
    protected string $description = 'displays welcome message';

    /**
     * Define short and long options for getopt().
     */
    public function options(): array
    {
        return [
            'help' => [
                'short' => 'h',
                'message' => 'prints help message'
            ]
        ];
    }

    /**
     * Entry point for the command execution.
     */
    public function run(): void
    {
        if ($this->getOption('h')) {
            $this->displayHelp();

            return;
        }

        // Write your command action here.
    }
}
