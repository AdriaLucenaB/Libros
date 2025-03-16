<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ScrapeAmazon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:amazon {isbn}'; // <-- Definimos un argumento llamado isbn

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Realiza scraping de Amazon para un ISBN específico';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $isbn = $this->argument('isbn');
        
        $this->info("Iniciando scraping para ISBN: $isbn");

        // Llamada al script de Python pasando el ISBN
        $process = new Process(['python', base_path('scraping/amazon_scraper.py'), $isbn]);
        
        try {
            $process->mustRun();
            $this->info('Resultado: ' . $process->getOutput());
        } catch (ProcessFailedException $exception) {
            $this->error('Error ejecutando el script: ' . $exception->getMessage());
        }
    }
}
