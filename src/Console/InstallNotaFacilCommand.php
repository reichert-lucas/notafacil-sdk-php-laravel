<?php

namespace Jetimob\NotaFacil\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Jetimob\NotaFacil\NotaFacilServiceProvider;

class InstallNotaFacilCommand extends Command
{
    protected $signature = 'notafacil:install';

    protected $description = 'Publica o arquivo de configuração do SDK da NotaFacil para o diretório "config" local';

    public function handle()
    {
        if (File::exists(config_path('notafacil.php'))) {
            if ($this->confirm('O arquivo de configuração já existe, deseja sobrescrever?', false)) {
                $this->publish(true);
                $this->info('Arquivo de configuração sobrescrito');
            }

            return;
        }

        $this->publish();
        $this->info('Arquivo de configuração copiado para ./config/notafacil.php');
    }

    private function publish($force = false): void
    {
        $params = [
            '--provider' => NotaFacilServiceProvider::class,
            '--tag'      => 'config'
        ];

        if ($force) {
            $params['--force'] = '';
        }

        $this->call('vendor:publish', $params);
    }
}
